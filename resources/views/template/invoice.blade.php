@extends('template.template')

@section('custom_style')
    <style>
        .btn:disabled {
            background: #8ba4b1;
            border-color: #8ba4b1
        }
    </style>
@endsection


@section('content')
    <div class="content-body" style="height: auto; background-color: rgba(45,45,45,0.45);">
        <div class="px-3 pt-3 mb-2">
            @if (session('error'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{{ session('error') }}</li>
                    </ul>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="alert alert-info">
                <b>Harap Dibayar Sebelum {{ $expired }}</b><br> Segera lakukan pembayaran sesuai dengan kode bayar /
                nomor VA / Rekening Bank yang tercantum. Pastikan nominal pembayaran juga sesuai dengan total bayar.
            </div>
            @if (Str::upper($data->metode_pembayaran) == 'QRIS' ||
                    Str::upper($data->metode_pembayaran) == 'QRISC' ||
                    Str::upper($data->metode_pembayaran) == 'QRIS2' ||
                    Str::upper($data->metode_pembayaran) == 'QRISOP' ||
                    Str::upper($data->metode_pembayaran) == 'QRISCOP')
                <div id="qris-payment">
					@if (filter_var($data->no_pembayaran, FILTER_VALIDATE_URL))
						<center><img src="{{ $data->no_pembayaran }}" width="300"></center>
					@else
						<center>{!! QrCode::size(300)->generate($data->no_pembayaran); !!}</center>
					@endif
                    <center><span class="badge bg-danger text-center mt-3">Scan QR Code diatas ini</span></center>
                </div>
            @endif

            <div class="row mt-3">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="card bg-card mb-3">
                        <div class="card-body">
                            <div>
                                <span class="d-block">Tanggal Pembelian</span>
                                <b class="">{{ $data->created_at }}</b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Batas Pembayaran</span>
                                <b class="">{{ $expired }}</b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Nomor Pesanan</span>
                                <b class="">{{ $data->id_pembelian }}</b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Metode Pembayaran</span>
                                <b class="">{{ $data->metode_pembayaran }}</b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Kode Bayar / Nomor VA</span>
                                @if (Str::upper($data->metode_pembayaran) == 'QRIS' ||
                                        Str::upper($data->metode_pembayaran) == 'QRISC' ||
                                        Str::upper($data->metode_pembayaran) == 'QRIS2' ||
                                        Str::upper($data->metode_pembayaran) == 'QRISOP' ||
                                        Str::upper($data->metode_pembayaran) == 'QRISCOP')
                                    <a class="btn btn-primary btn-sm" href="#qris-payment">Lihat QRIS</a>
                                @elseif(Str::upper($data->metode_pembayaran) == 'SHOPEEPAY')
                                    <a class="btn btn-warning btn-sm" href="{{ $data->no_pembayaran }}">KLIK UNTUK BAYAR VIA
                                        SHOPEEPAY</a>
                                
                                @elseif(Str::upper($data->metode_pembayaran) == 'BANK-TRANSFER')
                                    <b>Bank : {{ $config->bank_name }}<br>
                                    Nomor Rekening : {{ $config->bank_account }}<br>
                                    Nama Rekening : {{ $config->bank_account_name }}</b>
                                @else
                                    <b class="">{{ $data->no_pembayaran }}</b>
                                @endif
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Status Pembayaran</span>
                                @if ($data->status_transaksi !== 'joki')
                                    @if ($data->status_pembayaran == 'Belum Lunas')
                                        <b class="">Menunggu Pembayaran</b>
                                    @elseif($data->status_pembayaran == 'EXPIRED')
                                        <b class="text-danger">Pembayaran Expired</b>
                                    @elseif($data->status_pembayaran == 'Batal')
                                        <b class="text-danger">Pembayaran Batal</b>
                                    @elseif($data->status_pembayaran == 'Lunas')
                                        <b class="" style="color:lime;">Pembayaran Berhasil</b>
                                    @elseif($data->status_pembayaran == 'PAID')
                                        <b class="" style="color:lime;">Pembayaran Berhasil</b>
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="card-footer">
                            <table class="table table-clear text-white">
                                <tbody>
                                    <tr>
                                        <td class="left">
                                            <strong>Total Pembayaran :</strong>
                                        </td>
                                        <td class="right text-right">
                                            <strong style="color:lime;">
                                                Rp.
                                                <span>
                                                    {{ number_format($data->harga_pembayaran, 0, ',', '.') }},-
                                                </span>
                                            </strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="card bg-card mb-3">
                        <div class="card-body">

                            <div class="">
                                <b class="">Detail Pembelian</b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Item</span>
                                <b class="">{{ $data->layanan }}</b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">User ID</span>
                                <b class="">{{ $data->user_id }}
                                    {{ $data->zone != null ? '(' . $data->zone . ')' : '' }}</b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Username</span>
                                <b class="">{{ $data->nickname }}</b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Keterangan</span>
                                <b class="">{{ $data->keterangan }}</b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Status Pembelian</span>
                                @if ($data->status_transaksi !== 'joki')
                                    @if ($data->status_pembelian == 'Pending')
                                        <b class="">Pending</b>
                                    @elseif($data->status_pembelian == 'Processing')
                                        <b class="">Diproses</b>
                                    @elseif($data->status_pembelian == 'Batal')
                                        <b class="text-danger">Batal</b>
                                    @elseif($data->status_pembelian == 'Sukses')
                                        <b class="" style="color:lime;">Sukses</b>
                                    @endif
                                @else
                                    @if ($data->status_pembayaran == 'Belum Lunas')
                                        <b class="">Pending</b>
                                    @elseif($data->status_pembayaran == 'Batal')
                                        <b class="text-danger">Batal</b>
                                    @elseif($data->status_pembayaran == 'Lunas')
                                        <b class="" style="color:lime;">Sukses</b>
                                    @endif
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Pesanan Belum Masuk ?</h4>
                        <p>Hubungi customer service kami untuk melakukan konfirmasi pesanan</p>
                    </div>
                    <a class="btn btn-primary btn-sm w-100 rounded" href="{{ !$config ? '' : $config->url_wa }}">Hubungi
                        Kami</a>
                </div>
            </div>

        </div>

    </div>








    @push('custom_script')
    @endpush




@endsection
