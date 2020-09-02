{!!dmha_373_header_login($agent)!!}

<div class="row row-login">

@if(Session::has('message'))
    {!!color_admin_apple_v42_flash_message(dmha_40_id_check_col( Session::get('message'),'status'),dmha_40_id_check_col( Session::get('message'),'nama'))!!}
@endif

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
                <h5>
                    Not a member yet? Click <a href="{{url('/')}}/register">here</a> to register.
                </h4>
            </div>
        </form>
    </div>
    
</div>
