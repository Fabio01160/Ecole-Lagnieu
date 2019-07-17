@extends('default')

@section('content')

    <h1>Actualités</h1>

    @foreach($lastNews as $post)

        <h3> {{$post->title}} </h3>
        <p> Dernière modification le : {{ $post->updated_at }} </p>
        <img class="postPic" src="{{ url('images/'.$post->image) }}">

    @endforeach

@endsection
