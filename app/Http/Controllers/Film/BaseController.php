<?php

namespace App\Http\Controllers\Film;

use App\Http\Controllers\Controller;
use App\Services\Film\Service;


class BaseController extends Controller
{

    public $service;

    public function __construct(Service $service){
        $this->service = $service;
    }
}