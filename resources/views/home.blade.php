@extends('layout')

@section('content')
@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @php
        session()->forget('success');
    @endphp
@endif
<div class="container">
    @if (session('user')->role == 'admin')
    <div class="d-flex flex-column justify-content-center align-items-center">
        <a href="/registInfo" class="btn btn-primary btn-lg m-5">Informasi Pendaftaran</a>
        <a href="/usersInfo" class="btn btn-primary btn-lg m-5">Informasi Users</a>
    </div>
    @else
    
    <div class="d-flex flex-column justify-content-center align-items-center">
        <a href="/schFormRegist" class="btn btn-primary btn-lg m-5" {{ $telah_daftar ? 'disable' : ''; }}>Daftar</a>
        <a href="/userRegistStatus/{{ session('user')->email }}" class="btn btn-primary btn-lg m-5">Lihat Status Pendaftaran</a>
    </div>
    @endif
</div>
<style>
.disable{
    pointer-events:none;
}
</style>
@endsection