<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;

class Genre extends Model {
    
    private $id;
    private $name;
    private $ranking;
    private $active;

    protected $table = "genres";
    
    public function filmes() {
    	return $this->hasMany(Movie::class, 'genre_id', 'id');
	}
	
}