{!!dmha_373_header_login()!!}

	<div class="row ">

		<div class="col-md-4 offset-md-4">
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
	