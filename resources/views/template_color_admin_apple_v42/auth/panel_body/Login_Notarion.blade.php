<div class="row row-login">

    <div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 col-10 offset-1">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group ">                        
                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="login-buttons">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Login</button>
                
            </div>
            <div class="m-t-20">
                Not a member yet? Click <a href="{{url('/')}}/register">here</a> to register.
            </div>
        </form>
    </div>
    
</div>
