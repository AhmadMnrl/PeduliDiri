@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="/perjalanan" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i data-feather="arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
            </a>
        </div>
        <div class="card-body">
            <form action="/perjalanan/store" method="post">
                @csrf
                <div class="form-group">
                    <label for="fp-range">Tanggal</label>
                    <input type="text" id="fp-range" placeholder="YYYY-MM-DD to YYYY-MM-DD" readonly="readonly"
                        name="tanggal" class="form-control flatpickr-range flatpickr-input" required>
                </div>
                <div class="form-group">
                    <label for="jam">Jam</label>
                    <input type="time" name="jam" class="form-control" id="" required>
                </div>
                <div class="form-group">
                    <label for="suhu">Suhu Tubuh</label>
                    <input type="number" name="suhu_tubuh" class="form-control" id="" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" id="" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> <i data-feather="save"></i> SIMPAN</button>
                    <button type="reset" class="btn btn-warning text-white"> <span class="icon text-white-50"> <i
                                data-feather="alert-triangle"></i></span> KOSONGKAN</button>
                </div>
            </form>
        </div>
    </div>
@endsection
