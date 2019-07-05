<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Requests\EditPostRequest;
use App\Http\Controllers\Controller;
use App\Text;
use Illuminate\Http\Request;


class TextController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index(Request $request)
    {
        $texts = Text::get();
        return view("text.index", compact('texts'));/*Passage à la vue des différents textes publiés*/
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)//$request = sauvegarde dans une variable de EditPostRequest
    {
        $text=Text::findOrFail($id);
        $text->update($request->all());//Mise à jour du contenu
        return redirect(route("text.index",$id));
    }

    public function show($id)
    {
        $text = Text::where("id", $id)->firstOrFail();
        return view ('text.edit', compact('text'));
    }

    public function edit($id)
    {
        $text = Text::where("id", $id)->firstOrFail();
        return view ('text.edit', compact('text'));
    }
}
