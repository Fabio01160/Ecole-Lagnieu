<?php 

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider //On peut créer ses propres règles de validation avec ce provider
{
   public function boot() 
   {
    /*Validator::extends('aaaa',function($attribute, $value, $parameters)
    L'attribut n'est validé que s'il vaut "aaaa" - message d'erreur a modifié dans lang/validation
    {
    
        });*/
    }
   public function register()
   {

   }
}