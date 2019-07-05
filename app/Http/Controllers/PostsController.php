<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\EditPostRequest;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Auth::check();/*L'utilisateur est-il connecté ?*/
        $posts = Post::with('category')->orderBy('created_at', 'desc');
        if (!$request->has('plus')) {
            $posts->limit(5);
        }
        $posts=$posts->get();//with('category') permet de récupérer la liste des articles en une seule requête puis idem pour les catégories au lieu de toutes les données une par une.
        return view("posts.index", compact('posts'));/*Passage à la vue des différents articles publiés*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {//On veut que le formulaire soit utilisable aussi bien en création qu'en modification donc :
        $post = new Post();//Initialisation à vide des articles
        $categories = Category::pluck('name','id');//Initialisation à vide des catégories
        //Le contrôleur "connaît" désormais Post et Catégorie dès la création de l'article 

        return view("posts.create",compact("post","categories"))->with('success',"Votre article a bien été créé !");
        //return view("posts.create");
        //return redirect(route("news.edit",$id))->with('success',"Votre article a bien été mis à jour !");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//Envoi de toutes les infos de création via $request.
    {   
        $post = new Post();
        $post->user_id= Auth::user()->id;
        $file = $request->file("image"); //Récupération de l'image.
        $path = Storage::disk("uploadImages")->put(".",$file);//"Disque" sur lequel les images seront récupérées.
        $post = Post::create([
            "title" => $request->title,
            "content" => $request->content,
            "category_id" => $request->category_id,
            "category_name" => $request->category_name,
            "image" => pathinfo($path, PATHINFO_BASENAME)
        ]);
       
        return redirect(route("news.index",$post));//Redirection vers la liste des articles.
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//Affichage d'un article publié avec un id donnée. On prend le premier ou on fait planter le script.
    {
        $post = Post::published()->where("id", $id)->firstOrFail();
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id); //Récupération de l'article
        $categories = Category::pluck('name','id');//Création d'une liste des champs de la table Category.
        return view("posts.edit",compact("post","categories"));//Envoi à la vue des articles et catégories
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Requests\EditPostRequest $request)//$request = sauvegarde dans une variable de EditPostRequest
    {
        $post=Post::findOrFail($id);
        $post->update($request->all());//Sinon, on met à jour et on redirige également vers Edit  
        return redirect(route("news.index",$id))->with('success',"Votre article a bien été mis à jour !");
        /*"->with(...)" = Session::flash('success',"Votre article a bien été mis à jour !");*/       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->back();
    }
}
