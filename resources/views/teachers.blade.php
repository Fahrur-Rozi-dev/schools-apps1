
@extends('index')
@section('content')
<table class="table table-dark table-striped container">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Guru</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($guru as $data)
        <tr>
            <th>{{$loop->iteration}}</th>
            <th> {{$data->Name}}</th>
        </tr>
        @endforeach
    </tbody>
</table>

   











@endsection