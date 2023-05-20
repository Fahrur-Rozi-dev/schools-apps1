

@extends('index')
@section('content')
<table class="table table-dark table-striped container">
    <thead>
        <tr class="text-center">
            <th>ClassList</th>
            <th>Daftar Siswa</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $data)
            
        <tr class="text-center">
            <td >{{$data->Name}}</td>
            <td>
                @foreach ($data->Student as $Name)
                    {{$Name->Name}} <br>
                @endforeach
            </td>
            <td class="">
                <button class="btn btn-success">
                    <a class="text-white" href="#">Detail</a>
                </button>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
@endsection