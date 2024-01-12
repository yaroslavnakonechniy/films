<?php

namespace App\Services\Api\Film;

use App\Models\Film;

class Service {

    public function index($request){

        $perPage = $request->input('per_page');

        $films = Film::paginate($perPage);

        return response()->json($films);
    }

    public function show($film_id){
        
        $film = Film::findOrFail($film_id);

        return response()->json($film);
    }
}
