@extends('layout')

@section('content')
<div class="container">
    <div class="card mb-3 p-3 " style="width: 700px">
        <form action="/saveDataStu" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="name"  type="text" class="form-control" id="exampleInputEmail1" value="{{ session('user')->name }}">
                <input name="name"  type="hidden" class="form-control" id="exampleInputEmail1" value="{{ session('user')->name }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input name="address"  type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tempat Lahir</label>
                <input name="place_born"  type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Lahir</label>
                <input name="date_born"  type="date" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="text" class="form-control" id="exampleInputEmail1" value="{{ session('user')->email }}" readonly>
                {{-- <input name="email" type="text" class="form-control" id="exampleInputEmail1" value="{{ session('user')->email }}"> --}}
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Foto</label>
                <input name="photo" type="file" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nilai Matematika</label>
                <input name="math" type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nilai IPA</label>
                <input name="science" type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nilai Bahasa Indonesia</label>
                <input name="bahasa" type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nilai Bahasa Inggris</label>
                <input name="english" type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Dokumen Rapot</label>
                <input name="score_document" type="file" class="form-control" id="exampleInputEmail1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection