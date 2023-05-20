@extends('index')
@section('content')
    <table class="table table-dark table-striped container">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Datfar Extra</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                @foreach ($data as $data)
                    
                <td>{{$data->id}}</td>
                <td>{{$data->Name}}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
@endsection

