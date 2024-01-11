<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;

class EditController extends Controller
{
    public function __invoke($film_id){
        
        $film = Film::find($film_id);
        $genres = Genre::all();

        return view('film.edit', compact('film', 'genres'));
    }
}
