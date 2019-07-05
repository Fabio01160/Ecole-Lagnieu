@extends("default")

@section("content")

<div class="indexButton">
    <div class="row">
        <a class="col-md-offset-1 btn btn-info" href="{{ url('/') }}"><i class="fas fa-home"></i>Retour à l'accueil</a>
        <a class="btn btn-warning" href="{{ url('/dashboard') }}"><i class="fas fa-keyboard"></i></i>Panneau de contrôle</a>
    </div>
</div>

<h1>Gestion des pages</h1>
<div class="col-md-offset-1 col-md-10">
    <table class="table table-bordered table-striped">

        <th class="col-md-2">Nom de la page</th>
        <th class="col-md-6">Contenu</th>
        <th class="col-md-2">Action</th>
        @foreach ($texts as $text)
            <tr> 
                <td> {{ $text->label }}</td>
                <td> {!! $text->content !!}</td>
                <td> <a class="btn btn-info" href="{{ route('text.edit',$text) }}">Modifier la page </a></td>
            <tr>
        @endforeach

    </table>
</div>

@endsection