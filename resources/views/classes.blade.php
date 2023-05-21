

@extends('index')
@section('content')
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
                    <a class="btn btn-danger btn-outline-light" href="#">edit</a>
                    <a class="btn btn-success btn-outline-light" href="/class-detail/{{$data->id}}">Detail</a>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
@endsection