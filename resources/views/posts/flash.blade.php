@if(session('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div> <!--Etant donné que la valeur est passée à la vue, elle sera supprimée de la session. Le message ne sera affiché qu'une seule fois -->
@endif

@if(session('info'))
    <div class="alert alert-info">
        {{ Session::get('info') }}
    </div> <!--Etant donné que la valeur est passée à la vue, elle sera supprimée de la session. Le message ne sera affiché qu'une seule fois -->
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div> <!--Etant donné que la valeur est passée à la vue, elle sera supprimée de la session. Le message ne sera affiché qu'une seule fois -->
@endif