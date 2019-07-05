
@extends("default")
@section("content")

<div class="indexButton">
    <div class="row">
        <a class="col-md-offset-1 btn btn-info" href="{{ url('/') }}"><i class="fas fa-home"></i>Retour à l'accueil</a>
		<a class="btn btn-warning" href="{{ url('/dashboard') }}"><i class="fas fa-keyboard"></i></i>Panneau de contrôle</a>
		<a class="btn btn-success" href="{{ url('/users') }}"><i class="fas fa-list"></i>Liste des utilisateurs</a>
    </div>
</div>

<h1>Modifier un utilisateur</h1>

{!! Form::model($user, ['method'=> 'put', 'url' => route("users.update", $user)]) !!}

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
		<button class="btn btn-primary">Envoyer</button>
	</div>

{!! Form::close() !!}

@endsection
