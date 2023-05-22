@extends('index')

@section('content')
    
<div class="container text-center">
    <div>Style Urusan frontEnd</div>
<h1>anda yakin ingin menghapus data berikut:</h1>
<h2>ID: {{$delete->id}}</h2>
<h2>Nama: {{$delete->Name}}</h2>
<h2>NIS: {{$delete->NIS}}</h2>
<h2>Class: {{$delete->Class->Name}}</h2>

</div>
<form action="/student-destroy/{{$delete->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger float-center">Delete Data</button>
</form>
<a href="/students" class="btn btn-success">Cancel Delete</a>

@endsection