@extends('layouts.main')

@section('content')
<h1> Genre </h1> 
<a href="{{route('genre.create')}}"><button type="button" class="btn btn-success">Create new genre</button></a>

    <div class="alert alert-info">
        
        <h3>{{ $genre->id }}</h3>

        <p>{{ $genre->name }}</p>
        
        <a href="{{route('genre.edit', $genre->id)}}"><button class='btn btn-warning'>Редагувати</button></a>
        <a href="{{route('genre.destroy', $genre->id)}}"><button class='btn btn-warning'>Видалити</button></a>

    </div>

@endsection