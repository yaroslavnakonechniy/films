<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Film\BaseController;

class StatusController extends BaseController
{
    public function __invoke($film_id){

        $this->service->updateStatus($film_id);
        
        return redirect()->route('film.all')->with('success', 'Дані булo оновлено успішно');
    }
}