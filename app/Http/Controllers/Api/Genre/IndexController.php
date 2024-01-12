<?php

namespace App\Http\Controllers\Api\Genre;

use App\Http\Controllers\Api\Genre\BaseController;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Request $request){

        return $this->service->index($request);
    }
}
