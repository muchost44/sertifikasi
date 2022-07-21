@extends('layout')

@section('content')
<div class="container" style="width: 50%">
    <div class="row">
        <div class="col">
            <img src="{{ asset('storage/image/'.$data->photo) }}" alt="" width="70px" srcset="">
        </div>
    </div>
    <div class="row">
        <div class="col">
            {{-- <img src="{{ asset('storage/image/'.$data->photo) }}" alt="" width="70px" srcset=""> --}}
            <a href="{{ asset('storage/document/'.$data->score_document) }}">Document</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            Nama
        </div>
        <div class="col">
            {{ $data->name }}
        </div>
    </div>
    <div class="row">
        <div class="col">
            TTL
        </div>
        <div class="col">
            {{ $data->place_born.', '.$data->date_born }}
        </div>
    </div>
    <div class="row">
        <div class="col">
            Alamat
        </div>
        <div class="col">
            {{ $data->address }}
        </div>
    </div>
    <div class="row">
        <div class="col">
            Nilai Matematika
        </div>
        <div class="col">
            {{ $data->math }}
        </div>
    </div>
    <div class="row">
        <div class="col">
            Nilai IPA
        </div>
        <div class="col">
            {{ $data->science }}
        </div>
    </div>
    <div class="row">
        <div class="col">
            Nilai Bahasa Indonesia
        </div>
        <div class="col">
            {{ $data->bahasa }}
        </div>
    </div>
    <div class="row">
        <div class="col">
            Nilai Bahasa Inggris
        </div>
        <div class="col">
            {{ $data->english }}
        </div>
    </div>
    <div class="row"></div>
</div>
@endsection