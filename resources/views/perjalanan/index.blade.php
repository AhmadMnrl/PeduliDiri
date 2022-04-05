@extends('layouts.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
            integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <style>
            body {
                color: #1a202c;
                text-align: left;
                background-color: #e2e8f0;
            }

            .main-body {
                padding: 5px;
            }

            .card {
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            }

            .card {
                position: relative;
                display: flex;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #fff;
                background-clip: border-box;
                border: 0 solid rgba(0, 0, 0, .125);
                border-radius: .25rem;
            }

            .card-body {
                flex: 1 1 auto;
                min-height: 1px;
                padding: 1rem;
            }

            .gutters-sm {
                margin-right: -8px;
                margin-left: -8px;
            }

            .gutters-sm>.col,
            .gutters-sm>[class*=col-] {
                padding-right: 8px;
                padding-left: 8px;
            }

            .mb-3,
            .my-3 {
                margin-bottom: 1rem !important;
            }

            .bg-gray-300 {
                background-color: #e2e8f0;
            }

            .h-100 {
                height: 100% !important;
            }

            .shadow-none {
                box-shadow: none !important;
            }

        </style>
    </head>

    <body>

        <div class="container">
            <!-- <div class="page-banner">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-mt-18">
                                <nav aria-label="Breadcrumb">
                                    <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Perjalanan</li>
                                    </ul>
                                </nav>
                                <h1 class="text-center">Perjalanan</h1>
                            </div>
                        </div>
                    </div> -->
            <div class="main-body">
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img @if (Auth::user()->foto != null && Auth::user()->foto > 0) src="{{ asset('foto/' . Auth::user()->foto) }}"
                                @else src="{{ asset('foto/default.jpeg') }}" @endif
                                        alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4>{{ auth()->user()->nama }}</h4>
                                        <p class="text-secondary mb-1">{{ auth()->user()->email }}</p>
                                        <a class="btn btn-primary" href="/propil/edit/{{ auth()->user()->id }}">Edit
                                            Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <form action="/perjalanan" method="get">
                            <div class="input-group ">
                                <input type="date" class="form-control" name="start_date">
                                <button class="genric-btn btn-info radius" type="submit">GET</button>
                            </div>
                        </form>
                        <div class="card mb-4 mt-2">
                            <div class="card-body">
                                <div class="row">
                                    {{-- @if (Auth::user()->role == 'admin') --}}
                                    {{-- <div class="col-md-6"> --}}
                                    <!-- <a href="/dashboard" class="btn btn-primary btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fa fa-arrow-left"></i>
                                                    </span>
                                                    <span class="text">Kembali</span>
                                                </a> -->
                                    {{-- <a href="/hapusall" class="btn btn-danger"><i
                                                    class="fa fa-exclamation-triangle"></i> Hapus Semua</a> --}}

                                    {{-- </div> --}}
                                    {{-- @endif --}}
                                    @if (Auth::user()->role == 'user')
                                        <div class="col-md-12    d-flex justify-content-end">
                                            <a href="/perjalanan/create"
                                                class="btn btn-primary btn-icon-split sticky-md-right mb-2">
                                                <span class="text">Tambah</span>
                                                <span class="icon text-white-50">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                            </a>
                                        </div>
                                    @endif
                                </div>

                                @if (Auth::user()->role == 'user')
                                    <div class="table-responsive">
                                        <table class="table table-hover" width="100%" cellspacing="0">
                                            <thead>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Jam</th>
                                                <th>Suhu Tubuh</th>
                                                <th>Lokasi</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </thead>
                                            @foreach ($data as $no => $isi)
                                                <tbody>
                                                    <td>{{ $no + 1 }}</td>
                                                    <td>{{ $isi->tanggal }}</td>
                                                    <td>{{ $isi->jam }}</td>
                                                    <td>{{ $isi->suhu_tubuh }}°</td>
                                                    <td>{{ $isi->lokasi }}</td>
                                                    <td style="text-align: center;">
                                                        <a href="/perjalanan/delete/{{ $isi->id }}"
                                                            class="btn btn-danger">Hapus</a>
                                                    </td>
                                                </tbody>
                                            @endforeach
                                        </table>
                                        <br>
                                        {{ $data->links() }}
                                    </div>
                            </div>
                        </div>
                    </div>
                    @endif

                </div>

            </div>
        </div>
        @include('sweetalert::alert')

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
        </script>
    </body>

    </html>
@endsection
