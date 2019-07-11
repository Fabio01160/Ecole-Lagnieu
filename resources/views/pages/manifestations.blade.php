@extends('default')

@section('content')

<h1>Manifestations</h1>

{!! $label["Manifestations"] !!}

<p> On fait pleins de trucs dans cette école, la preuve </p>

    @foreach ($eventPost as $event)
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-1 col-md-9">
                    <a href="post/{{$event->id}}"> <h2 class='postTitle'> {{ $event->title }} </h2> </a>
                    <p class='postDate'> Créé le {{ $event->created_at->format('d/m/Y') }} </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-md-9">
                    <a href="post/{{$event->id}}"> <img class="postPic" src="{{ url('images/'.$event->image) }}" title="{{$event->title}}"> </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection