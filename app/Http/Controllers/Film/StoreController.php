<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FilmRequest;
use App\Http\Requests\GenreRequest;
use App\Http\Controllers\Film\BaseController;

class StoreController extends BaseController
{
    public function __invoke(FilmRequest $film_request, GenreRequest $genre_request){

        $this->service->store($film_request, $genre_request);

        return redirect()->route('film.index')->with('success', 'Дані булo додано успішно');

    }

}
