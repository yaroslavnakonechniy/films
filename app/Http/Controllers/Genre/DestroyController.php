<?php

namespace App\Http\Controllers\Genre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class DestroyController extends Controller
{
    public function __invoke($genre_id){

        $genre = Genre::find($genre_id);
        $genre->delete();

        return redirect()->route('genre.index')->with('success', 'Дані булo видалено успішно');
    }
}
