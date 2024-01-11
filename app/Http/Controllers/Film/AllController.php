<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class AllController extends Controller
{
    public function __invoke(){
        
        $films =  Film::all();
        return view('film.all', compact('films'));
    }
}
