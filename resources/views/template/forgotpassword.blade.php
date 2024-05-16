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
			
			<div class="col-lg-6 mx-auto px-3 pt-3 mb-3">
			    <div class="px-3">
					<h2>Forgot your password?</h2>
					<p class="py-3">You will get the otp code via whatsapp</p>
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
			    <form action="{{url('/forgot-password')}}" method="POST" class="my-form px-3">
				    @csrf					
					<div class="mb-3">
						<input type="number" class="form-control" placeholder="628123456789" name="phone" autocomplete="off" required>
					</div>
					<div class="mt-3">
						<button class="btn btn-primary w-100 py-2" type="submit" name="tombol" value="submit">Request Reset</button>
					</div>
				</form>
			</div>
		</div>
		
        









@push('custom_script')



@endpush




@endsection