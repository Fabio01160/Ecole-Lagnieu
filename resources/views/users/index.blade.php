@extends("default")

@section("content")

<div class="indexButton">
    <div class="row">
        <a class="col-md-offset-1 btn btn-info" href="{{ url('/') }}"><i class="fas fa-home"></i>Retour à l'accueil</a>
        <a class="btn btn-warning" href="{{ url('/dashboard') }}"><i class="fas fa-keyboard"></i></i>Panneau de contrôle</a>
        <a class="btn btn-success" href="{{ route('users.create') }}"><i class="fas fa-user-plus"></i>Créer un utilisateur</a>
    </div>
</div>

<h1>Gestion des utilisateurs</h1>
<div class="col-md-offset-1 col-md-10">
    <table class="table table-bordered table-striped">

        <th class="col-md-3">Nom de l'utilsateur</th>
        <th class="col-md-4">Email</th>
        <th class="col-md-3">Action</th>
        @foreach ($users as $user)
            <tr> 
                <td> {{ $user->name }}</td>
                <td> {!! $user->email !!}</td>
                <td> <a class="btn btn-info" href="{{ route('users.edit', $user) }}">Modifier l'utilisateur </a></td>
                <td>
                    <form action="{{ route('users.destroy', $user) }}" method="POST">
                        {!! method_field('DELETE') !!} 
                        {!! csrf_field() !!}
                        <input type="submit" onclick='displayAlert(event)' value="Supprimer l'utilisateur" class="btn btn-danger">
                    </form>
                </td>
            <tr>
        @endforeach

    </table>
</div>

@endsection