@extends('index')
@section('content')
    <table class="table table-dark table-striped container">
        <thead>
            <tr>
                <th>ID</th>
                <th>ClassName</th>
                <th>Student In class</th>
                <th>HomeRoom Teacher</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$classDetail->id}}</td>
                <td>{{$classDetail->Name}}</td>
                <td>
                    @foreach ($classDetail->Student as $Name)
                    {{$loop->iteration}} - {{$Name->Name}} <br> 
                    @endforeach
                </td>
                <td>{{$classDetail->Teachers->Name}}</td>
            </tr>
        </tbody>
    </table>
@endsection