@extends('template.template')

@section('custom_style')


<style>
    .accordion-button {
            box-shadow: none !important;
        }
        .product .box {
            margin-bottom: 40px;
        }
</style>


@endsection


@section('content')
<div class="content-body">
    
			<div class="col-lg-6 mx-auto px-3 pt-3 mb-3">
				<h2>Halo, mari bergabung</h2>
				<p class="mb-2">Buat akun sekarang dan rasakan fitur fitur yang menarik. ✌️</p>
				@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
				<form action="{{url('/register')}}" method="POST" class="my-form">
				    @csrf					
                     <div class="mb-3">
						<label>Nama Lengkap</label>
						<input type="text" class="form-control" placeholder="Nama Lengkap" autocomplete="off" name="nama" required>
					</div>
					<div class="mb-3">
						<label>Username</label>
						<input type="text" class="form-control" placeholder="Username" autocomplete="off" name="username" required>
					</div>
					<div class="mb-3">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="Password" autocomplete="off" name="password" required>
					</div>
					<div class="mb-3">
						<label>Nomor Whatsapp</label>
						<input type="number" class="form-control" placeholder="62xXXXXXXX" autocomplete="off" name="no_wa" required>
						<p class="text-danger">* Harap menggunakan kode negara ( Tidak dengan + )</p>
					</div>
					<div class="mt-3">
						<button class="btn btn-primary  py-2 w-100" type="submit" name="tombol" value="submit">Mendaftar</button>
					</div>
					<p class="mt-3">Sudah memiliki akun ? <a href="{{url('/login')}}" class="text-decoration-none text-primary">Login!</a></p>
				</form>
			</div>
		</div>
		
         










@push('custom_script')



@endpush




@endsection
