@extends('default')

@section('content')

    <h1>Résultats de recherche</h1>
    
    <h3>La recherche a donné des résultats dans : </h3>
    <br>
    @foreach ($views as $title=>$view )

        <p> <a class="text-primary" href="{{ $view }}">{{ $title }}</a> </p>
   
    @endforeach
    

@endsection