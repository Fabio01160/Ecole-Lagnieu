<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Ecole Jeanne d'Arc de Lagnieu</title>
        <link href="http://fr.allfont.net/allfont.css?fonts=little-days-alt" rel="stylesheet" type="text/css" />
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>

    <body>

    <div id="wrapper">
        <header>
        <div class="conteneur">
			<div class="col-md-10" id="leftSide">
                <form action="{{ url('search') }}" id="searchthis" method="get">  
                    <div class="col-md-6 col-md-offset-2">
                    <input id="searchbar" name="search" type="text" placeholder="RECHERCHER"/>
                </form>
                <img id="logo" class="img-circle" src="{{ url('images/logo1.png') }}">
                <i class="fas fa-envelope" id="enveloppe"></i>
            </div>
		</div>

        <div class="col-md-2" id="rightSide">
                <h3> CONNEXION </h3>
                <@include('posts.flash'){{--On inclut les messages flash --}}@include('posts.flash'){{--On inclut les messages flash --}}
                    <form  method="POST" action ="{{ route('login') }}" id="connect">
                        @csrf
                        <i class="fas fa-user rond"></i> 
                        
                        <div class="row">
                            <div class="col-md-offset-3">
                                <input id="username" name="name" placeholder="IDENTIFIANT" type="text" class="cartouche{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                <strong>{{ $errors->first('name') }}</strong>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-3">
                                <input id="password" placeholder="MOT DE PASSE" type="password" class="cartouche{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                    </form>
                <a href="{{ url('/reset') }}">Mot de passe oublié ?</a>
			</div>
		</div>
	
			<div class="conteneur">
                <div class="col-md-offset-2 col-md-10 col-sm-offset-2 col-sm-10" id="purple">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-4">
                            <i class="fas fa-map-marker-alt"></i><p>Avenue Charles de Gaulle 01150 Lagnieu </p>
                        </div>
                        <div class="col-md-2">
                            <i class="fas fa-mobile-alt"></i><p>04 74 34 50 22 </p>
                        </div>
                        <div class="col-md-3">
                            <i class="far fa-envelope"></i><p>ecole.jeannedarc@wanadoo.fr </p>
                        </div>
                    </div>
                </div>
    		</div>
        
        </header>
            <div class="container-fluid">         
                <div class="row">
                <!-- Sidebar Holder -->
                    <nav id="sidebar" class="col-md-2">
                        <div class="sidebar-header">
                            <i class="far fa-calendar-alt"><a href="{{ url('/calendrier') }}"></a></i>
                        </div>

                        <ul class="list-unstyled components">
                            <h3><a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"> <span class="littleDays"> Je suis... </span><br> <span class="avenir">UNE NOUVELLE FAMILLE </span></a> </h3>
                            
                            <hr>
                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                    <li><a href="{{ url('/histoire') }}">Histoire de l'école</a></li>
                                    <li><a href="{{ url('/associations') }}">Les associations</a></li>
                                    <li><a href="{{ url('/inscription') }}">Inscription</a></li>
                                    <li><a href="{{ url('/pastorale') }}">Pastorale</a></li>
                                    <li><a href="{{ url('/cantine') }}">Cantine / Périscolaire</a></li>
                                    <li><a href="{{ url('/organisation') }}">Organisation générale</a></li>
                                </ul>
                            </li>
                            <!--<a href="#">Vie de l'école</a>-->
                            <h3> <a href="#lifeInSchoolSubmenu" data-toggle="collapse" aria-expanded="false"><span class="littleDays"> Je suis... </span> <br> <span class="avenir"> PARENT D'ELEVE </span></a> </h3>
                                <hr>
                                <ul class="collapse list-unstyled" id="lifeInSchoolSubmenu">
                                    <!--<li><a href="profs.html">Enseignants</a></li>-->
                                    <li><a href="{{ url('/manifestations') }}">Manifestation</a></li>
                                    <li><a href="{{ url('/calendrier') }}">Calendrier</a></li>
                                    <li><a href="{{ url('/dossiersDeRentree') }}">Dossiers de rentrée</a></li>
                                    <li><a href="{{ url('/lienEcoleCollege') }}">Lien école-collège</a></li>
                                    <li><a href="{{ url('/reglementIntEleve') }}">Règlement intérieur</a></li>
                                </ul>
                            </li>

                            <h3> <a href="#redTapeSubmenu" data-toggle="collapse" aria-expanded="false"> <span class="littleDays"> Je suis... </span><br> <span class="avenir">ELEVE </span></a> </h3>
                                <hr>
                                <ul class="collapse list-unstyled" id="redTapeSubmenu">
                                    <li><a href="{{ url('/reglementIntParent') }}">Règlement intérieur</a></li>
                                    <li><a href="{{ url('/bibliotheque') }}">Plannings</a></li>
                                    <li><a href="{{ url('/menus') }}">Menus de la cantine</a></li>
                                    <li><a href="{{ url('/catechese') }}">Catéchèse / Culture chrétienne</a></li>

                                    <li><a href="#classroomSubmenu" data-toggle="collapse" aria-expanded="false">Ma classe</a>
                                        <ul class="collapse list-unstyled" id="classroomSubmenu">
                                            <li><a href="{{ url('/classe/ps-ms') }}">Classe de P.M.S.</a></li>
                                            <li><a href="{{ url('/classe/gs-ce2-cm1') }}">Classe de G.S.et C.M.1</a></li>
                                            <li><a href="{{ url('/classe/cp-ce1') }}">Classe de C.P. et C.E.1</a></li>
                                            <li><a href="{{ url('/classe/ce1-ce2') }}">Classe de C.E.1 et C.E.2</a></li>
                                            <li><a href="{{ url('/classe/cm1-cm2') }}">Classe de C.M.1 et C.M.2</a></li>
                                        </ul>
                                    </li> 
                                </ul>
                            </li>

                            <!--<li> <a href="#"> <i class="glyphicon glyphicon-phone-alt"></i> Contact </a> </li> -->
                        </ul>
                    </nav>

                    <!-- Page Content Holder -->
                    <div class="col-md-8">
                        <div id="carousel-example-generic2" class="carousel slide carousel-fullscreen carousel-fade" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic2" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox" >
                            <div class="item active" style="background-image: url('images/boy-child-childhood-207653.jpg');">
                                <!--<div class="overlay"></div>-->
                                <div class="carousel-caption">
                                    <h1 class="super-heading">Bienvenue à l'école Jeanne d'Arc</h1>
                                    <q class="super-paragraph">Cultivons le vrai, le bien, et beau.</q>
                                </div>
                            </div>
                            <div class="item" style="background-image: url('images/tableauNoir.jpg');">
                                <!--<div class="overlay"></div>-->
                                <div class="carousel-caption">
                                    <h1 class="super-heading">Vie de l'école</h1>
                                    <p class="super-paragraph">Découvrir le fonctionnement de l'école.</p>
                                </div>
                            </div>
                            <div class="item" style="background-image: url('images/ballon.jpg');">
                                <!--<div class="overlay"></div>-->
                                <div class="carousel-caption">
                                    <h1 class="super-heading">Evénements de nos associations</h1>
                                    <p class="super-paragraph">Tout au long de l'année, L'A.P.E.L. et l'O.G.E.C. se mobilisent pour organiser des événements</p>
                                </div>
                            </div>
                            <div class="item" style="background-image: url('images/art-artistic-bright-220320.jpg');">
                                <!--<div class="overlay"></div>-->
                                <div class="carousel-caption">
                                    <h1 class="super-heading">Administratif</h1>
                                    <p class="super-paragraph">Toutes les infos nécessaires</p>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Précédent</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span>
                        </a>
                    </div>
                    
                    <article id="notreEcole">

                        <h1>Notre école</h1>
                     
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br/>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br/>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    </article>

                    </div>
                </div>
            </div>   
        </div>         

        <footer>
        Mentions légales
        </footer>

        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <!-- Bootstrap Js CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });
                $('#sidebar').addClass('active');
                $('.overlay').fadeIn();
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        </script>

        <script>
            $(document).keypress(function(e) {
                if(e.which == 13) {
                    $("#connect").submit();
                }
            });

        </script>
    </body>
</html>

