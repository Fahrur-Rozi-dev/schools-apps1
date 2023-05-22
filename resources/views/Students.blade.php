
@extends('index')
@section('content')
<div class="my-5 container">
    <a href="/insert-data" class="btn btn-primary">Tambah Data</a>
</div>

@if (Session::has('status'))
<div class="alert alert-success text-center" role="alert">
    {{Session::get('massage')}}
  </div>
@endif

<table class="table table-dark table-striped container">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Class</th>

            <th><div class="float-end mx-3">Actions</div></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->Name}}</td>
            <td>{{$data->Class->Name}}</td>
            <td class="">
                <a class="btn btn-danger btn-outline-light float-end mx-3" href="/student-delete/{{$data->id}}">Delete</a>
                <a class="btn btn-warning text-dark btn-outline-light float-end mx-3" href="/student-edit/{{$data->id}}">Edit Data</a>
                <a href="/student/{{$data->id}}" class="btn btn-success btn-outline-light float-end mx-3">Detail Siswa</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
