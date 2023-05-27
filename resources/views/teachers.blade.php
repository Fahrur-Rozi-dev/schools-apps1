
@extends('index')
@section('content')
<table class="table table-dark table-striped container">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Guru</th>
            <th>Class</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($guru as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td> {{$data->Name}}</td>
            <td>
            @foreach ($data->class as $guru)
                {{$guru->Name}} <br>
            @endforeach    
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="">
    <a href="/teachers-add" class="btn btn-success">Tambah Guru</a>
</div>











@endsection