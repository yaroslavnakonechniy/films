<?php

namespace App\Services\Film;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Support\Facades\Storage;

class Service {

    public function store( $film_request, $genre_request ){
        
        $film = new Film();
        $genre = new Genre();
        
        $film->name = $film_request->input('name');
        $film->status = $film_request->input('status');
        
        if($film_request->hasFile('img')) {
            $film->img = $film_request->file('img')->store('public');
            $film->save();
        }else{
            $film->img = "public/6zOYVkaNFT18kJE5uefRnI8Xsh9ZmGmMAqnh45PB.jpg";
            $film->save();
        }
        
        $genre->genre_id = $genre_request->input('genre_id');
        $genres = $genre['genre_id'];

        $film->genre()->attach($genres);
    }

    public function update($film_request, $genre_request, $film_id){
        
        $film = Film::find($film_id);
        $genre = new Genre();

        $film->name = $film_request->input('name');
        $film->status = $film_request->input('status');

        Storage::disk('')->delete($film->img);

        if($film_request->hasFile('img')) {
            $film->img = $film_request->file('img')->store('public');
            $film->save();
        }else{
            $film->img = "public/6zOYVkaNFT18kJE5uefRnI8Xsh9ZmGmMAqnh45PB.jpg";
            $film->save();
        }

        $genre->genre_id = $genre_request->input('genre_id');
        $genres = $genre['genre_id'];

        $film->genre()->sync($genres);
    }

    public function destroy( $film_id ){

        $film = Film::find($film_id);

        Storage::disk('')->delete($film->img);

        $film->delete();
    }

    public function updateStatus($film_id){

        $film = Film::find($film_id);

        if($film){
            if($film->status){

                $film->status = 0;
            }else{
    
                $film->status = 1;
            }
        }

        $film->save();
    }
}
