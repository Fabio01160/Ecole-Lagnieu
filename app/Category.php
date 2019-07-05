<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model//Relation entre catégorie et article
{
    public function posts(){
    	return $this->hasMany("App\Post");
    }
}
