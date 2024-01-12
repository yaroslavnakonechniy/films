@extends('layouts.main')

@section('content')

<h1>CREATE NEW Film</h1> 

@include('layouts.error-message')

<form action="{{route('film.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}"  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="status">Status</label>
    <input type="text" class="form-control" id="status" name="status" value="{{old('status')}}"  placeholder="Enter status">
  </div>
  <div class="form-group">
    <label for="img">Img</label>
    <input type="file" class="form-control" id="img" name="img" value="{{old('img')}}" placeholder="Choose file">
  </div>
  <div class="form-group">
    <label for="genre">Genre</label>
    <select multiple class="form-select" aria-label="Default select example" value="{{old('genre_id[]')}}" name="genre_id[]" >
      @foreach($genres as $genre)
        <option value="{{$genre->id}}">{{$genre->name}}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
