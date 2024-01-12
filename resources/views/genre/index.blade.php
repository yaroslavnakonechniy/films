@extends('layouts.main')

@section('content')
<h1> Genres </h1> 
<a href="{{route('genre.create')}}"><button type="button" class="btn btn-success">Create new genre</button></a>

@include('layouts.error-message')

@foreach($genres as $genre)
    <div class="alert alert-info">
        
        <h3>{{ $genre->id }}</h3>

        <p>{{ $genre->name }}</p>
        
        <a href="{{route('genre.show', $genre->id)}}"><button class='btn btn-warning'>Детальніше</button></a>

    </div>

@endforeach

@endsection
