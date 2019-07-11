<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Ecole Jeanne d'Arc de Lagnieu</title>
        <link href="https://fr.allfont.net/allfont.css?fonts=little-days-alt" rel="stylesheet" type="text/css" />
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="{{ secure_url('css/style.css') }}">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>
    <body>

	<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-10" id="leftSide">
                        <form action="{{ url('search') }}" id="searchthis" method="get">
                            <div class="col-md-offset-2 col-md-5 ">
                            <input id="searchbar" name="search" type="text" placeholder="RECHERCHER"/>
                        </form>
                        <a href="{{ url('/') }}"><img id="logo" src="{{ url('images/logoRond.png') }}"></a>
                        <a href="{{ url('/contact') }}"><i class="fas fa-envelope" id="enveloppe"></i></a>
                    </div>
                </div>
                    <div class="col-md-2" id="rightSide">
                        <h3> CONNEXION </h3>
                        <form  method="POST" action ="{{ route('login') }}" id="connect">
                            @csrf
                            <i class="fas fa-user rond"></i> 

                            <div class="row">
                                <div class="col-md-offset-3">
                                    <input id="username" name="name" placeholder="IDENTIFIANT" type="text" class="cartouche{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-3">
                                    <input id="password" placeholder="MOT DE PASSE" type="password" class="cartouche{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                </div>
                            </div>
                        </form>
                        <a href="{{ url('/reset') }}">Mot de passe oublié ?</a>
                    </div>
                </div>
            </div>

            <div class="col-md-offset-2 col-md-10">
                <div class="row">
                    <div class="navbar nav-default col-md-12">
                        <div class="col-md-offset-2 col-md-4">
                            <i class="fas fa-map-marker-alt"></i><p>Avenue Charles de Gaulle 01150 Lagnieu </p>
                        </div>

                        <div class="col-md-2">
                            <i class="fas fa-mobile-alt"></i><p>04 74 34 50 22 </p>
                        </div>

                        <div class="col-md-4">
                            <a href="{{ url('/contact') }}"><i class="far fa-envelope"></i><p>ecole.jeanne-arc@wanadoo.fr </p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="menu" class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <nav id="sidebar">
                            <div class="sidebar-header">
                                <a href="{{ url('/calendrier') }}"><i class="far fa-calendar-alt"></i></a>
                            </div>
                            <ul class="list-unstyled components">
                                <h3><a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"><span class="littleDays"> Je suis... </span><br> <span class="avenir">UNE NOUVELLE FAMILLE </span></a> </h3>
                                <hr>
                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                    <a href="{{ url('/histoire') }}"><li>Histoire de l'école</li></a>
                                    <a href="{{ url('/associations') }}"><li>Les associations</li></a>
                                    <a href="{{ url('/inscription') }}"><li>Inscription</li></a>
                                    <a href="{{ url('/pastorale') }}"><li>Pastorale</li></a>
                                    <a href="{{ url('/cantine') }}"><li>Cantine / Périscolaire</li></a>
                                    <a href="{{ url('/organisation') }}"><li>Organisation générale</li></a>
                                </ul>

                                <h3><a href="#lifeInSchoolSubmenu" data-toggle="collapse" aria-expanded="false"><span class="littleDays"> Je suis... </span> <br> <span class="avenir"> PARENT D'ELEVE </span></a> </h3>
                                <hr>
                                <ul class="collapse list-unstyled" id="lifeInSchoolSubmenu">
                                    <a href="{{ url('/manifestations') }}"><li>Manifestations</li></a>
                                    <a href="{{ url('/calendrier') }}"><li>Calendrier</li></a>
                                    <a href="{{ url('/dossiersDeRentree') }}"><li>Dossiers de rentrée</li></a>
                                    <a href="{{ url('/lienEcoleCollege') }}"><li>Lien école-collège</li></a>
                                    <a href="{{ url('/reglementIntParent') }}"><li>Règlement intérieur</li></a>
                                </ul>

                                <h3><a href="#redTapeSubmenu" data-toggle="collapse" aria-expanded="false"><span class="littleDays"> Je suis... </span><br> <span class="avenir">ELEVE </span></a> </h3>
                                <hr>
                                    <ul class="collapse list-unstyled" id="redTapeSubmenu">
                                        <a href="{{ url('/reglementIntEleve') }}"><li>Règlement intérieur</li></a>
                                        <a href="{{ url('/bibliotheque') }}"><li>Plannings</li></a>
                                        <a href="{{ url('/menus') }}"><li>Menus de la cantine</li></a>
                                        <a href="{{ url('/catechese') }}"><li>Catéchèse / Culture chrétienne</li></a>
                                        <li class="noHover"><a href="#classroomSubmenu" data-toggle="collapse" aria-expanded="false">Ma classe</a>
                                            <ul class="collapse list-unstyled" id="classroomSubmenu">
                                                <a href="{{ url('/classe/ps-ms') }}"><li>Classe de Petite et Moyenne Sections</li></a>
                                                <a href="{{ url('/classe/gs-ce2-cm1') }}"><li>Classe de Grande Section et C.M.1</li></a>
                                                <a href="{{ url('/classe/cp-ce1') }}"><li>Classe de C.P. et C.E.1</li></a>
                                                <a href="{{ url('/classe/ce1-ce2') }}"><li>Classe de C.E.1 et C.E.2</li></a>
                                                <a href="{{ url('/classe/cm1-cm2') }}"><li>Classe de C.M.1 et C.M.2</li></a>
                                            </ul>
                                        </li> 
                                    </ul>
                                    </li>
                                <a href="{{ url('/contact') }}"><li class="noHover"><span class="littleDays">Contact</span></li></a>
                                @if (Auth::check() && Auth::user()->profile)
                                    <a href="{{ url('/dashboard') }}"><li class="noHover"><span class="littleDays">Aller au panneau de contrôle</span></li></a>
                                @endif
                                    <a href="{{ url('/sponsor') }}"><li class="noHover"><span class="littleDays">Nos sponsors</span></li></a>
                                <a href="{{ url('/mentions') }}"><li class="noHover"><span class="littleDays">Mentions légales</span></li></a>
                                @if (Auth::check())
                                <form class="menuButton" action="{{ url('/logout') }}" method='POST'>
                                    {!! csrf_field() !!}
                                    <input class="btn btn-danger" style='margin-left: 17%;' type="submit" value="Se déconnecter">
                                </form>
                                @endif
                            </ul>
                        </nav>
                    </div>

                    <main role="main" class="container-fluid">

                        <div class="content">
                            <div class="row">
                                <div class="col-md-9">
                                    @yield("content")
                                </div>
                            </div>  
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
<footer>


</footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
    <script>
        
        let menuSaved = localStorage.menus === undefined ? [] : JSON.parse(localStorage.menus);
        for(let i in menuSaved)
        {
            $('#'+menuSaved[i]).collapse('show');
        }

        $('#buttonArticle').on('click', function(e) {
            if (!$('input[name="title"]').val())
            {
                e.preventDefault();
                swal({
                    title: "Attention il manque le titre de l'article !",
                    text: "Votre article doit avoir un titre.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
            }

            else if ($('input[name="image"]').get(0).files.length<1) {
                e.preventDefault();
                swal({
                    title: "Attention il manque une image !",
                    text: "Votre article doit comporter une image.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
            }
        });
        

        $('#homeSubmenu').on("shown.bs.collapse", function()
        {
            let active = $(this).attr("id");
            if (localStorage.menus===undefined)
            {
                localStorage.menus = JSON.stringify([active]);
            }
            else {
                let menuArray = JSON.parse(localStorage.menus);

                if(menuArray.indexOf(active)===-1)
                {
                    menuArray.push(active);
                }
                localStorage.menus = JSON.stringify(menuArray);
            }
        });

        $('#homeSubmenu').on("hide.bs.collapse", function()
        {
            let active = $(this).attr("id");
            let menuArray = JSON.parse(localStorage.menus);

            if(menuArray.indexOf(active)!==-1)
            {
                menuArray.splice(menuArray.indexOf(active), 1);
            }
            localStorage.menus = JSON.stringify(menuArray);
        });
        
        $('#lifeInSchoolSubmenu').on("shown.bs.collapse", function()
        {
            let active = $(this).attr("id");
            if (localStorage.menus===undefined)
            {
                localStorage.menus = JSON.stringify([active]);
            }
            else {
                let menuArray = JSON.parse(localStorage.menus);

                if(menuArray.indexOf(active)===-1)
                {
                    menuArray.push(active);
                }
                localStorage.menus = JSON.stringify(menuArray);
            }
        });

        $('#lifeInSchoolSubmenu').on("hide.bs.collapse", function()
        {
            let active = $(this).attr("id");
            let menuArray = JSON.parse(localStorage.menus);

            if(menuArray.indexOf(active)!==-1)
            {
                menuArray.splice(menuArray.indexOf(active), 1);
            }
            localStorage.menus = JSON.stringify(menuArray);
        });

        $('#redTapeSubmenu').on("shown.bs.collapse", function()
        {
            let active = $(this).attr("id");
            if (localStorage.menus===undefined)
            {
                localStorage.menus = JSON.stringify([active]);
            }
            else {
                let menuArray = JSON.parse(localStorage.menus);

                if(menuArray.indexOf(active)===-1)
                {
                    menuArray.push(active);
                }
                localStorage.menus = JSON.stringify(menuArray);
            }
        });

        $('#redTapeSubmenu').on("hide.bs.collapse", function()
        {
            let active = $(this).attr("id");
            let menuArray = JSON.parse(localStorage.menus);

            if(menuArray.indexOf(active)!==-1)
            {
                menuArray.splice(menuArray.indexOf(active), 1);
            }
            localStorage.menus = JSON.stringify(menuArray);
        });

        $(document).keypress(function(e) {
            if(e.which == 13) {
                $("#connect").submit();
            }
        });

        function displayErrors(title,message, alert)
        {
            swal(title,message, alert);
        }

        function displayAlert(event)
        {
            event.preventDefault();
            swal({
            title: "Etes vous sûr(e) de vouloir continuer ?",
            text: "Si vous avez changé d'avis, cliquez sur 'Cancel' !",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                    swal("L'action demandée a bien été effetuée !", {
                    icon: "success",
                });
                $(event.target).closest('form').submit();
                } else {
                    swal("L'action a bien été annulée !");
                }
            });
        }
        
        @if (!session()->get('isRegister') && ($errors->has('name') || $errors->first('password')))
            displayErrors('Petit problème !', 'Identifiant ou mot de passe invalide.', 'error')
        @endif

        @if (session()->get('isRegister') && ($errors->has('name') ))
            displayErrors("Il manque le nom !", 'Veuillez remplir le champ "Nom de l\'utilisateur".', "error")

        @elseif (session()->get('isRegister') && ($errors->has('email') ))
            displayErrors("Il manque l'adresse mail !", 'Veuillez remplir le champ "Adresse mail de l\'utilisateur".', "error")

        @elseif (session()->get('isRegister') && ($errors->has('password') ))
            displayErrors("Il manque un mot de passe !", 'Veuillez remplir le champ "Mot de passe de l\'utilisateur".', "error")
        
        @elseif (session()->get('isRegister') && ($errors->has('password_confirmation') ))
            displayErrors("Vous n'avez pas confirmé le mot de passe !", 'Veuillez remplir le champ "Confirmation de mot de passe".', "error")
        
        @endif


    </script>

    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=8dzax3r89w6pf827p7ykwd3soyohjqsysbr3puloamubtf3o"></script>
    <script src="{{ secure_url("/js/tinyfix.js") }}"></script>
    <script src="{{ secure_url("/js/script.js") }}"></script>
   

  </body>
</html>