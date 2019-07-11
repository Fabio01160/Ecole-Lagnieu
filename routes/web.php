<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@welcomePosts');

Route::get("redirectUser", function() {
    return view('redirectUser');
});

Route::get('reset', function() {
    return view('auth/passwords/reset');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource("news", "PostsController");
Route::resource("text", "TextController");
Route::resource("users", "UsersController");
Route::get("posts",function (){
    return view ("posts.index");
});

//Routes to the pages 

//Section "Nouvelle famille"
Route::get('associations','PagesController@association');
Route::get('cantine','PagesController@schoolCanteen');
Route::get('histoire','PagesController@history');
Route::get('inscription','PagesController@enrollment');
Route::get('organisation','PagesController@organisation');
Route::get('pastorale','PagesController@pastoralTheology');

//Section "Parents d'élèves"
Route::get('calendrier','PagesController@calendar')->middleware("auth");
Route::get('dossiersDeRentree','PagesController@schoolStartFile')->middleware("auth");
Route::get('lienEcoleCollege','PagesController@linkBtwSchools')->middleware("auth");
Route::get('manifestations','PagesController@events')->middleware("auth");
Route::get('reglementIntParent','PagesController@internalRules')->middleware("auth");

//Section "Elève"
Route::get('reglementIntEleve','PagesController@codeOfConduct')->middleware("auth");
Route::get('bibliotheque','PagesController@library')->middleware("auth");
Route::get('menus','PagesController@menusFood')->middleware("auth");
Route::get('catechese','PagesController@catechesis')->middleware("auth");
Route::get('maClasse','PagesController@inMyClassroom')->middleware("auth");
Route::get('classe/{niveau}/{more?}','PagesController@classrooms')->middleware("auth");//Paramètres "more" optionnel

// Section Dashboard
Route::get('dashboard','PagesController@dashboard');
Route::get('createuser','PagesController@createUser');

//Recherche

Route::get('search', 'SearchController@search');
Route::get('noResults', 'PagesController@noResults');
Route::get('post/{id}','PagesController@newsDisplay');

//Others
Route::get('sponsor','PagesController@sponsor');
Route::post('contact','PagesController@sendEmail');
Route::get('contact','PagesController@contact');
Route::get('mentions','PagesController@mentions');

Auth::routes();
