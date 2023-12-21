@extends ("layouts.app")
@section ("content")
<head>
    <link rel="stylesheet" href="{{("public/user/css/login.css")}}">
</head>
<div class = "container1">
<div class="login-container">
    <div class="login-form-container">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h2><b>Login to continue</b></h2>
            <div class="main-form">
                <input id="email" type="email" class="  login  form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }} " required autocomplete="email" autofocus placeholder = "Your email">
                   @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                <div class="password-container">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror  login" name="password" required autocomplete="current-password" placeholder="Your password here">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                <i class="fas fa-eye-slash  password-toggle-button  " ></i>
                </div>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><span>Remember me</span>

                <br>

                @if (Route::has('password.request'))
                                    <a class="btn btn-link" id="forgot-password" href="{{ route('password.request') }}">
                                        <span>Forgot your password?</span>
                                    </a>
                                @endif

                <div class="button-container">   
                    <i class="fas fa-lock    "></i>

                    <button type="submit" id="submit-login" class="btn btn-primary">
                               It's all done, let's go now!
                    </button>  
                </div>
            </div>
        </form>
    </div>
    <div class="other-actions-container">
        <ul class="login-methods">
            <li>
                <button id="facebook-login">
                    <i class="fab fa-facebook"></i>
                    Sign in with Facebook</button>
            </li>
            <li>
                <button id="google-login">
                    <i class="fab fa-google"></i>
                    <p>Sign in with Google</p>
                </button>
            </li>
            <p style="color: gray;">- Or -</p>

            <p style="color: gray;">- New and need register? -</p>
            <a href="index.php?page=register">
            <li>
                <button class="to-user-signup">
                    <i class="fas fa-check-circle    "></i>
                    Here you are!
                </button>
            </li>
            </a>
        </ul>
    </div>
</div>
</div>

@endsection