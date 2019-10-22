@extends('admin.layouts.admin')

@section('content')
    <div class="w3layouts-main">
        <h2>{{ __('Login User') }}</h2>
        <form action="{{ route('login') }}" method="post">

            @csrf

            <input id="email" type="email" placeholder="E-MAIL" class="ggg {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
            @endif


            <input id="password" placeholder="PASSWORD" type="password" class="ggg {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
            @endif




            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>




            <div class="col-md-6">

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

            <div class="clearfix"></div>
            <input type="submit" value="Sign In" name="login">
        </form>
        <p>Don't Have an Account ?<a href="{{ route('register') }}">Create an account</a></p>
    </div>

@endsection
