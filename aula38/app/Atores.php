<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atores extends Model
{
    protected $table = 'actors';
    protected $fillable = ['first_name', 'last_name', 'rating', 'favorite_movie_id'];

}
