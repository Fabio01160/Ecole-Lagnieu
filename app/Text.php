<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model //Accès à la table 'text_page'
{
    protected $table ='text_page'; 
    protected $fillable = ['content', 'label'];
    public $timestamps = false;
}
