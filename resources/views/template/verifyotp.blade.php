@extends('template.template')

@section('custom_style')


<style>
    .accordion-button {
            box-shadow: none !important;
        }
        .btn.disabled, .btn:disabled, fieldset:disabled {
            background: #8ba4b1;
            border-color: #8ba4b1;
        }
        .product .box {
            margin-bottom: 40px;
        }
</style>


@endsection


@section('content')
<div class="content-body">
			<div class="px-3 pt-3 mb-3">
			    <div class="px-3">
					<h2>Check your Whatsapp</h2>
					<p class="mb-3">Please input OTP code from your message.</p>
				</div>
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
				<form action="{{url('/verify/otp')}}" method="POST" class="my-form px-3">
				    @csrf
					<div class="mb-3 row otp px-3">
						<div class="col-2"><input type="number" autocomplete="off" class="form-control text-center" id="otp-1" name="otp[]" onkeyup="input_otp('1', this.value);" placeholder="" required></div>
						<div class="col-2"><input type="number" autocomplete="off" class="form-control text-center" id="otp-2" name="otp[]" onkeyup="input_otp('2', this.value);" placeholder="" required></div>
						<div class="col-2"><input type="number" autocomplete="off" class="form-control text-center" id="otp-3" name="otp[]" onkeyup="input_otp('3', this.value);" placeholder="" required></div>
						<div class="col-2"><input type="number" autocomplete="off" class="form-control text-center" id="otp-4" name="otp[]" onkeyup="input_otp('4', this.value);" placeholder="" required></div>
						<div class="col-2"><input type="number" autocomplete="off" class="form-control text-center" id="otp-5" name="otp[]" onkeyup="input_otp('5', this.value);" placeholder="" required></div>
						<div class="col-2"><input type="number" autocomplete="off" class="form-control text-center" id="otp-6" name="otp[]" onkeyup="input_otp('6', this.value);" placeholder="" required></div>
					</div>
					<div class="mt-3">
						<button class="btn btn-primary w-100" type="submit" name="tombol" value="otp">Confirm</button>
					</div>
				</form>
			</div>
		</div>









@push('custom_script')


<script>
			function input_otp(ke, otp) {
				if (ke < 6) {
					if ($("#otp-" + ke).val().length == 1) {
						var next = parseInt(ke) + 1;

						$("#otp-" + next).focus();
					}
				} else {
					if ($("#otp-6").val().length > 1) {
						$("#otp-6").val(otp.slice(1, 2));
					}
				}
			}
		</script>
		
    


@endpush




@endsection