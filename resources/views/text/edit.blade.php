@extends("default")

@section("content")

<div class="indexButton">
    <div class="row">
        <a class="col-md-offset-1 btn btn-info" href="{{ url('/') }}"><i class="fas fa-home"></i>Retour à l'accueil</a>
		<a class="btn btn-warning" href="{{ url('/dashboard') }}"><i class="fas fa-keyboard"></i></i>Panneau de contrôle</a>
		<a class="btn btn-success" href="{{ url('/text') }}"><i class="fas fa-list"></i>Liste des pages</a>
    </div>
</div>

{!! Form::model($text, ['method'=> 'put', 'url' => route("text.update", $text)]) !!}

	<div class="form-group">
		<h1> {!! Form::label('content', 'Contenu de la page '.$text->label) !!} </h1>
		{!! Form::textarea('content', $text->content, ['class' => 'form-control description']) !!}
	</div>

	<button class="btn btn-primary">Envoyer</button>

{!! Form::close() !!}

@endsection
