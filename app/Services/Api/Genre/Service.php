<?php

namespace App\Services\Api\Genre;

use App\Models\Genre;

class Service {

    public function index($request){

        $perPage = $request->input('per_page');

        $data = Genre::paginate($perPage);

        return response()->json($data);
    }

    public function showFilm($genreId, $request){
        
        $perPage = $request->input('per_page', 10);

        $genre = Genre::findOrFail($genreId);
        
        $films = $genre->film()->paginate($perPage);

        return response()->json($films);
    }
}
