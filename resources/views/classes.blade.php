

@extends('index')
@section('content')
@if (Session::has('status'))
<h1>{{Session::get('message')}}</h1>
    
@endif
<table class="table table-dark table-striped container">
    <thead>
        <tr class="text-center">
            <th>ClassList</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $data)
            
        <tr class="text-center">
            <td >{{$data->Name}}</td>
            <td class="">
                <a class="btn btn-success btn-outline-light" href="/class-detail/{{$data->id}}">Detail</a>
                    <a class="btn btn-warning text-dark btn-outline-light" href="#">edit</a>
                    <form class="d-inline-block" action="/class-delete/{{$data->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger  btn-outline-light">Delete</button>
                    </form>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
    <a href="/class-add" class="btn btn-success">Tambah Class</a>
@endsection