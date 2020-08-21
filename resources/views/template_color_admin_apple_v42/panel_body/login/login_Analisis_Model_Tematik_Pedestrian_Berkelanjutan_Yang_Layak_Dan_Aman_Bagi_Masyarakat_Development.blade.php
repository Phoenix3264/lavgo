<div class="row m-t-40">
	<div class="col-md-3 text-center">
		<img src="{{ asset('/public/')}}/logo/unnar.png" alt="unnar" width="200px">
	</div>
	<div class="col-md-6 text-center">
		<h3>
			{!!dmha_373_what_is_my_penelitian('nama')!!}
		</h3>
		<h4>
			{!!dmha_373_what_is_my_penelitian('deskripsi')!!}
		</h4>
		<h5>
			Tahun {!!dmha_373_what_is_my_penelitian('tahun')!!}
		</h5>
		
	</div>
	<div class="col-md-3 text-center">
		<img src="{{ asset('/public/')}}/logo/dikti_brin.png" alt="dikti_brin" width="100px">
	</div>
</div>

<div class="row m-t-10">
	<div class="col-md-3 text-center">
		Copyright 
			{!!dmha_373_what_is_my_penelitian('peneliti')!!}
	</div>
	<div class="col-md-6 text-center">
		
	</div>
	<div class="col-md-3 text-center">
	</div>
</div>

<div  class=" ">
	<div class="login ">

		<div class="login-content">
			<form method="POST" action="{{ route('login') }}">
				@csrf
				<div class="form-group m-b-20">                        
					<input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}" autofocus>

					@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror

				</div>
				<div class="form-group m-b-20">
					<input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

					@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="login-buttons">
					<button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
					
				</div>
			</form>
		</div>
		
	</div>
	
</div>