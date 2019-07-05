@extends('default')

@section('content')
   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="row">
                        <p class="indexButton"> <a class="btn btn-info" href="{{ url('/') }}"><i class="fas fa-home"></i>Retour à l'accueil</a></p>
                    </div>

                    <div class="card-body postTitle">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        Vous êtes connecté !

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
