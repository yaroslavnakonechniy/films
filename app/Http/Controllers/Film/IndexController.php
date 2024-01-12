<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class IndexController extends Controller
{
    public function __invoke(){

        $films =  Film::where('status', 1)->get();
        
        return view('film.index', compact('films'));
    }
}
