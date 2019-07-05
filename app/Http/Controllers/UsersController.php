<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Post;
use App\Category;
use App\User;

class UsersController extends Controller
{  

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view ('users.index', compact('users'));
    }

    public function create()
    {
        return view ('users.form');
    }

    public function store(Request $request)//Envoi de toutes les infos de création via $request.
    {   
        session(['isRegister'=>true]);
        $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect(route("users.index", $user));//Redirection vers la liste des articles.
    }

    public function update($id, Request $request)//$request = sauvegarde dans une variable de EditPostRequest
    {
        $user=User::findOrFail($id);
        $user->update($request->all());//Mise à jour du contenu
        return redirect(route("users.index",$id));
    }

    public function edit($id)
    {
        $user = User::where("id", $id)->firstOrFail();
        return view ('users.edit', compact('user'));
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back();
    }

}
