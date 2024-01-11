<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FilmRequest;
use App\Http\Requests\GenreRequest;
use App\Http\Controllers\Film\BaseController;

class UpdateController extends BaseController
{
    public function __invoke(FilmRequest $film_request, GenreRequest $genre_request, $film_id){

        $this->service->update($film_request, $genre_request, $film_id);
        
        return redirect()->route('film.index')->with('success', 'Дані булo оновлено успішно');

    }
}
