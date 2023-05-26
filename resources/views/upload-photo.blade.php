@extends('index')
@section('content')
<div class="mt-5 col-5 m-auto">
 <form action="/upload-photo/{{$data->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <input type="hidden" name="Name" value="{{$data->Name}}" readonly>
        <input type="hidden" name="NIS" value="{{$data->NIS}}" readonly>
        <label for="photo">Upload Photo</label>
        <div class="input-group">
            <input type="file" name="photo" id="photo" class="form-control">
        </div>
    </div>
    <div class="mb-3">
        <button class="btn btn-success" type="submit">Save</button>
    </div>





 </form>
</div>
@endsection