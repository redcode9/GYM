<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/menustyle.css') }}">
    <script type="text/javascript" src="{{ url('js/dropdownmenu.js') }}"></script>
</head>
<body>
<div class="d-none d-lg-block navcol" id="menu">
    <nav class="nav flex-column navbar_spacing text-center">
        <div class="navbar-link my-2" style="margin-bottom: 0.5rem">
            <img
                    style="width: 100%; height: auto; margin-left: -1.5rem" src="{{asset('img/logo_gym3.png')}}"
                    alt="Logo">
        </div>


        <a class="nav-link my-4 btn btn-dark" href="{{route('HomeAdmin')}}">Dashboard</a> <!-- Momentaneo-->

        {{--        <div class="form-group">--}}
        {{--            <input class="form-control text-dark" style="border: 2px solid #353a40" type="text" name="search"--}}
        {{--                   id="search" placeholder="Search">--}}
        {{--        </div>--}}

        <a class="nav-link mt-1 btn btn-dark" href="{{route("iscrizioni")}}">Iscrizione</a>
        <a class="nav-link mt-1 btn btn-dark" href="{{route("segretaria_contabilità")}}">Contabilità</a>
        <button class="dropbtn nav-link mt-1 btn btn-dark" id="dropdownbtn" onclick="dropdownmenu()">Gestione</button>
        <div id="dropdowncontent" class="dropdown-content">
            <a class="nav-link btn btn-dark dropdownline" href="{{route('corsi')}}">Corsi</a>
            <a class="nav-link btn btn-dark" href="{{route('GestioneUtenti')}}">Utenti</a>
        </div>
        <footer class="col-lg-12 col-12 px-3">
            <div class="pb-1"
                 style="border-bottom: #353a40 solid 2px; border-top: #353a40 solid 2px;border-radius: 2px;">
                Account: {{Auth::user()->ruolo}}
            {{--@yield('UtenteLoggato','Admin/Segreteria')  --}}
            <!-- UtenteLoggato è la variabile in cui inseriremo il nome di chi è loggato davvero, Segretaria o Admin-->
            </div>

            <div style="padding: 1.5rem 0.6rem">
                @if (Auth::user()->ruolo=='Admin')
                    <a class="nav-link mt-1 btn btn-dark" href="{{route('modificaasd')}}" id="modifica_asd">Modifica
                        dati ASD</a>
                @endif
                <button class="nav-link mt-1 btn btn-light" id="logoutButton" style="color: #000; width: 100%;" data-toggle="modal"
                        data-target="#myModal">Logout</button>
            <!--<a class="nav-link mt-1 btn btn-light" style="color: #000;" href="{{route('logout')}}">Logout</a>-->

            </div>
        </footer>
    </nav>
</div>

<!--Modal conferma Logout-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-center">
        <div class="modal-dialog .modal-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Sei sicuro di voler uscire?</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span><span class="sr-only">Close</span>

                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                    <a class="btn btn-primary" href="{{route('logout')}}">Conferma</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fine Modal-->

<body>
