
@extends('index')
@section('content')
<table class="table table-dark table-striped container">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Gender</th>
            <th>Class</th>
            <th>NIS</th>
            <th>Extracurriculars</th>
            <th>HomeRoom Teachers</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $data)
        <tr>
            <td>{{$data->Name}}</td>
            <td>{{$data->Gender}}</td>
            <td>{{$data->Class->Name}}</td>
            <td>{{$data->NIS}}</td>
            <td>
                @foreach ($data->extracurriculars as $extra)
                {{$extra->Name}} 
                 id = {{$extra->pivot->extracurricular_id}} <br>
                @endforeach
            </td>
            <td>{{$data->Class->Teachers->Name}}</td>
            
            <td>
                <a href="/student-edit/{{$data->id}}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="my-5">
    <a href="/insert-data" class="btn btn-primary">Tambah Data</a>
</div>
@endsection
