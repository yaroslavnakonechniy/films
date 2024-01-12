@extends('layouts.main')

@section('content')
<h1> Films </h1> 
<a href="{{route('film.create')}}"><button type="button" class="btn btn-success">Create new film</button></a>
<a href="{{route('film.all')}}"><button type="button" class="btn btn-success">Show all films for change status</button></a>

@include('layouts.error-message')

@foreach($films as $film)
    <div class="alert alert-info">
        
        <h3>ID:{{ $film->id }}</h3>

        <p>NAME:{{ $film->name }}</p>
        <p>STATUS:{{ $film->status }}</p>
        <p>{{ $film->img }}</p>
        <img src="{{ Storage::disk('')->url($film->path) }}" />
        
        <a href="{{route('film.show', $film->id)}}"><button class='btn btn-warning'>Детальніше</button></a>

    </div>

@endforeach

@endsection
