<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Post;
use App\Text;

class SearchController extends Controller
{

    private $search;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function search(Request $request)/*Récupération des inputs*/
    {
        if ($request->has('search'))
        {
            $views=[];
            $labelUrl=[
                'Accueil'=>'/home',
                'Associations'=>'associations',
                'Bibliothèque'=>'bibliotheque',
                'Calendrier'=>'calendrier',
                'Cantine'=>'cantine',
                'Cathéchèse'=>'catechese',
                'Contact'=>'contact',
                'Dossier de rentrée'=>'dossiersDeRentree',
                'Histoire'=>'histoire',
                'Inscription'=>'inscription',
                'Lien école-collège'=>'lienEcoleCollege',
                'Manifestations' =>'manifestations',
                'Menus'=>'menus',
                'Organisation générale'=>'organisation',
                'Pastorale'=>'pastorale',
                'Règlement intérieur E'=>'reglementIntEleve',
                'Règlement intérieur P'=>'reglementIntParent',
                'Sponsors'=>'sponsor',
                ''
                
            ];
            $foundTexts = Text::where('content', 'like', "%$request->search%")->get();
            $foundPosts = Post::where('content', 'like', "%$request->search%")->get();
            if (!$foundTexts->isEmpty())
            {
                foreach ($foundTexts as $foundText)
                {//'$request->search'
                    $views["La page ''$foundText->label''."]=url($labelUrl[$foundText->label]);
                }
            }

            if (!$foundPosts->isEmpty())
            {
                foreach ($foundPosts as $foundPost)
                {//'$request->search'
                    $views["L'article ''$foundPost->title''."]=url("post/$foundPost->id");
                }
            }
            if (empty($views))
                {
                    return view ('pages/noResults');
                }
            return view ('pages/searchResults', ['views'=>$views]);
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
