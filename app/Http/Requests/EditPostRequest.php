<?php
//On gère ici toutes les règles relatives à la validation des données.
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPostRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;  
    /*$post = Post::findOrFail($this->route("news")) ===> récupération des paramètres de la news; 
    return $post->user_id==1;*/ //On autorise la modification des news que si l'user id est 1
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
      return [
          "title" => "required|min:5",
          "content" => "required|min:10"
      ];
  }
}
