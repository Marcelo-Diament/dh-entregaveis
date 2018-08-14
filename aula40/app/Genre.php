<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;

class Genre extends Model
{
    protected $table = 'genres';
    // protected $fillable

    public function movies(){
        return $this->hasMany(Movie::class, 'genre_id', 'id');
    }
}
