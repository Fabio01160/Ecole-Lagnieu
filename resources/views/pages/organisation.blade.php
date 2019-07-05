@extends('default')

@section('content')

    <h1>Organisation générale de l'école</h1>

    {!! $label["Organisation générale"] !!}

    <p> Ca a l'air compliqué comme ça mais en fait... En fait, c'est assez compliqué.</p>

    <section id="organigramme">
        <img class="projetEduc" src="{{ URL('../public/images/organigrammeEcole.jpg') }}">
    </section>

    <section id="heures">
        <div class="container-fluid">
            <div class="row">
                <table class="table table-bordered table-condensed table-sm">
                <caption>Horaires d'ouverture</caption>
                    <th></th>
                    <th>Ouverture des portes</th>
                    <th>Début de la classe</th>
                    <th>Fin de la classe</th>
                    <th>Fermeture des portes</th>
                    <tr>
                        <td><span class="bold">Matin</span></td>
                        <td>8h15</td>
                        <td><span class="bold">8h30</span></td>
                        <td><span class="bold">11h45</span></td>
                        <td>11h55</td>
                    </tr>

                    <tr>
                        <td><span class="bold">Après-midi</span></td>
                        <td>13h20</td>
                        <td><span class="bold">13h30</span></td>
                        <td><span class="bold">16h30</span></td>
                        <td>16h40</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <section>
        <h2>L'équipe éducative</h2>
        <div class="col-md-4 col-sm-4">
                <div class="thumbnail">
                    <img src="{{ url('images/01.jpg') }}" alt="Madame DE BROISSIA">
                    <p><strong>Madame DE BROISSIA</strong></p>
                    <a href="{{ url('/classe/ps-ms') }}"> <p>Petite et Moyenne Sections</p></a>
                </div>
            </div>
        
            <div class="col-md-4 col-sm-4">
                <div class="thumbnail">
                    <img src="{{ url('images/02.jpg') }}" alt="Madame GUILLEMIN">
                    <p><strong>Madame GUILLEMIN</strong></p>
                    <a href="{{ url('/classe/gs-cm1') }}"><p>Directrice, Grande Section et C.M.1</p></a>
                </div>
            </div>
        
            <div class="col-md-4 col-sm-4">
                <div class="thumbnail">
                    <img src="{{ url('images/03.jpg') }}" alt="Madame BRUNOD-PIN">
                    <p><strong>Madame BRUNOD-PIN</strong></p>
                    <a href="{{ url('/classe/cp-ce1') }}"><p>C.P. et C.E.1</p></a>
                </div>
            </div>
        
            <div class="col-md-4 col-sm-4">
                    <div class="thumbnail">
                        <img src="{{ url('images/04.jpg') }}" alt="Madame CAGNIN">
                        <p><strong>Madame CAGNIN</strong></p>
                        <a href="{{ url('/classe/ce1-ce2') }}"><p>C.E.1 et C.E.2</p></a>
                    </div>
                </div>
            
            <div class="col-md-4 col-sm-4">
                <div class="thumbnail">
                    <img src="{{ url('images/05.jpg') }}" alt="Madame BERTHELEMY">
                    <p><strong>Madame BERTHELEMY</strong></p>
                    <a href="{{ url('/classe/cm1-cm2') }}"><p>C.M.1 et C.M.2</p></a>
                </div>
            </div>
        
            <div class="col-md-4 col-sm-4">
                <div class="thumbnail">
                    <img src="{{ url('images/06.jpg') }}" alt="Madame MARTIN-DERAME">
                    <p><strong>Madame MARTIN-DERAME</strong></p>
                    <a href="{{ url('/') }}"> <p>A compléter</p></a>
                </div>
            </div>
    </section>

@endsection