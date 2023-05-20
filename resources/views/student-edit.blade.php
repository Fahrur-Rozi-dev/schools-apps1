
@extends('index')
@section('content')
<div class="m-auto col-5 mt-5">
    <form action="/student-update/{{$data->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="Name">Name</label>
            <input type="text" class="form-control" name="Name" id="Name" value="{{$data->Name}}" required>
        </div>

        <div class="mb-3">
            <label for="Gender"> Gender</label>
            <select name="Gender" id="Gender" class="form-control" required>
                @if ($data->Gender == 'L')
                {{$GenderNow = 'Laki-Laki'}}
                
                    @elseif($data->Gender == 'P')
                    {{$GenderNow = 'Perempuan'}}
                @endif
                <option value="{{$data->Gender}}">{{$GenderNow}}</option>
                @if ($data->Gender == 'L')
                <option value="P">Perempuan</option>
                @elseif ($data->Gender == 'P')
                <option value="L">Laki-Laki</option>
                    
                @endif
            </select>
        </div>

        <div class="mb-3">
            <label for="NIS">NIS</label>
            <input type="text" class="form-control" name="NIS" id="NIS" value="{{$data->NIS}}" required>
        </div>

        <div class="mb-3">
            <label for="Class">Class</label>
            <select name="Class_id" id="Class" class="form-control">
            <option value="{{$data->Class->id}}" selected disabled>{{$data->Class->Name}}</option>
                @foreach ($class as $class)
                <option value="{{$class->id}}">{{$class->Name}}</option>
                    
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
</div>


@endsection