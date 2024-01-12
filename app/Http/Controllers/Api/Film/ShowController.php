<?php

namespace App\Http\Controllers\Api\Film;

use App\Http\Controllers\Api\Film\BaseController;

class ShowController extends BaseController
{
    public function __invoke($film_id){

        return $this->service->show($film_id);
    }
}
