@extends('layout')
@section('content')
@if (session()->has('flash'))
    <div class="alert alert-danger" role="alert">
        {{ session('flash') }}
    </div>
    @php
        session()->forget('flash')
    @endphp
@endif
<div class="container d-flex justify-content-center align-items-center">
    <div class="card mb-3 p-3 " style="width: 400px">
        <form action="/actionregister" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Masukan Lagi Password</label>
                <input name="password_retype" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div><a href="/">Login</a></div>
    </div>
</div>
@endsection