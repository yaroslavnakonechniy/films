<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Film;
use App\Models\Genre;

class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $films = Film::factory(30)->create();
        $genres = Genre::factory(80)->create();

        foreach ($films as $film){
            $genresId = $genres->random(rand(2, 5))->pluck('id');
            $film->genre()->attach($genresId); 
        }
    }
}
