@extends('default')

@section('content')

    <h1>{{ $classRoom->name }}</h1>

    @foreach($classRoomPost as $post)

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-1 col-md-9">
                    <a href="{{ url('post/'.$post->id) }}"> <h2 class='postTitle'> {{$post->title}} </h2> </a>
                    <p class="postDate"> Créé le {{ $post->created_at->format('d/m/Y') }} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-md-9">
                    <a href="{{ url('post/'.$post->id) }}"><img class="postPic" src="{{ url('images/'.$post->image) }}" title="{{$post->title}}"> </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-md-9">
                    <p> {!! $post->content !!} </p>
                </div>
            </div>
        </div>
    </div>

    @endforeach

    <div class="col-xs-offset-3 col-sm-offset-5 col-md-offset-5">
        <a class='btn btn-default moreArticles' href="{{ $classRoom->slug }}/1">Plus d'articles </a>
    </div>
    
@endsection