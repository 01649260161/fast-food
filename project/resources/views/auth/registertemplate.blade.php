@extends('admin.layouts.admin')

@section('content')

    <div class="w3layouts-main">
        <h2>{{ __('Register User') }}</h2>
        <form action="{{ route('register') }}" method="post">
            @csrf

            <input id="name" type="text" placeholder="NAME" class="ggg {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
            @endif


            <input id="email" type="email" placeholder="E-MAIL" class="ggg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif



            <input id="password" type="password"  placeholder="PASSWORD" class="ggg {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif



            <input id="password-confirm" type="password" placeholder="CONFIRM PASSWORD" class="ggg" name="password_confirmation" required>



            <h4><input type="checkbox">I agree to the Terms of Service and Privacy Policy</h4>

            <div class="clearfix"></div>
            <input type="submit" value="submit" name="register">
        </form>
        <p>Already Registered.<a href="{{route('login')}}">Login</a></p>
    </div>

@endsection
