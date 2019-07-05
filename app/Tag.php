<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model //Un tag peut être sur plusieurs articles
{
    public $fillable = ["name"];
    
    public function posts()
    {
    	return $this->belongsToMany("App\Post");//On rattache le modèle Tag au modèle Post
    }
}
