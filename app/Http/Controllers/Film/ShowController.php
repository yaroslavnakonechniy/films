<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;

class ShowController extends Controller
{
    public function __invoke($film_id){

        $film = Film::find($film_id);
        $genres = Genre::all();

        return view('film.show', compact('film', 'genres'));
    }
}
