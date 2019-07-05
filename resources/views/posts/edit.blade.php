@extends("default")

@section("content")

<div class="indexButton">
    <div class="row">
        <a class="col-xs-offset-3 col-xs-6 col-xs-offset-3 col-sm-3 col-md-offset-1 btn btn-info" href="{{ url('/') }}"><i class="fas fa-home"></i>Retour à l'accueil</a>
		<a class="col-xs-offset-3 col-xs-6 col-xs-offset-3 col-sm-3 btn btn-warning" href="{{ url('/dashboard') }}"><i class="fas fa-keyboard"></i></i>Panneau de contrôle</a>
		<a class="col-xs-offset-3 col-xs-6 col-xs-offset-3 col-sm-3 btn btn-success" href="{{ url('/text') }}"><i class="fas fa-list"></i>Liste des pages</a>
    </div>
</div>

<h1>Modifier un article</h1>

@include("posts.form")

@endsection