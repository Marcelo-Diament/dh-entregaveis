<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Movie;

class Actor extends Model{

    private $id;
    private $first_name;
    private $last_name;
    private $rating;
    private $favorite_movie_id;
    private $picture_url;

    protected $fillable = ['first_name', 'last_name', 'rating', 'favorite_movie_id', 'picture_url'];

    public function favMovie() {
    	return $this->hasOne(Movie::class, 'id', 'favorite_movie_id');
    }
    
    
}
