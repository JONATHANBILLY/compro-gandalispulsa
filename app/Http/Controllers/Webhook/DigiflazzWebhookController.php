<?php

namespace App\Http\Controllers\Webhook;

use App\Http\Controllers\Controller;
use App\Http\Controllers\digiFlazzController;
use App\Models\Layanan;
use App\Models\Pembayaran;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DigiflazzWebhookController extends Controller
{
    public function webhookUpdate(Request $request)
    {
        $secret = env('DIGIFLAZZ_WEBHOOK_SECRET');
        $post_data = $request->getContent();
        $signature = hash_hmac('sha1', $post_data, $secret);

        /*
         * Validate Signtature
         */
        if ($request->header('X-Hub-Signature') == 'sha1=' . $signature && $request->header('X-Digiflazz-Event') == 'update') {
            $ref_id = $request->data->ref_id;
            $transaction = Pembayaran::where('provider_order_id', $ref_id)
                ->where('status', 'Menunggu')
                ->first();

            if (!$transaction) {
                return response()->json([
                    'status' => false,
                    'message' => "Transaksi tidak ditemukan"
                ]);
            }

            $log_request = $transaction->log ? json_decode($transaction->log, true) : [];
            //UPDATE TRANSACTION
            $keterangan = 'Sedang diproses...';
            $status_pembelian = 'Menunggu';

            $log_request['callback_payload'] = $request->getContent();
            $log_request['callback_date'] = date('d-m-Y H:i:s');
            if ($request->data->ref_id == "Sukses") {
                $keterangan = $request->data->sn;
                $status_pembelian = 'Sukses';
            }

            if ($request->data->ref_id == "Gagal") {
                $keterangan = 'Transaksi GAGAL, mohon hubungi admin / CS untuk direfund.';
                $status_pembelian = 'Gagal';
            }

            Pembelian::where('provider_order_id', $ref_id)
                ->update([
                    'keterangan' => $keterangan,
                    'status' => $status_pembelian,
                    'log' => $log_request
                ]);

            return Response::json([
                'success' => true,
                'message' => 'Callback Webhook Accepted',
            ]);
        }
        \Log::info(json_decode($request->getContent(), true));
        return Response::json([
            'success' => false,
            'message' => 'Invalid Signature Or Invalid Request Params',
        ]);
    }
}
