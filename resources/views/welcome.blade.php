@extends('default')

@section('content')

<div class="container-fluid">
    <!-- Page Content Holder -->
        <div id="carousel-example-generic2" class="carousel slide carousel-fullscreen carousel-fade" data-ride="carousel">
        <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic2" data-slide-to="3"></li>
            </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" >
            <div class="item active" style="background-image: url('images/wecandoit.jpg');">
                <!--<div class="overlay"></div>-->
                <div class="carousel-caption">
                    <h1 class="super-heading">Bienvenue à l'école Jeanne d'Arc</h1>
                    <q class="super-paragraph">Cultivons le vrai, le bien, et le beau.</q>
                </div>
            </div>
            <div class="item" style="background-image: url('images/tableauNoir.jpg');">
                <!--<div class="overlay"></div>-->
                <div class="carousel-caption">
                    <h1 class="super-heading">Vie de l'école</h1>
                    <p class="super-paragraph">Découvrir le fonctionnement de l'école.</p>
                </div>
            </div>
            <div class="item" style="background-image: url('images/ballon.jpg');">
                <!--<div class="overlay"></div>-->
                <div class="carousel-caption">
                    <h1 class="super-heading">Manifestations de nos associations</h1>
                    <p class="super-paragraph">L'A.P.E.L. et l'O.G.E.C. organisent de nombreux événements</p>
                </div>
            </div>
            <div class="item" style="background-image: url('images/art-artistic-bright-220320.jpg');">
                <!--<div class="overlay"></div>-->
                <div class="carousel-caption">
                    <h1 class="super-heading">Administratif</h1>
                    <p class="super-paragraph">Toutes les infos nécessaires</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
</div>

<h1>Nos dernières actualités</h1>

@foreach($welcomePosts as $post)

<div class="col-md-4 col-sm-4">
    <div class="thumbnail">
        <a href="post/{{$post->id}}"> <img class="postPic" src="{{ url('images/'.$post->image) }}" title="{{$post->title}}"> </a>
        <a href="post/{{$post->id}}"> <h2 class='postTitle'> {{$post->title}} </h2> </a>
        <p> <span class='bold'> Mis en ligne le {{ $post->created_at->format('d/m/Y') }} </p>
    </div>
</div>

@endforeach

@endsection

