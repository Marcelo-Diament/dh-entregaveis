<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Movie;

class Director extends Model{
    private $id;
    private $first_name;
    private $last_name;
    private $birthday;

    protected $fillable = ['first_name', 'last_name', 'birthday'];

    public function filmesDirigidos() {
    	return $this->hasMany(Movie::class, 'id', 'director_id');
	}

}
