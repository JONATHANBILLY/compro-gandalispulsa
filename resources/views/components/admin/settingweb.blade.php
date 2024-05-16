@extends('main-admin')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Setting Web</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">/Setting Web</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
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
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Konfigurasi Website</h4>
        <form action="{{ url('/setting/web') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">Judul Website</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->judul_web}}" name="judul_web">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">Deskripsi Website</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" name="deskripsi_web">{{$web->deskripsi_web}}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">Logo Header</label>
                    <div class="col-lg-10">
                        <input type="file" class="form-control" name="logo_header">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">Logo Footer</label>
                    <div class="col-lg-10">
                        <input type="file" class="form-control" name="logo_footer">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">Logo Favicon</label>
                    <div class="col-lg-10">
                        <input type="file" class="form-control" name="logo_favicon">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">URL WA</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->url_wa}}" name="url_wa">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">URL IG</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->url_ig}}" name="url_ig">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">URL TikTok</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->url_tiktok}}" name="url_tiktok" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">URL Youtube</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->url_youtube}}" name="url_youtube" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">URL FB</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->url_fb}}" name="url_fb" >
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">CEKSTORE API</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->kbrstore_api}}" name="kbrstore_api" >
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Konfigurasi Warna Website</h4>
        <form action="{{ url('/setting/warnaweb') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">WARNA 1</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->warna1}}" name="warna1">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">WARNA 2</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->warna2}}" name="warna2">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">WARNA 3</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->warna3}}" name="warna3">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">WARNA 4</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->warna4}}" name="warna4">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Konfigurasi Tripay</h4>
        <form action="{{ url('/setting/tripay') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">TRIPAY API</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->tripay_api}}" name="tripay_api">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">TRIPAY MERCHANT CODE</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->tripay_merchant_code}}" name="tripay_merchant_code">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">TRIPAY PRIVATE KEY</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->tripay_private_key}}" name="tripay_private_key">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Konfigurasi Transfer</h4>
        <form action="{{ url('/setting/bank') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">BANK NAME</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->bank_name}}" name="bank_name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">BANK ACCOUNT</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->bank_account}}" name="bank_account">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">BANK ACCOUNT NAME</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->bank_account_name}}" name="bank_account_name">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Konfigurasi Cronos</h4>
        <form action="{{ url('/setting/cronos') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">CRONOS KEY</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->cronos_key}}" name="cronos_key">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">CRONOS TOKEN</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->cronos_token}}" name="cronos_token">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Konfigurasi Digiflazz</h4>
        <form action="{{ url('/setting/digiflazz') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">USERNAME DIGI</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->username_digi}}" name="username_digi">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">API KEY DIGI</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->api_key_digi}}" name="api_key_digi">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Konfigurasi ApiGames</h4>
        <form action="{{ url('/setting/apigames') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">APIGAMES SECRET</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->apigames_secret}}" name="apigames_secret">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">APIGAMES MERCHANT</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->apigames_merchant}}" name="apigames_merchant">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Konfigurasi vip reseller</h4>
        <form action="{{ url('/setting/vip') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">VIP APIID</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->vip_apiid}}" name="vip_apiid">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">VIP APIKEY</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->vip_apikey}}" name="vip_apikey">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Konfigurasi WA GATEWAY</h4>
        <form action="{{ url('/setting/wagateway') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">NOMOR ADMIN</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->nomor_admin}}" name="nomor_admin">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">WA KEY</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->wa_key}}" name="wa_key">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">WA NUMBER</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->wa_number}}" name="wa_number">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Konfigurasi Harga Membership</h4>
        <form action="{{ url('/setting/hargamembership') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">Harga Gold</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->harga_gold}}" name="harga_gold">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">Harga Platinum</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->harga_platinum}}" name="harga_platinum">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h4 class="mb-3 header-title mt-0">Konfigurasi mutasi E-wallet / bank</h4>
        <form action="{{ url('/setting/mutasi') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">OVO ADMIN</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->ovo_admin}}" name="ovo_admin">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">OVO1 ADMIN</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->ovo1_admin}}" name="ovo1_admin">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">GOPAY ADMIN</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->gopay_admin}}" name="gopay_admin">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">GOPAY1 ADMIN</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->gopay1_admin}}" name="gopay1_admin">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">DANA ADMIN</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->dana_admin}}" name="dana_admin">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">SHOPEEPAY ADMIN</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->shopeepay_admin}}" name="shopeepay_admin">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">BCA ADMIN</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->bca_admin}}" name="bca_admin">
                    </div>
                </div>
                <!--tambahan-->
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">BRI ADMIN</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->bri_admin}}" name="bri_admin">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">BNI ADMIN</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->bni_admin}}" name="bni_admin">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-form-label" for="example-fileinput">MANDIRI ADMIN</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$web->mandiri_admin}}" name="mandiri_admin">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection