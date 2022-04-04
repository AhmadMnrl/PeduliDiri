<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login | Peduli Diri</title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="{{ asset('login/assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('login/assets/css/style.css') }}">
    <link href="{{ asset('assets-br/img/logo1.png') }}" rel='shorcut icon'>

</head>

<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset('login/assets/images/signin-image.jpg') }}" alt="sing up image">
                        </figure>
                        <a href="/signup" class="signup-image-link">Buat Akun</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Halaman Login</h2>
                        <form method="POST" class="register-form" id="login-form" action="/postsignin">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" autocomplete="off" name="username" id="your_name"
                                    placeholder="Username" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password" />
                            </div>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="remember" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div> -->
                            <div class="form-group form-button">
                                <button type="submit" id="signin" class="form-submit">Login</button>
                            </div>
                        </form>
                        <!-- <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

    </div>
    @include('sweetalert::alert')

    <!-- JS -->
    <script src="{{ asset('login/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('login/assets/js/main.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
