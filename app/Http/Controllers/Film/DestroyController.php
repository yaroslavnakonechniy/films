<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Film\BaseController;
use Illuminate\Http\Request;
use App\Models\Film;

class DestroyController extends BaseController
{
    public function __invoke($film_id){

        $this->service->destroy($film_id);

        return redirect()->route('film.index')->with('success', 'Дані булo видалено успішно');
    }
}
