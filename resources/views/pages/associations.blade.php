@extends('default')

@section('content')

<div class="container-fluid">

<h1>Les associations</h1>

{!! $label["Associations"] !!}

{{--<p> Il y a deux associations qui gravitent autour de l'école : l'A.P.E.L. et l'O.G.E.C </p>
<p>Elles proposent tout au long de l'année scolaire de nombreuses manifestations<a href="{{ url('/manifestation') }}"> [aller sur la page]</a> </p>

<h3>L'A.P.E.L. (Association de parents d’élèves de l’enseignement libre)</h3>

<p> Les Apel agissent et s'impliquent dans la vie des établissements scolaires. Elles ont la responsabilité de représenter les parents, au sein des établissements comme auprès des responsables de l'Institution scolaire et des pouvoirs publics.
Ajoutons pleins d'autres trucs intéressants qui seront rajoutés par l'équipe.</p>

    <div class="col-md-4 col-sm-4">
        <div class="thumbnail">
            <img src="{{ url('images/01.jpg') }}" alt="San Francisco">
            <p><strong>Roseline PIRET</strong></p>
            <p>Présidente de l'A.P.E.L.</p>
        </div>
    </div>

    <div class="col-md-4 col-sm-4">
        <div class="thumbnail">
            <img src="{{ url('images/02.jpg') }}" alt="San Francisco">
            <p><strong>Armelle COSENZA</strong></p>
            <p>Vice-présidente de l'A.P.E.L.</p>
        </div>
    </div>

    <div class="col-md-4 col-sm-4">
        <div class="thumbnail">
            <img src="{{ url('images/03.jpg') }}" alt="San Francisco">
            <p><strong>Alexandra MARTIN</strong></p>
            <p>Trésorière de l'A.P.E.L.</p>
        </div>
    </div>

    <div class="col-md-4 col-sm-4">
            <div class="thumbnail">
                <img src="{{ url('images/04.jpg') }}" alt="San Francisco">
                <p><strong>Marie-Hélène BALME</strong></p>
                <p>Vice-trésorière de l'A.P.E.L.</p>
            </div>
        </div>
    
    <div class="col-md-4 col-sm-4">
        <div class="thumbnail">
            <img src="{{ url('images/05.jpg') }}" alt="San Francisco">
            <p><strong>Lucrèce CLAVERT</strong></p>
            <p>Secrétaire de l'A.P.E.L.</p>
        </div>
    </div>

    <div class="col-md-4 col-sm-4">
        <div class="thumbnail">
            <img src="{{ url('images/06.jpg') }}" alt="San Francisco">
            <p><strong>Anne-Sophie MAULET</strong></p>
            <p>Vice-secrétaire de l'A.P.E.L.</p>
        </div>
    </div>

<h3>L'O.G.E.C. (Organisme de gestion de l'Enseignement catholique)</h3>

<p> Les Ogec (Organismes de gestion de l'Enseignement catholique) constituent les supports juridiques, économiques et financiers des établissements catholiques d'enseignement. Responsable de la gestion économique, financière et sociale de l'établissement, l'Ogec exerce cette fonction en tenant compte du projet d'établissement, du Statut de l'Enseignement catholique, et de l'autorité de tutelle. 
Il s'assure du versement des cotisations aux services de l'Enseignement catholique.</p>

--}}

@endsection