@extends('layouts.master')
@section('content')
    <div class="card-content">
        <!-- table hover -->
        <div class="table-responsive">
            <a href="/dataUser" class="btn btn-primary mb-2 mt--3">Kembali</a>
            <table class="table table-hover" id="table_id">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Suhu Tubuh</th>
                        <th>Lokasi</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($data as $datas )

                        <tr>
                            <td>{{ $datas->tanggal }}</td>
                            <td>{{ $datas->jam }}</td>
                            <td>{{ $datas->suhu_tubuh }}°</td>
                            <td>{{ $datas->lokasi }}</td>
                        </tr>
                        @endforeach

                    </tbody>
            </table>
        </div>
    </div>
@endsection
