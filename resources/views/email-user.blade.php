@extends('index')

@section('content')
<table class="table table-dark table-striped container">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama akun</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td> {{$data->name}}</td>
            <td> {{$data->email}}</td>
            <td>{{$data->role->Name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>














@endsection