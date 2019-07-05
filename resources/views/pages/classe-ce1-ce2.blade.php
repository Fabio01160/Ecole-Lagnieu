@extends('default')

@section('content')

    <h2>Classe de CE1 - CE2</h2>

    @foreach($classRoomPost as $post)

        <h3> {{$post->title}} </h3>
        <p> Dernière modification le : {{ $post->updated_at }} </p>
        <img class="postPic" src="{{ url('images/'.$post->image) }}">

    @endforeach

@endsection
