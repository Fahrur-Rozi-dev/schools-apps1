@extends('index')
@section('content')
    <table class="table table-dark table-striped container">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Datfar Extra</th>
                <th>Siswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
            <tr class="text-center">
                    
                <td>{{$loop->iteration}}</td>
                <td>{{$data->Name}}</td>
                <td>
                    @foreach ($data->Students as $item)
                    -{{$item->Name}} <br>
                        
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

