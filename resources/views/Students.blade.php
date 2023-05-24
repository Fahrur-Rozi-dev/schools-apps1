
@extends('index')
@section('content')
<div class="my-5 container d-flex justify-content-between">
    <a href="/insert-data" class="btn btn-primary">Tambah Data</a>
    <a href="/student-deleted-data" class="btn btn-primary">Restore Data</a>
</div>
<div class="my-4">
    <form method="GET" class="d-flex justify-content-between mt-3 col-6 mx-5" role="search">
        <input name="Keyword" class="form-control me-2" type="search" placeholder="Search Data Siswa" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
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
    {{$data->withQueryString()->links()}}
</div>

@endsection
