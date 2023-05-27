@extends('index')
@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mt-5 col-5 m-auto">
    @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
    <div>Hanya Admin Yang Bisa Add Data Guru</div>
    
@else
<form action="/add-teacher" method="POST">
    @csrf
    <div class="mb-3">
        <label for="teacher">Masukkan Nama Guru</label>
        <input type="text" name="Name" class="form-control" required>
    </div>
    <div>
        <button class="btn btn-success" type="submit">Tambah Data</button>
    </div>
</form>
    
@endif
</div>
    
@endsection