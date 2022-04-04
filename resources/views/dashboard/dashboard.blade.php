@extends('layouts.master')
@section('content')
    @if (session('error'))
        <script>
            alert('Anda Tidak Memiliki Akses')
        </script>
    @endif
    <!-- <div class="mb-4 text-grey-800">
        <p>Selamat Datang Di Aplikasi Peduli Diri, Dimana Aplikasi Ini untuk Mencatat Riwayat Perjalanan.</p>
        <p>Anda Login Sebagai :  <br> <b>{{ Auth()->user()->nama }}</b></p>
    </div>
    <div class="row">


                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <a href=""><div class="h5 mb-0 font-weight-bold text-primary">Catat Perjalanan</div></a>
                                            </div>
                                            <div class="col-4">
                                                <i class="fas fa-fw fa-clone fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <a href="" ><div class="h5 mb-0 font-weight-bold text-info">Riwayat Perjalanan</div></a>
                                            </div>
                                            <div class="col-4">
                                                <i class="fas fa-fw fa-book fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    </div> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('admin/assets/img/banner3.png') }}" class="d-block w-100" style="height: 450px;"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('admin/assets/img/banner1.png') }}" class="d-block w-100" style="height: 450px;"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('admin/assets/img/banner2.png') }}" class="d-block w-100" style="height: 450px;"
                    alt="...">
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
@endsection
