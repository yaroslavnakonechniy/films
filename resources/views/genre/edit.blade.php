@extends('layouts.main')

@section('content')

<h1>CREATE NEW Genre</h1> 

@include('layouts.error-message')

<form action="{{route('genre.update', $genre->id)}}" method="post">
    @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$genre->name}}"  placeholder="Enter name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection