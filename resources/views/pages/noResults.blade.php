@extends("default")

@section("content")
    <div class="row">
        <p class="indexButton"> <a class="btn btn-info" href="{{ url('/') }}"><i class="fas fa-home"></i>Retour à l'accueil</a></p>
    </div>
    <h2>   Désolé, aucun résultat ne correspond à votre recherche.</h2>
        <p>Nous vous suggérons de :</p>
        <ul>
            <li>Vérifier l'orthographe de votre recherche.</li>
            <li>Essayer d'utiliser moins de mots dans votre recherche.</li>
            <li>Essayer de rechercher des termes plus génériques.</li>
        </ul>
        
@endsection