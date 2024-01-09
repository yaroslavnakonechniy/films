<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Film extends Model
{
    use HasFactory;

    public function genre(){
        
        return $this->belongsToMany(Genre::class);
    }
}
