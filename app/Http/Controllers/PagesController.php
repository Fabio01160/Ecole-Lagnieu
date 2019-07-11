<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Category;
use App\User;

class PagesController extends Controller
{  

    public function sendEmail(Request $request){
        Mail::send("emails/contact-text",['subject'=>$request->subject, 
        'name'=>$request->name, 
        'content'=>$request->content], 
        function($message) use ($request){
            $message->from($request->email);
            $message->to('ecole.jeannedarc01@gmail.com')->subject($request->subject);
            //$message->attach(public_path(). "/ecole.jpg");Image dans le dossier "Public" envoyée en pièce jointe.
     });
    }

    public function welcomePosts()//Fonction pour toutes les classes 
    {
        $welcomePost=Post::with('category')->where('category_id',11)->orderBy('created_at', 'desc')->limit(3)->get(); //Sort by date of creation and limit to the 3 latest.
        return view ('welcome',['welcomePosts'=>$welcomePost]);
    }

    //"Nouvelle famille" section

    public function association()
    {
        return view ('pages/associations');
    }

    public function enrollment()
    {
        return view ('pages/inscription');
    }

    public function history()
    {
        return view ('pages/histoire');
    }

    public function organisation()
    {
        return view ('pages/organisation');
    }

    public function pastoralTheology()
    {
        return view ('pages/pastorale');
    }

    public function schoolCanteen()
    {
        return view ('pages/cantine');
    }

    //"Parents d'élèves" section

    public function events()
    {
        $eventPost=Post::whereHas('category',function($query) {
            $query->where('id', 10);
        })->orderBy('created_at', 'desc'); //Sort by date of creation
        
        $eventPost=$eventPost->get();

        return view ('pages/manifestations',['eventPost'=>$eventPost]);
    }

    public function calendar(Request $request)
    {
        return view ('pages/calendrier');
    }

    public function schoolStartFile()
    {
        return view ('pages/dossiersDeRentree');
    }

    public function linkBtwSchools()
    {
        return view ('pages/lienEcoleCollege');
    }

    public function internalRules()
    {
        return view ('pages/reglementIntParent');
    }
    
    //"Elèves" section

    public function codeOfConduct()
    {
        return view ('pages/reglementIntEleve');
    }

    public function library()
    {
        return view ('pages/bibliotheque');
    }

    public function catechesis()
    {
        return view ('pages/catechese');
    }

    public function classRooms($niveau,$more=false)//Fonction pour toutes les classes 
    {
        $classRoomPost=Post::whereHas('category',function($query) use ($niveau) {
            $query->where('slug', $niveau);
            
        })->orderBy('created_at', 'desc'); //Sort by date of creation

        if ($more===false) {
            $classRoomPost->limit(5); //limit to five posts by default.
        }
        $classRoomPost=$classRoomPost->get();
        $classRoom = Category::where('slug', $niveau)->first();
          
        return view ('pages/maClasse',['classRoomPost'=>$classRoomPost, 'classRoom'=>$classRoom]);
    }

    public function newsDisplay(Request $request)//Affiche les articles un par un dans une vue.
    {
        $displayedPost=Post::find($request->id);
          
        return view ('pages/newsdisplay', ['displayedPost'=>$displayedPost]);
    }

    public function dashboard()
    {
        return view ('pages/dashboard');
    }

    public function contact()
    {
    	return view ('pages/contact');
    }

    public function sponsor()
    {
        return view ('pages/sponsor');
    }

    public function mentions()
    {
        return view ('pages/mentions');
    }

    public function noResults()
    {
        return view ('pages/noResults');
    }

    public function users()
    {
        $users = User::all();
        return view ('user/index', compact('users'));
    }

    public function createUser()
    {
        return view ('pages/createuser');
    }

    public function deleteUser($id)
    {
        User::destroy($id);
        return redirect()->back();
    }

    public function update($id, Request $request)//$request = sauvegarde dans une variable de EditPostRequest
    {
        $user=User::findOrFail($id);
        $user->update($request->all());//Mise à jour du contenu
        return redirect(route("user.index",$id));
    }
}
