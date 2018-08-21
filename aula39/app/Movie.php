<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Genre;

use App\Actor;

class Movie extends Model{

    private $id;
    private $title;
    private $rating;
    private $awards;
    private $release_date;
    private $length;
    private $genre_id;

    protected $fillable = ['title', 'rating', 'awards', 'release_date', 'length', 'genre_id'];

    public function genero() {
    	return $this->hasOne(Genre::class, 'id', 'genre_id');
	}

    public function atores() {
        return $this->hasMany(Actor::class, 'id', 'favorite_movie_id');
    }

}