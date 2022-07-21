@extends('layout')

@section('content')
<a href="/home" class="btn btn-primary">Kembali</a>
<div class="container ">
    <div class="d-flex justify-content-center alignt-items-center">
        @if ($data->status == 1)
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Status Pendaftaran : Telah Disetujui</h5>
                </div>
            </div>
        @elseif ($data->status == 2)
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Status Pendaftaran : Telah Ditolak</h5>
                </div>
            </div>
        @elseif ($data->status == 3)
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Status Pendaftaran : Masuk daftar cadangan</h5>
                </div>
            </div>
        @else
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Status Pendaftaran : Menunggu pengunguman</h5>
                </div>
            </div>
        @endif
    </div>
    <div class="card mb-3 p-3 " style="width: 700px">
        <form action="/saveDataStu" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="name"  type="text" class="form-control" id="exampleInputEmail1" value="{{ $data->name }}" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input name="address"  type="text" class="form-control" id="exampleInputEmail1" value="{{ $data->address }}" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tempat Lahir</label>
                <input name="place_born"  type="text" class="form-control" id="exampleInputEmail1" value="{{ $data->place_born }}" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Lahir</label>
                <input name="date_born"  type="date" class="form-control" id="exampleInputEmail1" value="{{ $data->date_born }}" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="text" class="form-control" id="exampleInputEmail1" value="{{ $data->email }}" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Foto</label>
                <input name="photo" type="file" class="form-control" id="exampleInputEmail1" value="{{ $data->photo }}" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nilai Matematika</label>
                <input name="math" type="text" class="form-control" id="exampleInputEmail1" value="{{ $data->math }}" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nilai IPA</label>
                <input name="science" type="text" class="form-control" id="exampleInputEmail1" value="{{ $data->science }}" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nilai Bahasa Indonesia</label>
                <input name="bahasa" type="text" class="form-control" id="exampleInputEmail1" value="{{ $data->bahasa }}" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nilai Bahasa Inggris</label>
                <input name="english" type="text" class="form-control" id="exampleInputEmail1" value="{{ $data->english }}" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Dokumen Rapot</label>
                <input name="score_document" type="file" class="form-control" id="exampleInputEmail1" value="{{ $data->score_document }}" readonly>
            </div>
        </form>
    </div>
</div>
@endsection