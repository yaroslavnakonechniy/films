<?php

namespace App\Http\Controllers\Genre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class ShowController extends Controller
{
    public function __invoke($genre_id){

        $genre = Genre::find($genre_id);

        return view('genre.show', compact('genre'));
    }
}
