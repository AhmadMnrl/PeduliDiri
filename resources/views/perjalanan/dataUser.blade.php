@extends('layouts.master')
@section('content')
    <div class="card-content">
        <!-- table hover -->
        <div class="table-responsive">
            <a href="/dataUser/cetak_pdf" class="btn btn-primary mb-2 mt--3" target="_blank">CETAK PDF</a>
            <table class="table table-hover" id="table_id">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>ROLE</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                @foreach ($user as $isi)
                    <tbody>
                        <tr>
                            <td>{{ $isi->id }}</td>
                            <td>
                                @if ($isi->role == 'user')
                                    <a href="/perjalanan/show/{{$isi->id}}">{{ $isi->nama }}</a>
                                @else
                                    {{ $isi->nama }}
                                @endif
                            </td>
                            <td>{{ $isi->email }}</td>
                            <td>{{ $isi->role }}</td>
                            <td>
                                @if ($isi->role != 'admin')
                                    <a href="/hapus/user/{{ $isi->id }}" class="btn btn-danger">Hapus</a>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>

@endsection
