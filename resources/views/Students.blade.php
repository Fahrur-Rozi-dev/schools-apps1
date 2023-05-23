
@extends('index')
@section('content')
<div class="my-5 container d-flex justify-content-between">
    <a href="/insert-data" class="btn btn-primary">Tambah Data</a>
    <a href="/student-deleted-data" class="btn btn-primary">Restore Data</a>
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
        @foreach ($data as $V)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$V->Name}}</td>
            <td>{{$V->Class->Name}}</td>
            <td class="">
                <a class="btn btn-danger btn-outline-light float-end mx-3" href="/student-delete/{{$V->id}}">Delete</a>
                <a class="btn btn-warning text-dark btn-outline-light float-end mx-3" href="/student-edit/{{$V->id}}">Edit Data</a>
                <a href="/student/{{$V->id}}" class="btn btn-success btn-outline-light float-end mx-3">Detail Siswa</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="container col-6">
    {{$data->links()}}
</div>

@endsection
