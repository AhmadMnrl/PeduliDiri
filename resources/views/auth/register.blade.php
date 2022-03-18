<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Register | PeduliDiri</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('login/assets/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('login/assets/css/style.css')}}">
    <link href="{{asset('assets-br/img/loog.png')}}" rel='shorcut icon'>
</head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Halaman Register</h2>
                        <form method="POST" action="/postregister" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nik" id="name" placeholder="Masukan NIK (16 Digit)" autocomplete="off" class="form-control  @error('nisn') is-invalid @enderror" value="{{ old('nik') }}" />
                                @error('nik')
                                <span class=" invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="nama" placeholder="Masukan Username (Untuk Login)" autocomplete="off" class="form-control  @error('username') is-invalid @enderror" value="{{ old('username') }}" />
                                @error('username')
                                <span class=" invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="nama" id="nama" placeholder="Masukan Nama Panjang" autocomplete="off" class="form-control  @error('nama') is-invalid @enderror" value="{{ old('nama') }}" />
                                @error('nama')
                                <span class=" invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Masukan Email" autocomplete="off" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" />
                                @error('email')
                                <span class=" invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" class="form-control  @error('password') is-invalid @enderror" value="{{ old('password') }}" />
                                @error('password')
                                <span class=" invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Buat Akun" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('login/assets/images/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="/signin" class="signup-image-link">Sudah Mempunyai Akun?</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{asset('login/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('login/assets/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>