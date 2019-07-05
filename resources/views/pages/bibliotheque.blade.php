@extends('default')

@section('content')

<section>
    <h1>Bibliothèque</h1>

    {!! $label["Bibliothèque"] !!}

    <p> La bibilothèque : livres, horaires, emplacement</p>
    <p> Voici la liste des jours où les jours les élèves se rendent à la bibliothèque </p>

        <table class="table table-bordered table-striped">
        <caption> Jours de bibliothèque </caption>
            <th class="col-md-2"> </th>
            <th class="col-md-3 lightgrey"> CM1 - CM2 </th>
            <th class="col-md-3 lightgrey"> GS-CM1 </th>
            <th class="col-md-3 col-md-offset-1 lightgrey"> CE1-CE2 </th>

            <tr>
                <td class="bold">Lundi 14 mai</td>
                <td>9h - 9h45</td>
                <td>9h45 - 10h30</td>
                <td>10h30 - 11h15</td> 
            </tr>
            <tr>
                <td class="bold">Lundi 28 mai</td>
                <td>9h - 9h45</td>
                <td>9h45 - 10h30</td>
                <td>10h30 - 11h15</td> 
            </tr>

            <tr>
                <td class="bold">Lundi 11 juin</td>
                <td>9h - 9h45</td>
                <td>9h45 - 10h30</td>
                <td>10h30 - 11h15</td> 
            </tr>

            <tr>
                <td class="bold">Lundi 25 juin</td>
                <td>9h - 9h45</td>
                <td>9h45 - 10h30</td>
                <td>10h30 - 11h15</td> 
            </tr>
        </table>
    </section>

    <section>

    <h1>Sport</h1>

    <p> Agenda et emplacement des séances de sport</p>
    <p> Voici la liste des jours où les élèves feront du sport. </p>
        
        <table class="table table-bordered table-striped">
        <caption>Séances de sport</caption>
            <th></th>
            <th colspan="2" class="intervenant">Avec Nicolas</th>
            
            <th class="sportTeach">Avec l'enseignante</th>
            <tr>
                <td class="bold" style="background-color: grey;">Date</td>
                <td class="bold" style="background-color: orange;">Grande salle</td>
                <td class="bold" style="background-color: orange;">Extérieur</td>
                <td class="bold" style="background-color: green;">Dojo</td>
            </tr>
            <tr>
                <td class="bold">Jeudi 3 mai</td>
                <td class="intervenant">CE1-CE2 <br/> CM1-CM2</td>
                <td class="intervenant"></td>
                <td class="sportTeach">CP-CE1 <br/> PS-MS</td>
            </tr>
            <tr>
                <td class="bold">Vendredi 4 mai</td>
                <td class="intervenant">CE1-CE2 <br/> CM1-CM2</td>
                <td class="intervenant"></td>
                <td class="sportTeach">CP-CE1 <br/> PS-MS</td>
            </tr>

            <tr>
                <td class="bold">Vendredi 11 mai</td>
                <td class="intervenant">CE1-CE2 <br/> CM1-CM2</td>
                <td class="intervenant"></td>
                <td class="sportTeach">CP-CE1 <br/> PS-MS</td>
            </tr>

            <tr>
                <td class="bold">Vendredi 18 mai</td>
                <td class="intervenant">CE1-CE2 <br/> CM1-CM2</td>
                <td class="intervenant"></td>
                <td class="sportTeach">CP-CE1 <br/> PS-MS</td>
            </tr>
        </table>
    </section>

@endsection
