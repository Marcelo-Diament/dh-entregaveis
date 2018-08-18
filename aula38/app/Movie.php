<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model{

    private $id;
    private $title;
    private $rating;
    private $awards;
    private $release_date;
    private $length;
    private $genre_id;

    protected $fillable = ['title', 'rating', 'awards', 'release_date', 'length', 'genre_id'];

}