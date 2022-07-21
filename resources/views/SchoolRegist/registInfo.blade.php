@extends('layout')

@section('content')
@if (session()->has('success'))
    <div class="alert alert-info" role="alert">
        {{ session('success') }}
    </div>
    @php
        session()->forget('success');
        session()->forget('flash');
    @endphp
@endif
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col"> Matematika</th>
            <th scope="col"> IPA</th>
            <th scope="col"> Bahasa Indonesia</th>
            <th scope="col">Bahasa Inggris</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $item )
            <tr>
                    
                <th scope="row"> 
                    {{ $index+1 }}
                </th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->math }}</td>
                <td>{{ $item->science }}</td>
                <td>{{ $item->bahasa }}</td>
                <td>{{ $item->english }}</td>
                <td>
                    <a href="/detail/{{ $item->id }}" type="button" class="btn btn-info">
                        Info
                    </a>
                    <a href="/tolak/{{ $item->id }}"  class="btn btn-danger" >Tolak</a>
                    <a href="/cadangan/{{ $item->id }}"  class="btn btn-warning">Cadangan</a>
                    <a href="/setuju/{{ $item->id }}"  class="btn btn-success">Setujui</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>

        {{-- <a href="/home" class="btn btn-primary">Back</a> --}}
</div>
@endsection