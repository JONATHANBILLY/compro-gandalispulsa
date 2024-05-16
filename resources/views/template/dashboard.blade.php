@extends('template.template')

@section('custom_style')


<style>
    .btn:disabled{background:#8ba4b1;border-color:#8ba4b1}
    
    .box-profile{margin-top:-270px}
    .box-profile .body{border-radius:24px;height:500px;box-shadow:0 10px 15px -3px rgba(0,0,0,.1) , 0 4px 6px -2px rgba(0,0,0,.05)}
    .box-profile .body .img{width:100px;height:100px;border-radius:50%;text-align:center;line-height:100px;border:2px solid #fff;margin:-50px auto;font-size:22px}
</style>


@endsection


@section('content')
<div class="content-body" style="background-color: rgba(60,26,111,0.77)">
			
			<div class="col-lg-6 mx-auto px-3 py-5 mt-4 box-profile">
				<div class="bg-card p-2 rounded-4">
				    <a href="{{url('/riwayat-pembelian')}}">
					    <i class="mdi mdi-history float-start mx-3" style="font-size: 22px;color: #fff;"></i>
					</a>
					<a href="{{url('/user/edit/profile')}}">
						<i class="float-end me-3 mdi mdi-settings" style="font-size: 24px;color: #fff;"></i>
					</a>
					<div class="text-left px-4" style="margin-top: 65px;">
						<h3>{{Str::title(Auth()->user()->name)}}</h3>
						<hr style="border-color: #d5d5d5;">
						<h5>Saldo</h5>
						<h3 class="fw-bold">Rp {{ number_format(Auth::user()->balance, 0, ',', '.') }},-</h3>
						<span class="d-inline-block py-1 px-2 rounded bg-warning text-dark" style="font-size: 12px;">{{Str::title(Auth()->user()->role)}}</span>
					</div>
					<div class="row px-4 mt-5">
						<div class="col-8 color">
							<a href="{{url('/deposit')}}" class="text-decoration-none text-white">
								Top Up Saldo
							</a>
						</div>
						<div class="col-4 text-end">
							<a href="{{url('/deposit')}}" class="text-decoration-none">
								<i class="text-white mdi mdi-arrow-right" style="font-size: 20px;"></i>
							</a>
						</div>
					</div>
					<div class="row px-4 mt-1">
						<div class="col-8 color">
							<a href="{{url('/membership')}}" class="text-decoration-none text-white">
								Membership
							</a>
						</div>
						<div class="col-4 text-end">
							<a href="{{url('/membership')}}" class="text-decoration-none">
								<i class="text-white mdi mdi-arrow-right" style="font-size: 20px;"></i>
							</a>
						</div>
					</div>
					<!--riwayat pembelian-->
					<div class="row px-4 mt-1">
						<div class="col-8 color">
							<a href="{{url('/riwayat-pembelian')}}" class="text-decoration-none text-white">
								Riwayat Pembelian
							</a>
						</div>
						<div class="col-4 text-end">
							<a href="{{url('/riwayat-pembelian')}}" class="text-decoration-none">
								<i class="text-white mdi mdi-arrow-right" style="font-size: 20px;"></i>
							</a>
						</div>
					</div>
					<!--end-->
					<div class="text-left px-4 mt-4 mb-3">
						<button onclick="logout();" class="btn btn-danger border-0 text-danger fw-500">Logout</button>
					</div>
				</div>
			</div>
		</div>


@push('custom_script')

<script>
			var modal_logout = new bootstrap.Modal(document.getElementById('modal-logout'));

			function logout() {
				modal_logout.show();
			}
		</script>
		

@endpush




@endsection