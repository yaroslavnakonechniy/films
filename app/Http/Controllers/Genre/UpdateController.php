<?php

namespace App\Http\Controllers\Genre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\GenreRequest;
use App\Models\Genre;
use App\Http\Controllers\Genre\BaseController;

class UpdateController extends BaseController
{
    public function __invoke(GenreRequest $request, $genre_id){

        $this->service->update($request, $genre_id);
        
        return redirect()->route('genre.index')->with('success', 'Дані булo оновлено успішно');
    }
}
