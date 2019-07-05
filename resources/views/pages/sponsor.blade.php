@extends('default')

@section('content')

    <div class="container-fluid">

    <h1>Nos sponsors</h1>

    {{ $label["Sponsors"] }}

    <p> Voici les entreprises qui aident également notre école. Merci à elles ! </p>

    <div id="portfolio" class="container-fluid text-center bg-grey">
        <h2></h2><br>

        <div class="row text-center slideanim">
            <div class="col-md-4 col-sm-4">
                <div class="thumbnail">
                    <img src="{{ url('images/couloir.jpg') }}" alt="Paris" >
                    <p><strong>Entreprise Bidule</strong></p>
                    <p>Plombier</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="thumbnail">
                    <img src="{{ url('images/couloir.jpg') }}" alt="New York" width="400" height="300">
                    <p><strong>Machin S.A.</strong></p>
                    <p>Boulanger</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="thumbnail">
                    <img src="{{ url('images/03.jpg') }}" alt="San Francisco">
                    <p><strong>S.A.R.L Dupont</strong></p>
                    <p>Magasin de vêtements</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="thumbnail">
                    <img src="{{ url('images/03.jpg') }}" alt="San Francisco">
                    <p><strong>S.A.R.L Dupont</strong></p>
                    <p>Magasin de vêtements</p>
                </div>
            </div>

        </div>
    </div>

    {{--   <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <figure class="legende">
                        <img class="teacher" src="{{ url('images/01.jpg') }}" alt="Mme PIRET" title="Roseline PIRET">
                        <figcaption>Roseline PIRET, Présidente de l'A.P.E.L.</figcaption>
                    </figure>
                </div>

                <div class="col-md-4">
                    <figure class="legende">
                        <img class="teacher" src="{{ url('images/02.jpg') }}" alt="Mme COSENZA" title="Armelle COSENZA">
                        <figcaption>Armelle COSENZA, vice-présidente de l'A.P.E.L.</figcaption>
                    </figure>
                </div>

                <div class="col-md-4">
                    <figure class="legende">
                        <img class="teacher" src="{{ url('images/03.jpg') }}" alt="Mme MARTIN" title="Alexandra MARTIN">
                        <figcaption>Alexandra MARTIN, trésorière de l'A.P.E.L.</figcaption>
                    </figure>
                </div>

                <div class="col-md-4">
                    <figure class="legende">
                        <img class="teacher" src="{{ url('images/04.jpg') }}" alt="Mme BALME" title="Marie-Hélène BALME">
                        <figcaption>Marie-Hélène BALME, vice-trésorière de l'A.P.E.L.</figcaption>
                    </figure>
                </div>

                <div class="col-md-4">
                    <figure class="legende">
                        <img class="teacher" src="{{ url('images/05.jpg') }}" alt="Mme CLAVERT" title="Lucrèce CLAVERT">
                        <figcaption>Lucrèce CLAVERT, secrétaire de l'A.P.E.L.</figcaption>
                    </figure>
                </div>

                <div class="col-md-4">
                    <figure class="legende">
                        <img class="teacher" src="{{ url('images/06.jpg') }}" alt="Mme MAULET" title="Anne-Sophie MAULET">
                        <figcaption>Anne-Sophie MAULET, vice-secrétaire de l'A.P.E.L.</figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>--}} 

@endsection