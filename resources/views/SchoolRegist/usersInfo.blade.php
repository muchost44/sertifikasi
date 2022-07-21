@extends('layout')

@section('content')
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $index => $item )
            <tr>
                    
                <th scope="row"> 
                    {{ $index+1 }}
                </th>
                <td>{{ $item->name }}</td>
                <td>
                    {{ $item->email }}
                </td>
                <td>
                    {{ $item->password }}
                </td>
                <td>
                    {{ $item->role }}
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
</div>
@endsection