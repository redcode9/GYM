@extends('templates.base', ['menu' => "on"])
@section('corpo')

    <div class="row mt-4">

        <div class="col-12 col-lg-12">
            <div class="mx-4 text-center">
                <h1 style="padding: 1rem; border: 3px solid black; border-right: none; border-left: none; color: black">DASHBOARD ADMIN</h1>
            </div>
        </div>
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container ml-4">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!--[ daily sales section ] start-->
                                <div class="col-md-6 col-xl-4">
                                    <div class="card daily-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Entrate Mensili</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>
                                                        € {{$sumtra}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ Uscite mensili ] starts-->
                                <div class="col-md-6 col-xl-4">
                                    <div class="card Monthly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Uscite Mensili</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-down text-c-red f-30 m-r-10"></i>€{{$transzs}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ Entrate totali] end-->
                                <div class="col-md-12 col-xl-4">
                                    <div class="card yearly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Entrate Annuali</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>€{{$sumtrann}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ year  sales section ] end-->
                                <!--[ Recent Users ] start-->
                                <div class="col-xl-6 col-md-6">
                                    <div class="card Recent-Users">
                                        <div class="card-header">
                                            <h5>Iscrizioni Recenti</h5>
                                        </div>
                                        <div class="card-block px-0 py-3">
                                            <div class="table-responsive scroll">
                                                <table class="table table-hover">
                                                    <tbody>

                                                    @foreach($allsoci as $Socio )
                                                        @if($Socio->verbalizzato==0)

                                                        <tr class="unread">
                                                            <td><img class="rounded-circle" style="width:40px;"
                                                                     src="@if($Socio->tipo=='allievo') {{asset('img/Allievo.jpg')}} @else {{asset('img/Docente.jpg')}} @endif"
                                                                     ></td>
                                                            <td>

                                                                <h6 class="mb-1">{{$Socio->nome}} {{$Socio->cognome}}</h6>
                                                                <p class="m-0"></p>
                                                            </td>
                                                            <td>

                                                                @foreach($datifs as $DFS)
                                                                    @if ($Socio->dati_fiscali==$DFS->id)
                                                                <h6 class="text-right">{{$DFS->data_iscriz}}</h6>
                                                                    @endif
                                                                    @endforeach
                                                            </td>
                                                            <td><a onclick="window.location.href='{{ (route('HomeAdminVRBN',[$Socio->id]))}}'" style="cursor: pointer" class="label theme-bg2 text-white f-12">Rifiuta</a><a
                                                                    onclick="window.location.href='{{ (route('HomeAdminVRBS',[$Socio->id]))}}'" style="cursor: pointer" class="label theme-bg text-white f-12">Verbalizza</a>
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ Recent Users ] end-->

                                <!--[ Richiesta fondatore] start-->
                                <div class="col-xl-6 col-md-6">
                                    <div class="card Richiesta-Fondatore ml-3">
                                        <div class="card-header">
                                            <h5>Richiesta Socio Fondatore</h5>
                                        </div>
                                        <div class="card-block px-0 py-0">
                                            <div class="table-responsive scroll">
                                                <table class="table table-hover">
                                                    <tbody>

                                                    @foreach($allsoci as $Socio)
                                                        @if($Socio->fondatore==2)

                                                            <tr class="unread">
                                                                <td><img class="rounded-circle" style="width:40px;"
                                                                         src="@if($Socio->tipo=='allievo') {{asset('img/Allievo.jpg')}} @else {{asset('img/Docente.jpg')}} @endif"
                                                                    ></td>
                                                                <td>

                                                                    <h6 class="mb-1">{{$Socio->nome}} {{$Socio->cognome}}</h6>
                                                                    <p class="m-0"></p>
                                                                </td>
                                                                <td>

                                                                    <h6 class="text-right">{{$Socio->tipo}}</h6>

                                                                </td>
                                                                <td><a onclick="window.location.href='{{ (route('HomeAdminFNDN',[$Socio->id]))}}'" style="cursor: pointer" class="label theme-bg2 text-white f-12">Rifiuta</a><a
                                                                        onclick="window.location.href='{{ (route('HomeAdminFNDS',[$Socio->id]))}}'" style="cursor: pointer" class="label theme-bg text-white f-12">Accetta</a>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--[ Richiesta Fondatore ] end-->



                                <div class="col-xl-8 col-md-12 m-b-30">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active show" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Tessere</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Certificati</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">

                                        <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Utente</th>
                                                    <th>N.Tessera</th>
                                                    <th>Data Emissione</th>
                                                    <th>Stato</th>
                                                    <th class="text-right"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($allsoci as $Socio)
                                                    @foreach($TESS as $tessera)
                                                    @if($Socio->tessera==$tessera->id)
                                                    @if($tessera->scad_tess <= $oggi)
                                                    <td>
                                                        <h6 class="m-0"><img class="rounded-circle m-r-10" style="width:30px;"
                                                                             src="@if($Socio->tipo=='allievo') {{asset('img/Allievo.jpg')}}
                                                                             @else {{asset('img/Docente.jpg')}} @endif"
                                                                             alt="activity-user">{{$Socio->nome}} {{$Socio->cognome}}</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0">{{$Socio->tessera}}</h6>


                                                    </td>
                                                    <td>

                                                        <h6 class="n-time   ">{{$tessera->data_tess}}</h6>
                                                    </td>
                                                    <td>

                                                        <h6 class="m-0 text-c-red">Scaduta </h6>


                                                    </td>
                                                    <td class="text-right">
                                                        <a onclick="window.location.href='{{ (route('HomeAdminAGTS',[$tessera->id]))}}'" style="cursor: pointer"  class="label theme-bg2 text-white f-12">Aggiorna</a>
                                                    </td>
                                                </tr>
                                                        @endif
                                                    @endif
                                                    @endforeach
                                                 @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Utenti</th>
                                                    <th>Data Emissione</th>
                                                    <th>Data Scadenza</th>
                                                    <th>Stato</th>
                                                    <th class="text-right"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($allsoci as $Socio)
                                                    @foreach($ISCR as $iscritto)
                                                        @if($Socio->iscrizione==$iscritto->id)
                                                            @if($iscritto->cert_med_scadenza <= $oggi)
                                                <tr>
                                                    <td>
                                                        <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:30px;" src="@if($Socio->tipo=='allievo') {{asset('img/Allievo.jpg')}}
                                                            @else {{asset('img/Docente.jpg')}} @endif" alt="activity-user">{{$Socio->nome}} {{$Socio->cognome}}</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-muted">{{$iscritto->cert_med_rilascio}}</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-muted">{{$iscritto->cert_med_scadenza}}</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0 text-c-red">Scaduto</h6>
                                                    </td>
                                                    <td class="text-right">
                                                        <a  onclick="window.location.href='{{ (route('HomeAdminAGCM',[$iscritto->id]))}}'"style="cursor: pointer"  class="label theme-bg2 text-white f-12">Aggiorna</a>
                                                    </td>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
    </div>
@endsection
