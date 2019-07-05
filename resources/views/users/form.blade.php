@extends('default')
@include("posts.errors")
@include("posts.flash")

@section('content')

<div class="indexButton">
    <div class="row">
        <a class="col-md-offset-1 btn btn-info" href="{{ url('/') }}"><i class="fas fa-home"></i>Retour à l'accueil</a>
		<a class="btn btn-warning" href="{{ url('/dashboard') }}"><i class="fas fa-keyboard"></i></i>Panneau de contrôle</a>
		<a class="btn btn-success" href="{{ url('/users') }}"><i class="fas fa-list"></i>Liste des utilisateurs</a>
    </div>
</div>

<h1>Créer un utilisateur</h1>

{!! Form::model([],["method" => "post", "url" => action("UsersController@store")]) !!}  {{-- $post sert à injecter le modèle, cela évite de saisir "$post-> paramètre" à chaque ligne --}}
	
	<div class="col-md-offset-3 col-md-6 col-md-offset-3">
		<div class="form-group">
			{!! Form::label('name', "Nom de l'utilisteur") !!}
			{!! Form::text('name', null, ["class" => "form-control"]) !!}{{--  null à la place de $post->title--}}
		</div>
	</div>

	<div class="col-md-offset-3 col-md-6 col-md-offset-3">
		<div class="form-group">
			{!! Form::label('mail', "Adresse mail de l'utilisateur") !!}
			{!! Form::text('email', null, ["class" => "form-control"]) !!}{{--  null à la place de $post->title--}}
		</div>
	</div>

	<div class="col-md-offset-3 col-md-6 col-md-offset-3">
		<div class="form-group">
			{!! Form::label('password', "Mot de passe de l'utilisateur") !!}
			{!! Form::text('password', null, ["class" => "form-control"]) !!}{{--  null à la place de $post->title--}}
		</div>
	</div>

	<div class="col-md-offset-3 col-md-6 col-md-offset-3">
		<div class="form-group">
			{!! Form::label('password_confirmation', "Confirmation de mot de passe") !!}
			{!! Form::text('password_confirmation', null, ["class" => "form-control"]) !!}{{--  null à la place de $post->title--}}
		</div>
	</div>

	<div class="col-md-offset-3 col-md-6 col-md-offset-3">
		<div class="dashboardButton">
			<p><button class="btn btn-primary" href="{{ route('users.index') }}"><i class="fas fa-check"></i>Envoyer</button></p>
		</div>
	</div>

{!! Form::close() !!}

@endsection


