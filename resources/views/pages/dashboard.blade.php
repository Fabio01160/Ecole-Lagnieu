@extends('default')

@section('content')



<div class="container-fluid">
	<div class="row">
		<a class="btn btn-info dashboardButton pull-right" href="{{ url('/') }}"><i class="fas fa-home"></i>Retour à l'accueil</a>
	</div>
	<h1>Panneau de contrôle</h1>

	<h2>Gestion du site</h2>
	<p>Dans cette section, vous pouvez accéder à tous les éléments de contrôle (création, consultation, modification et suppression) des pages, articles et utilisateurs.</p>

	<div class="row">
		
		<div class="col-sm-4 col-md-4 ">
			<p> <a class="btn btn-primary" href="{{ url('/users') }}"><i class="fas fa-user-friends"></i>Gestion des utilisateurs</a></p>
		</div>

		<div class="col-sm-4 col-md-4">
			<p> <a class="btn btn-primary" href="{{ url('/text') }}"><i class="fas fa-newspaper"></i>Gestion des pages</a></p>
		</div>
	
		<div class="col-sm-4 col-md-4">
			<p> <a class="btn btn-primary" href="{{ url('/news') }}"><i class="fas fa-list"></i>Gestion des articles</a></p>
		</div>
		
	</div>

	<hr>

	<h2>Banque d'images</h2>

	<p> Vous êtes sur le point de saisir un article mais vous n'avez pas d'images pour l'illustrer ?
	<br> Voici deux sites qui peuvent vous fournir des images libres de droit : 
	</p>
	
	<ol>
		<li><p><a class="btn btn-info btn-lg" href="https://unsplash.com/" role="button"> Unsplash</a></p></li>
		<li><p><a class="btn btn-info btn-lg" href="https://pixabay.com/fr/" role="button"> Pixabay</a></p></li>
	</ol> 

</div>
@endsection