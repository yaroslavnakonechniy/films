<?php

namespace App\Http\Controllers\Genre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\GenreRequest;
use App\Http\Controllers\Genre\BaseController;

class StoreController extends BaseController
{
    public function __invoke(GenreRequest $request){

        $this->service->store($request);

        return redirect()->route('genre.index')->with('success', 'Дані булo додано успішно');

    }

}
