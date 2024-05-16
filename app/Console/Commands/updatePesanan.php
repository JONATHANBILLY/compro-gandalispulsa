<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Pembelian;
use App\Models\User;
use App\Models\Layanan;
use App\Models\LayananPpob;
use App\Http\Controllers\digiFlazzController;
use App\Http\Controllers\VipResellerController;
use App\Http\Controllers\ApiGamesController;
use App\Http\Controllers\JulyhyusController;
use App\Http\Controllers\iPaymuController;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class updatePesanan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updatePesanan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $api = \DB::table('setting_webs')->where('id', 1)->first();
        $pesanan = Pembelian::Where('status', 'Menunggu')
            ->orWhere('status', 'Sukses')
            ->get();

        $digiFlazz = new digiFlazzController;
        $vip = new VipResellerController;
        $apigames = new ApiGamesController;
        $july = new JulyhyusController;

        foreach ($pesanan as $data) {
            $pesan = "Pembelian *$data->layanan* Telah Berhasil Dikirim, Silahkan Cek Akun Anda, Terima kasih Sudah Order\n\n" .
                "Jika Pesanan Anda Belum Masuk Harap Hubungi Admin\n" .
                "Whatsapp : " . $api->nomor_admin;

            $pembayaran = Pembayaran::where('order_id', $data->order_id)->first();

            if ($data->tipe_transaksi == "game") {
                $layanan = Layanan::where('layanan', $data->layanan)->first();
            } else if ($data->tipe_transaksi == "pulsa") {
                $layanan = Layanan::where('layanan', $data->layanan)->first();
            }
            try {
                $providerId = $layanan->provider_id;
                $provider_order_id = $data->provider_order_id;
                $uid = $data->user_id;
                $zone = $data->zone;

                $provider_order_id = $data->provider_order_id;

                $loging = $data->log ? json_decode($data->log, true) : [];

                /*
                 * Check jika logging ada data checker_status_last !== sukses / batal
                 * maka lakukan pengecekan
                 */

                if (
                    !isset($loging['checker_status_last']) ||
                    (isset($loging['checker_status_last']) && $loging['checker_status_last'] != 'Sukses' && $loging['checker_status_last'] != 'Batal')
                ) {

                    if ($layanan->provider == "digiflazz") {
                        $checking = $digiFlazz->status($provider_order_id, $providerId, $uid, $zone);
                    } else if ($layanan->provider == "apigames") {
                        $checking = json_decode($apigames->status($provider_order_id), true);
                    } else if ($layanan->provider == "vip") {
                        $checking = $vip->status($provider_order_id);
                        $checking['data']['status'] = $checking['data'][0]['status'];
                    }
                    // dd($checking['data']);
                    $status_pembelian = '';
                    $status_check = false;
                    $sn = '-';
                    if ($checking['data']['status'] == "Success" || $checking['data']['status'] == "Sukses") {
                        $status_check = true;
                        $status_pembelian = "Sukses";
                        $sn = $checking['data']['sn'];
                    } else if ($checking['data']['status'] == "Batal" || $checking['data']['status'] == "Error" || $checking['data']['status'] == "error" || $checking['data']['status'] == "Gagal") {
                        $status_check = true;
                        $status_pembelian = "Batal";
                    }

                    $pesan = "
                Pembelian : *$data->layanan*\n
                Jika Pesananmu Muncul *CODE / SN* Pesananmu Sukses(sudah masuk)
                CODE / SN : *$sn*\n
                Telah Berhasil Dikirim, Silahkan Cek Akun Anda, Terima kasih Sudah Order\n\n" .
                        "Jika Pesanan Anda Belum Masuk Harap Hubungi Admin\n" .
                        "Whatsapp : " . $api->nomor_admin;

                    $loging['status_check'] = $status_check;
                    $loging['date_check'] = date('d-m-Y H:i:s');
                    $loging['checker_status_last'] = $status_pembelian;
                    $loging['response_check'] = $checking;

                    if ($status_check) {
                        if ($status_pembelian == "Sukses") {
                            if (date('Y-m-d', strtotime($data->created_at)) == date('Y-m-d')) {
                                $requestPesan = $this->msg($pembayaran->no_pembeli, $pesan);
                            }
                            Pembelian::where('provider_order_id', $provider_order_id)
                                ->update([
                                    'keterangan' => 'SN/Ref - ' . $sn,
                                    'status' => $status_pembelian,
                                    'log' => json_encode($loging)
                                ]);

                        } else {
                            $keterangan = 'Transaksi GAGAL, mohon hubungi admin / CS untuk dibantu pengecekan lebih lanjut!.';
                            if ($pembayaran->metode == "SALDO") {
                                $user = User::where('username', $data->username)->first();
                                $user->update([
                                    'balance' => $user->balance + $data->harga
                                ]);
                                $keterangan = 'Transaksi GAGAL, Saldo sudah otomatis ditambahkan ke akun Kamu!';
                            }
                            Pembelian::where('provider_order_id', $provider_order_id)
                                ->update([
                                    'keterangan' => $keterangan,
                                    'status' => $status_pembelian,
                                    'log' => json_encode($loging)
                                ]);
                        }
                    }
                }

            } catch (\Exception $e) {
//                continue;
//                 throw $e;
            }
        }

    }

    public function msg($nomor, $msg)
    {
        $api = \DB::table('setting_webs')->where('id', 1)->first();

        $data = [
            'api_key' => $api->wa_key,
            'sender' => $api->nomor_admin,
            'number' => "$nomor",
            'message' => "$msg"
        ];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array('Content-Type: application/json')
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }
}
