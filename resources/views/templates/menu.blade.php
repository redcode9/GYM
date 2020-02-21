<div class="d-none d-lg-block col-lg-2 navcol"
     style="border-radius: 7px;border-right: 5px solid #353a40;border-bottom: 6px solid #353a40; background-image: linear-gradient(#ffffff,rgba(255,135,0,0.54));">
    <nav class="nav flex-column navbar_spacing text-center">
        <a class="navbar-link" href="{{route('scelta')}}" style="margin-bottom: 0.5rem">
            <img
                style="width: 100%; height: auto" src="{{asset('img/logo_gym3.png')}}" alt="Logo"></a>


        <a class="nav-link mb-4 text-light btn btn-dark" href="{{route('HomeAdmin')}}">Dashboard</a> <!-- Momentaneo-->

        <div class="form-group">
            <input class="form-control text-dark" style="border: 2px solid #353a40" type="text" name="search"
                   id="search" placeholder="Search">
        </div>

        <a class="nav-link mt-1 text-light btn btn-dark" href="{{route("iscrizioni")}}"> Nuovo Utente</a>

        <a class="nav-link mt-1 text-light btn btn-dark" href="">Contabilità</a>


        <a class="nav-link mt-1 text-light btn btn-dark" href="{{route('corsi')}}">Gestione Corsi</a>


        <a class="nav-link mt-1 text-light btn btn-dark" href="{{route('GestioneUtenti')}}">Gestione Utenti</a>
        <!-- Per adesso sta VisualizzaTutti come route, da cambiare in SelezioneUtenti successivamente-->
        <div class="mt-3 pb-1"
             style="border-bottom: #353a40 solid 2px; border-top: #353a40 solid 2px;;border-radius: 2px;">
            Account: @yield('UtenteLoggato','Admin/Segretaria')  <!-- UtenteLoggato è la variabile in cui inseriremo il nome di chi è loggato davvero, Segretaria o Admin-->
        </div>

        <div class="nav-link text-light">
            <a class="nav-link mt-1 text-light btn btn-dark" href="#">Modifica dati ASD</a>
            <a class="nav-link mt-1 text-dark btn btn-light" href="{{route('logout')}}">Logout</a>
        </div>
    </nav>
</div>

@php
    //TODO cambiare i link scelta in dashboard quando verrà creata
@endphp
