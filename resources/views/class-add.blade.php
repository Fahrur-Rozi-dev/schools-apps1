@extends('index')
@section('content')
<div class="mt-5 col-5 m-auto">
    <form action="/class-add" method="POST">
        @csrf
        <div>
            <label for="Class">Masukkan Nama Class</label>
            <input type="text" name="Name" class="form-control mb-3" id="Class" placeholder="INPUT" required>
        </div>
        <div>
            <label for="teachers">Choose HomeRoom Teacher</label>
            <select name="Teacher_id" id="Teachers" class="form-control mb-3">
                <option value="" selected disabled>Choose Teacher</option>
                
                @foreach ($teachers as $data)
                <option value="{{$data->id}}">{{$data->Name}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Add Class</button>
    </form>
</div>
@endsection