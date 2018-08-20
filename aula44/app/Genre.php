<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model {
    
    private $id;
    private $name;
    private $ranking;
    private $active;

    protected $table = "genres";
    
    public function filmes() {
    	return $this->hasMany(Movie::class, 'id', 'genre_id');
	}
	
}