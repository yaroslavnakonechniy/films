<?php

namespace App\Services\Genre;

use App\Models\Genre;

class Service {

    public function store( $request ){
        
        $genre = new Genre();
        
        $genre->name = $request->input('name');

        $genre->save();
    }

    public function update($request, $genre_id){
        
        $genre = Genre::find($genre_id);

        $genre->name = $request->input('name');
        
        $genre->save();
    }
}