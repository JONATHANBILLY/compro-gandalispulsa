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
			<h2 class="mb-4">Login Page</h2>
			    @if(session('error'))
			    
			    <div class="alert alert-danger">
			       <ul>
			           <li>{{session('error')}}</li>
			       </ul>
			    </div>
			    
			    @endif
			    @if(session('success'))
			    
			    <div class="alert alert-success">
			       <ul>
			           <li>{{session('success')}}</li>
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
				<form action="{{url('/login')}}" method="POST" class="my-form">
				    @csrf
					<div class="mb-3">
						<label>Username/No Handphone</label>
						<input type="text" class="form-control" autocomplete="off" name="username" required>
					</div>
					<div class="mb-3">
						<label>Password</label>
						<input type="password" class="form-control" name="password" required>
					</div>
					<div class="row mt-3">
						<div class="col-6">
							<div class="form-check">
								<input class="form-check-input mt-1" type="checkbox" value="" id="flexCheckDefault">
								<label class="form-check-label" for="flexCheckDefault">
									Remember me
								</label>
							</div>
						</div>
						<div class="col-6 text-end">
							<a class="text-decoration-none text-danger" href="{{url('/forgot-password')}}">Forgot password?</a>
						</div>
					</div>
					<div class="mt-3">
						<button class="btn py-2 btn-primary w-100" type="submit" name="tombol" value="submit">Sign In</button>
					</div>
					<p class="mt-3">Belum memiliki akun? <a href="{{url('/register')}}" class="text-decoration-none text-primary" style="color: white">Daftar sekarang!</a></p>
				</form>
			</div>
		</div>
		
        









@push('custom_script')



@endpush




@endsection
