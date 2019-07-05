@php  //La méthode dans le formulaire varie en fonction du fait que l'on veuille ou non sauvegarder un article.
	if($post->id)
	{
		$options=["method" => "put", "url" => action("PostsController@update", $post)];
	} else
	{
		$options=["method" => "post", "url" => action("PostsController@store"),"files"=>true];
	}
@endphp

@include("posts.errors")
@include("posts.flash")

{!! Form::model($post, $options) !!}  {{-- $post sert à injecter le modèle, cela évite de saisir "$post-> paramètre" à chaque ligne --}}
	
	<div class="col-md-offset-1 col-md-10 col-md-offset-1">
		<div class="form-group">
			{!! Form::label('title', "Titre de l'article") !!}
			{!! Form::text('title', null, ["class" => "form-control"]) !!}{{--  null à la place de $post->title--}}
		</div>
	</div>

	<!--<div class="form-group">
		{!! Form::label('slug', "URL") !!}
		{!! Form::text('slug', null, ["class" => "form-control"]) !!}
	</div>-->

	<div class="col-md-offset-1 col-md-10 col-md-offset-1">
		<div class="form-group">
			{!! Form::label('category_id', "Catégorie") !!}
			{!! Form::select('category_id', $categories, null, ["class" => "form-control"]) !!}
		</div>
	</div>	

	<div class="col-md-offset-1 col-md-10 col-md-offset-1">
		<div class="form-group">
			{!! Form::label('image', "Sélectionner une image") !!}
			<input type="file" name="image">
		</div>
	</div>
	<!--<div class="form-group">
		{!! Form::label('tags_list[]', "Tag") !!} {{-- tags_list champ virtuel destiné à lister tous les tags --}}
		{!! Form::select('tags_list[]', App\Tag::pluck("name", "id"),null, ["class" => "form-control","multiple" => true]) !!}
	</div>{{-- Si on connaît d'avance ce qu'on veut, on peut faire App\Tag... et demandé les champs, "null" pour dire "aucun sélectionné par défaut--}}
	-->

	<div class="col-md-offset-1 col-md-10 col-md-offset-1">
		<div class="form-group">
			{!! Form::label('content', "Contenu de l'article") !!}
			{!! Form::textarea('content', null, ["class" => "form-control description"]) !!}
		</div>
	</div>
	
	<div class="col-md-offset-1 col-md-10 col-md-offset-1">
		<div class="dashboardButton">
			<p><button id="buttonArticle"class="btn btn-primary" href="{{ route('news.index') }}"><i class="fas fa-check"></i> Envoyer</button></p>
		</div>
	</div>

{!! Form::close() !!}


