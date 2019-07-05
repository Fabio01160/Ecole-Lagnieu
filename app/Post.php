<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = ["title", "slug", "content", "online","category_id","image"/*, "tags_list"*/];//Champs pour lesquels on autorise la modification via la méthode "Create" dans la table Posts
    protected $dates = ['created_at'];
    
    public function scopePublished($query)//Scope permet de définir des conditions et évite les répétitions.
    {
    	return $query->where("online",true)->where("created_at", "<", DB::raw("NOW()"));
    }

    public function scopeSearchByTitle($query, $q)//Système de recherche par titre.
    {
    	return $query->where("title", "LIKE", "%". $q ."%");
    }

    public function setSlugAttribute($value) 
    {
      if(empty($value))//Si le slug est vide, on prend le titre et on le "slugifie"
      {
        $this->attributes["slug"]=Str::slug($this->title);//  Str::slug transforme un string en slug
      }
    }

    public function getDates()/*Pour ajouter de nouvelles dates. Par défaut les dates sont retournées sous forme de string. Pour transformer les données en objet Date*/
    {
      return ["created_at", "updated_at", "published_at"];
    }

    public function category()//Relation entre catégories et articles.
    {
    	return $this->hasOne("App\Category", "id","category_id");
    }

    public function tags()//Un tag peut être sur plusieurs articles
    {
        return $this->belongsToMany("App\Tag");//On rattache le modèle Post au modèle Tag
    }

    public function getTagsListAttirbute() //Permet de récupérer la liste des tags sous forme d'id.
    {
        if($this->id)//Permet d'éviter à MySQL de chercher systématiquement la liste de tous les tags 
        {
            return $this->tags->pluck('id');
        }
    }

    public function setTagsListAttirbute($value) //Permet l'insertion des tags dans la BDD à partir des id.
    {
        return $this->tags()->sync($value);//On synchronise les valeurs reçues
    }
}


