<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>PeduliDiri - Riwayat Perjalanan</title>

    <link rel="stylesheet" href="{{ asset('assets-br/css/maicons.css') }}">

    <link rel="stylesheet" href="{{ asset('assets-br/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets-br/vendor/animate/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets-br/css/theme.css') }}">

    <link href="{{ asset('assets-br/img/logo1.png') }}" rel='shorcut icon'>

    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-pickadate.min.css">

    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/form-validation.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky mb-5" data-offset="500">
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


    @if (Request::url() != route('user.data') )
        @if (isset($data))

        @else
        <footer class="page-footer bg-image" style="background-image: url(../assets/img/world_pattern.svg);">
            <div class="container">
                <p class="text-center" id="copyright">Copyright &copy; 2022. This template design and develop by <a
                        href="https://macodeid.com/" target="_blank">Peduli Diri</a></p>
            </div>
        </footer>
        @endif
    @endif

    <script src="{{ asset('assets-br/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('assets-br/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets-br/js/google-maps.js') }}"></script>

    <script src="{{ asset('assets-br/vendor/wow/wow.min.js') }}"></script>

    <script src="{{ asset('assets-br/js/theme.js') }}"></script>

    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="../../../app-assets/js/scripts/forms/pickers/form-pickers.min.js"></script>
    <script>
        feather.replace();
    </script>

</body>

</html>
