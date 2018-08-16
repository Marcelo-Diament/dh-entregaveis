<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model {
    
    private $id;
    private $first_name;
    private $last_name;
    private $rating;
    private $favorite_movie_id;
    private $picture_url;

    public function getNomeCompleto(){
    	return $this->first_name . ' ' . $this->last_name;
    }
}