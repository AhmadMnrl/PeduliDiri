<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>PeduliDiri - Riwayat Perjalanan</title>

    <link rel="stylesheet" href="{{asset('assets-br/css/maicons.css')}}">

    <link rel="stylesheet" href="{{asset('assets-br/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('assets-br/vendor/animate/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets-br/css/theme.css')}}">

    <link href="{{asset('assets-br/img/loog.png')}}" rel='shorcut icon'>
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
            @include('layouts.includes.navbar')
        </nav>

        <div class="container">
            <!-- <div class="page-banner home-banner">
                <div class="row align-items-center flex-wrap-reverse h-100">
                    <div class="col-md-11 py-6 wow fadeInLeft"> -->
            @yield('content')
            <!-- </div> -->
            <!-- </div> -->
            <!-- <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a> -->
            <!-- </div> -->
        </div>
    </header>



    <footer class="page-footer bg-image" style="background-image: url(../assets/img/world_pattern.svg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-4 py-3">
                    <h3>PeduliDiri</h3>
                    <p>Website pencatat riwayat perjalanan anda.</p>

                    <!-- <div class="social-media-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                        <a href="#"><span class="mai-logo-youtube"></span></a>
                    </div> -->
                </div>
                <div class="col-lg-4 py-3">
                    <h5>Link</h5>
                    <ul class="footer-menu">
                        <li><a href="/dashboard">Dashboard</a></li>
                        <li><a href="/perjalanan">Perjalanan</a></li>
                        <li><a href="/propil/{{auth::user()->id}}">Profile</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 py-3">
                    <h5>Contact Us</h5>
                    <p>Jl. JCC PLN No.255 Depok</p>
                    <a href="#" class="footer-link">566 777 888 999</a>
                    <a href="#" class="footer-link">smkinformatika@gmail.com</a>
                </div>

            </div>

            <p class="text-center" id="copyright">Copyright &copy; 2022. This template design and develop by <a href="https://macodeid.com/" target="_blank">Peduli Diri</a></p>
        </div>
    </footer>

    <script src="{{asset('assets-br/js/jquery-3.5.1.min.js')}}"></script>

    <script src="{{asset('assets-br/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('assets-br/js/google-maps.js')}}"></script>

    <script src="{{asset('assets-br/vendor/wow/wow.min.js')}}"></script>

    <script src="{{asset('assets-br/js/theme.js')}}"></script>

</body>

</html>