@extends('index')
@section('content')
<div class="mt-5 col-5 m-auto">
    <form action="/post-data" method="POST">
        @csrf
        <div class="mb-3">
            <label for="">MASUKKAN NAMA</label>
            <input type="text" name="Name" placeholder="INPUT" class="form-control" id="name" required>
        </div>


        <div class="mb-3">
            <label for="" >PILIH GENDER</label>
            <select name="Gender" id="Gender" class="form-control" required>
                <option value="" selected disabled>Select One</option>
                <option value="L">Laki-Laki</option>
                <option value="P">perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="">MASUKKAN NIS</label>
            <input type="text" name="NIS" placeholder="INPUT" class="form-control" id="nis" required>
        </div>
        <div class="mb-3">
            <label for="class" >PILIH CLASS</label>
            <select name="Class_id" id="class" class="form-control" required>
                <option value="">Select One</option>
                @foreach ($class as $data)
                <option value="{{$data->id}}">{{$data->Name}}</option>
                    
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Save</button>
        </div>

        </form>
</div>
@endsection