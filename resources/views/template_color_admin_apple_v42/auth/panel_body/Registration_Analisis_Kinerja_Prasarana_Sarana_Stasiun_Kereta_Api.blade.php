
{!!dmha_373_header_login($agent)!!}

<div class="row row-login">

    <div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 col-10 offset-1">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group ">                        
                <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="{{ __('Name') }}" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="form-group ">
                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="form-group">
                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group ">
                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Re-type Password') }}">
            </div>

            
            <div class="login-buttons">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
            </div>

            <div class="m-t-20">
				Already a member? Click <a href="{{url('/')}}/login">here</a> to login.
            </div>
        </form>
    </div>
    
</div>
