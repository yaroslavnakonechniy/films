<?php

namespace App\Http\Controllers\Api\Genre;

use App\Http\Controllers\Api\Genre\BaseController;
use Illuminate\Http\Request;

class ShowFilmController extends BaseController
{
    public function __invoke($genreId, Request $request){

        return $this->service->showFilm($genreId, $request);
    }
}
