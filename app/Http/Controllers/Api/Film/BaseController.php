<?php

namespace App\Http\Controllers\Api\Film;

use App\Http\Controllers\Controller;
use App\Services\Api\Film\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service){
        
        $this->service = $service;
    }
}
