@extends('layouts.main')

@section('content')

<h1>Edit Film</h1> 

@include('layouts.error-message')

<form action="{{route('film.update', $film->id)}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$film->name}}"  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="status">Name</label>
    <input type="text" class="form-control" id="status" name="status" value="{{$film->status}}" placeholder="Enter status">
  </div>
  <div class="form-group">
    <label for="img">Name</label>
    <input type="file" class="form-control" id="img" name="img" value="{{$film->img}}" placeholder="Enter img">
  </div>
  <div class="form-group">
    <label for="genre">Tag</label>
    <select multiple class="form-select" aria-label="Default select example" name="genre_id[]" >
      @foreach($genres as $genre)
        <option
          @foreach($film->genre as $filmGenre)
            {{$genre->id === $filmGenre->id ? 'selected' : '' }}
          @endforeach
        value="{{$genre->id}}">{{$genre->name}}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
