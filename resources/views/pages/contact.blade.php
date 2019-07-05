@extends('default')

@section('content')

<div class="container-fluid">
    <div class="row">
        <a class="indexButton btn btn-info pull-left" href="{{ url('/') }}"><i class="fas fa-home"></i>Retour à l'accueil</a>
    </div>
    <div class="col-md-offset-2 col-md-8">
        <div class="form-area">  
        <form role="form" action="{{ url('contact')}}"  method="POST">
            {{ csrf_field() }}
                <h1>Formulaire de contact</h1>

                {!! $label["Contact"] !!}

                <div class="form-group">
                    <label for="name">Vos prénom et nom</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Jean DUPONT" required>
                </div>
                <div class="form-group">
                    <label for="email">Votre adresse mail</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="jean.dupont@truc.fr" required>
                </div>
                <div class="form-group">
                    <label for="name">Votre numéro de téléphone</label>    
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="01 02 03 04 05">
                </div>
                <div class="form-group">
                    <label for="name">Titre du message</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="L'objet de votre mail" required>
                </div>
                <div class="form-group">
                <label for="name">Votre message</label>
                <textarea class="form-control" name='content' type="textarea" id="message" placeholder="Ce que vous avez à nous dire ou à nous demander"></textarea>
                </div>
                
                <button type="submit" id="submit" name="submit" class="btn btn-info pull-right">Envoi du message</button>
            </form>
        </div>
    </div>
</div>

@endsection