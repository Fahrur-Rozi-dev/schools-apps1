@extends('index')
@section('content')
    <div class="container">Data Siswa {{$dataDetail->Name}}</div>
    <table class="table table-dark table-striped container">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>NIS</th>
                <th>Gender</th>
                <th>Ekstracurriculars</th>
                <th>Class</th>
                <th>Wali Kelas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$dataDetail->id}}</td>
                <td>{{$dataDetail->Name}}</td>
                <td>{{$dataDetail->NIS}}</td>
                <td>
                    @if ($dataDetail->Gender == 'L') 
                    Laki-Laki
                    @elseif ($dataDetail->Gender == 'P')
                    Perempuan
                    @endif
                    <td>
                        @foreach ($dataDetail->extracurriculars as $item)
                            | {{$item->Name}} |
                        @endforeach
                    </td>
                </td>
                <td>{{$dataDetail->Class->Name}}</td>
                <td>{{$dataDetail->class->Teachers->Name}}</td>
            </tr>
        </tbody>
    </table>





@endsection