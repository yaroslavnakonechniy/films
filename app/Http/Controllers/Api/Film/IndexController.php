<?php

namespace App\Http\Controllers\Api\Film;

use App\Http\Controllers\Api\Film\BaseController;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Request $request){

        return $this->service->index($request);
    }
}
