@extends('index')
@section('content')
<div class="d-flex mx-5">
    <a href="/students" class="btn btn-success">Back</a>
</div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>NIS</th>
                <th>Deleted At</th>
                <th>Restore Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->Name}}</td>
                <td>{{$data->NIS}}</td>
                <td>{{$data->deleted_at}}</td>
                <td><a href="/restore/{{$data->id}}/data">Restore</a></td>
            </tr>
            @endforeach
        </tbody>

    </table>
@endsection