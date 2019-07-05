@extends('default')

@section('content')

    <p> Vous devez être connecté pour accéder à cette page.</p>
    <p> <a class="btn btn-primary" href="{{ url('/') }}">Retour à l'accueil</a></p>
    <p> <a class="btn btn-primary" href="{{ url('/login') }}">Se connecter</a></p>

@endsection