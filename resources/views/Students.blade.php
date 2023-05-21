
@extends('index')
@section('content')
<div class="my-5 container">
    <a href="/insert-data" class="btn btn-primary">Tambah Data</a>
</div>
<table class="table table-dark table-striped container">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Class</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->Name}}</td>
            <td>{{$data->Class->Name}}</td>
            
            <td>
                <a class="btn btn-danger btn-outline-light" href="/student-edit/{{$data->id}}">Edit</a>
                <a href="/student/{{$data->id}}" class="btn btn-success btn-outline-light">Detail Siswa</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
