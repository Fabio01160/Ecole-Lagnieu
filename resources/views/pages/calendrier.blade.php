@extends('default')

@section('content')

    <h1>Calendrier</h1>

    {!! $label["Calendrier"] !!}

    <p> Volontairement mis le projet d'école ici </p>
    <p> Dans quelle section met on les projets d'école et pédagogique ?</p>

<div>
    <img class="projetEduc" src="{{ URL('../public/images/page1.jpg') }}">
    <img class="projetEduc" src="{{ URL('../public/images/page2.jpg') }}">
    <img class="projetEduc" src="{{ URL('../public/images/page3.jpg') }}">
    <img class="projetEduc" src="{{ URL('../public/images/page4.jpg') }}">
</div>

@endsection