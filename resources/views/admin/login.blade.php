<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{("public/admin/css/login.css")}}">
    <link rel="stylesheet" href="{{("public/admin/css/style.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
</head>
<body>
    <div class="container">
    <div class="image-container">
        <img src="{{("public/server/images/Cosmetics Wallpaper.jpg")}}"
            alt="">
        <div class="content-container">
            <h3>Welcome back!</h3>
            <p>Remember we always provide the best of the highest quality cosmetics.</p>
            <p>Be froud of our years of contributing to beauty community as well as health care industry.</p>
            <p>It's such a great pleasure for us to take care of our customers. Every day is a bless!</p>
        </div>
    </div>
    <div class="login-form">
        <form action="{{ route('login') }}" autocomplete="off"  method="POST">
            @csrf
            <h2 class="form-heading">Admin Login</h2>
            <div class="main-form">
                <input type="text" maxlength="40" value="{{ old('username') }}" autocomplete="username" required name = "username" autofocus class="login" id="username-input" placeholder="Username"
                    onfocus="clearPlaceHolder(this)">
                <div class="password-container">
                    <input type="password" required maxlength="30"name = "password" class="login" id="password-input" placeholder="Password"
                        onfocus="clearPlaceHolder(this)">
                    <i class="fas fa-eye-slash  password-toggle-button " id="toggle-button"></i>
                </div>

                <input type="checkbox" name="remember" id="remember-user" {{ old('remember') ? 'checked' : '' }}> <span>Remember me</span>
                <a href="{{ route('password.request') }}" id="forgot-password"><span>Forgot your
                        password?</span></a>
                <br>
                <div class="button-container">
                    <i class="fas fa-lock    "></i>
                    <input type = "submit" name = "submit" id="submit-login" value = "Login as an admin"></input>
                </div>
            </div>
        </form>
    </div>   
</body>
</html>
