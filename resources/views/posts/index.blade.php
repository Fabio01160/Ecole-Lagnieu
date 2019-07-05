@extends("default")

@section("content")

@if (Auth::user()->profile)
<div class="indexButton">
    <div class="row">
        <a class="col-md-offset-1 btn btn-info" href="{{ url('/') }}"><i class="fas fa-home"></i>Retour à l'accueil</a>
        <a class="btn btn-warning" href="{{ url('/dashboard') }}"><i class="fas fa-keyboard"></i></i>Panneau de contrôle</a>
        <a class="btn btn-success" href="{{ route('news.create') }}"><i class="fas fa-pencil-alt"></i>Ajouter un article</a>
    </div>
</div>
@endif

<h1>Liste des articles</h1>

    @foreach($posts as $post)
        <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <a href="post/{{$post->id}}"> <h2 class="listTitle"> {{$post->title}} </h2> </a>
            @if ($post->category) {{-- Display of the category --}}
                <p class="listDate"> <span class='bold'> Article de la catégorie </span> "<em>{{ $post->category->name }}</em>" créé le {{ $post->created_at->format('d/m/Y') }} </p>
            @endif
            <a href="post/{{$post->id}}"> <img class="listPic" src="{{ url('images/'.$post->image) }}" title="{{$post->title}}"> </a>
        </div>
        </div>

            <div class="listButton">
                <div class="col-xs-offset-1 col-xs-11 col-md-offset-1 col-md-8">
                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-3 col-md-3">
                            <a class="btn btn-success" href="{{ url('post/'.$post->id) }}"><i class="fas fa-book"></i>Lire l'article</a>
                        </div>
                        <div class="col-md-3">
                            <form action="{{ route('news.destroy', $post) }}" method="POST">
                                {!! method_field('DELETE') !!} 
                                {!! csrf_field() !!}
                                <input type="submit" onclick='displayAlert(event)' value="Effacer l'article" class="btn btn-danger">
                            </form>
                        </div>
                        <div class="col-md-3">
                            <p> <a class="btn btn-warning" href="{{ route('news.edit',$post) }}"><i class="fas fa-undo-alt"></i>Modifier cet article</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
        

    @endforeach
    
@endsection