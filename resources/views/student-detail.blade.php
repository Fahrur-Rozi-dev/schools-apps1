@extends('index')
@section('content')
    <div class="d-flex justify-content-center">
        @if ($dataDetail->image != '')
        <img src="{{asset('storage/publicPhoto/'.$dataDetail->image)}}" alt="publicPhoto" width="100px">
        @else
        <img src="{{asset('/DefaultImage/DefaultImage.jpg')}}" alt="publicPhoto" width="100px">
        @endif
    </div>
    <div class="d-flex justify-content-center">Nama: {{$dataDetail->Name}}</div>
@if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
<div class="d-flex justify-content-center">
    <div>Fitur Upload/Change Profil Only In Admin Or Teachers</div>
</div>
@else
@if ($dataDetail->image != '')
<div class="d-flex justify-content-center">
    <a href="/upload-photo/{{$dataDetail->id}}" class="btn btn-success">Change Your Photo</a>
</div>
@else
<div class="d-flex justify-content-center">
<a href="/upload-photo/{{$dataDetail->id}}" class="btn btn-success">Upload Your Photo</a>
</div>
@endif
@endif

    <div class="my-3">
    </div>
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
                <td>
                    @if (Auth::user()->role_id!=1 && Auth::user()->role_id!=2)
                        Hanya Admin
                    @else
                    {{$dataDetail->NIS}}</td>
                    @endif
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