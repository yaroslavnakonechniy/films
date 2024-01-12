<?php

namespace App\Http\Controllers\Genre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;

class IndexController extends Controller
{
    public function __invoke(){

        $genres = Genre::all();

        return view('genre.index', compact('genres'));
    }
}
