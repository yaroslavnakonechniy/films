@extends('layouts.main')

@section('content')
<h1> Genre </h1> 
<a href="{{route('film.create')}}"><button type="button" class="btn btn-success">Create new film</button></a>

    <div class="alert alert-info">
        
        <h3>id:{{ $film->id }}</h3>

        <p>name:{{ $film->name }}</p>
        <p>status:{{ $film->status }}</p>
        <p>img:{{ $film->img }}</p>
        <img src="{{ Storage::disk('')->url($film->img) }}" />

        <div class="form-group">
            <label for="genre">Genre:::</label>
    
                @foreach($genres as $genre)
        
                    @foreach($film->genre as $filmGenre)
                        <p>{{$genre->id === $filmGenre->id ? $genre->name : '' }}
                    @endforeach
        
                @endforeach
    
        </div>
        
        <a href="{{route('film.edit', $film->id)}}"><button class='btn btn-warning'>Редагувати</button></a>
        <a href="{{route('film.destroy', $film->id)}}"><button class='btn btn-warning'>Видалити</button></a>

    </div>

@endsection
