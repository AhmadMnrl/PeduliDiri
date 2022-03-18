@extends('layouts.master')
@section('content')
<div class="card">
    <div class="card-header">
        <a href="/perjalanan" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
    <div class="card-body">
        <form action="/perjalanan/update/{{$data->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="" value="{{$data->tanggal}}">
            </div>
            <div class="form-group">
                <label for="jam">Jam</label>
                <input type="time" name="jam" class="form-control" id="" value="{{$data->jam}}">
            </div>
            <div class="form-group">
                <label for="suhu">Suhu Tubuh</label>
                <input type="number" name="suhu_tubuh" class="form-control" id="" value="{{$data->suhu_tubuh}}" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" name="lokasi" class="form-control" id="" value="{{$data->lokasi}}" autocomplete="off">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN</button>
                <button type="reset" class="btn btn-warning"><i class="fa fa-trash"></i> KOSONGKAN</button>
            </div>
        </form>
    </div>
</div>
@endsection