@extends('templates.base', ['menu' => "on"])
@section('corpo')
    <div class="row mt-4">

        <div class="col-12 col-lg-12">
            <div class="mx-4 text-center">
                <h1 style="padding: 1rem; border: 3px solid black; border-right: none; border-left: none; color: black">Dashboard</h1>
            </div>
        </div>
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
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
                                                    <h3 class="f-w-300 d-flex align-items-center m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>€ 249.95</h3>
                                                </div>

                                                <div class="col-3 text-right">
                                                    <p class="m-b-0">67%</p>
                                                </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar theme-bg" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ daily sales section ] end-->
                                <!--[ Monthly  sales section ] starts-->
                                <div class="col-md-6 col-xl-4">
                                    <div class="card Monthly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Uscite Mensili</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-down text-c-red f-30 m-r-10"></i>€ 2.942.32</h3>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="m-b-0">36%</p>
                                                </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar theme-bg2" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div><!--Prima stava progress-c-theme-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ Monthly  sales section ] end-->
                                <!--[ year  sales section ] starts-->
                                <div class="col-md-12 col-xl-4">
                                    <div class="card yearly-sales">
                                        <div class="card-block">
                                            <h6 class="mb-4">Entrate Annuali</h6>
                                            <div class="row d-flex align-items-center">
                                                <div class="col-9">
                                                    <h3 class="f-w-300 d-flex align-items-center  m-b-0"><i class="feather icon-arrow-up text-c-green f-30 m-r-10"></i>€ 8.638.32</h3>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <p class="m-b-0">80%</p>
                                                </div>
                                            </div>
                                            <div class="progress m-t-30" style="height: 7px;">
                                                <div class="progress-bar theme-bg" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ year  sales section ] end-->
                                <!--[ Recent Users ] start-->
                                <div class="col-xl-8 col-md-6">
                                    <div class="card Recent-Users">
                                        <div class="card-header">
                                            <h5>Iscrizioni Recenti</h5>
                                        </div>
                                        <div class="card-block px-0 py-3">
                                            <div class="table-responsive scroll">
                                                <table class="table table-hover">
                                                    <tbody>
                                                    <tr class="unread">
                                                        <td><img class="rounded-circle" style="width:40px;" src="{{asset('img/Docente.jpg')}}" alt="activity-user"></td>
                                                        <td>
                                                            <h6 class="mb-1">Isabella Fiorentini</h6>
                                                            <p class="m-0">Allievo</p>
                                                        </td>
                                                        <td>
                                                            <h6 class="text-muted"></i>9 Maggio 12:56</h6>
                                                        </td>
                                                        <td><a href="#!" class="label theme-bg2 text-white f-12">Rifiuta</a><a href="#!" class="label theme-bg text-white f-12">Verbalizza</a></td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td><img class="rounded-circle" style="width:40px;" src="{{asset('img/Allievo.jpg')}}" alt="activity-user"></td>
                                                        <td>
                                                            <h6 class="mb-1">Isabella Fiorentini</h6>
                                                            <p class="m-0">Allievo</p>
                                                        </td>
                                                        <td>
                                                            <h6 class="text-muted"></i>9 Maggio 12:56</h6>
                                                        </td>
                                                        <td><a href="#!" class="label theme-bg2 text-white f-12">Rifiuta</a><a href="#!" class="label theme-bg text-white f-12">Verbalizza</a></td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td><img class="rounded-circle" style="width:40px;" src="{{asset('img/Docente.jpg')}}" alt="activity-user"></td>
                                                        <td>
                                                            <h6 class="mb-1">Matilde Andreotti</h6>
                                                            <p class="m-0">Allievo</p>
                                                        </td>
                                                        <td>
                                                            <h6 class="text-muted">11 Maggio 10:35</h6>
                                                        </td>
                                                        <td><a href="#!" class="label theme-bg2 text-white f-12">Rifiuta</a><a href="#!" class="label theme-bg text-white f-12">Verbalizza</a></td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td><img class="rounded-circle" style="width:40px;" src="{{asset('img/Allievo.jpg')}}" alt="activity-user"></td>
                                                        <td>
                                                            <h6 class="mb-1">Chiara Michelotti</h6>
                                                            <p class="m-0">Allievo</p>
                                                        </td>
                                                        <td>
                                                            <h6 class="text-muted"><!--<i class="fas fa-circle text-c-green f-10 m-r-15">--></i>7 Maggio 17:38</h6>
                                                        </td>
                                                        <td><a href="#!" class="label theme-bg2 text-white f-12">Rifiuta</a><a href="#!" class="label theme-bg text-white f-12">Verbalizza</a></td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td><img class="rounded-circle" style="width:40px;" src="{{asset('img/Docente.jpg')}}" alt="activity-user"></td>
                                                        <td>
                                                            <h6 class="mb-1">Joesph Tortorella</h6>
                                                            <p class="m-0">Insegnante</p>
                                                        </td>
                                                        <td>
                                                            <h6 class="text-muted f-w-300"><!--<i class="fas fa-circle text-c-green f-10 m-r-15">--></i>19 Maggio 12:56</h6>
                                                        </td>
                                                        <td><a href="#!" class="label theme-bg2 text-white f-12">Rifiuta</a><a href="#!" class="label theme-bg text-white f-12">Verbalizza</a></td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td><img class="rounded-circle" style="width:40px;" src="{{asset('img/Docente.jpg')}}" alt="activity-user"></td>
                                                        <td>
                                                            <h6 class="mb-1">Anna Sansone</h6>
                                                            <p class="m-0">Insegnante</p>
                                                        </td>
                                                        <td>
                                                            <h6 class="text-muted"><!--<i class="fas fa-circle text-c-green f-10 m-r-15">--></i>21 Giugno 12:56</h6>
                                                        </td>
                                                        <td>
                                                            <a href="#!" class="label theme-bg2 text-white f-12">Rifiuta</a>
                                                            <a href="#!" class="label theme-bg text-white f-12">Verbalizza</a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--[ Recent Users ] end-->



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
                                                <tr>
                                                    <td>
                                                        <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:30px;" src="{{asset('img/Allievo.jpg')}}" alt="activity-user">Albert Andersen</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0">1746283957</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-muted">11 Maggio 10:35</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0 text-c-yellow">In scadenza</h6>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="#!" class="label theme-bg2 text-white f-12">Aggiorna</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="m-0"><img class="rounded-circle m-r-10" style="width:30px;" src="{{asset('img/Docente.jpg')}}" alt="activity-user">Ida Jorgensen</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0">8394639365</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-muted">11 Maggio 10:35</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0 text-c-red">Scaduto</h6>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="#!" class="label theme-bg2 text-white f-12">Aggiorna</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:30px;" src="{{asset('img/Allievo.jpg')}}" alt="activity-user">Ida Jorgensen</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0">7492648395</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-muted">11 Maggio 10:35</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0 text-c-red">Scaduto</h6>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="#!" class="label theme-bg2 text-white f-12">Aggiorna</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:40px;" src="{{asset('img/Allievo.jpg')}}" alt="activity-user">Silje Larsen</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0">7392648395</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-muted">11 Maggio 10:35</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0 text-c-yellow">In scadenza</h6>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="#!" class="label theme-bg2 text-white f-12">Aggiorna</a>
                                                    </td>
                                                </tr>
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
                                                <tr>
                                                    <td>
                                                        <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:30px;" src="{{asset('img/Allievo.jpg')}}" alt="activity-user">Silje Larsen</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-muted">11 Maggio 10:35</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-muted">11 Maggio 10:35</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0 text-c-red">Scaduto</h6>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="#!" class="label theme-bg2 text-white f-12">Aggiorna</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="m-0"><img class="rounded-circle m-r-10" style="width:30px;" src="{{asset('img/Docente.jpg')}}" alt="activity-user">Ida Jorgensen</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-muted">11 Maggio 10:35</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-muted">11 Maggio 10:35</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0 text-c-yellow">In scadenza</h6>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="#!" class="label theme-bg2 text-white f-12">Aggiorna</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:30px;" src="{{asset('img/Allievo.jpg')}}" alt="activity-user">Albert Andersen</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-muted">11 Maggio 10:35</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-muted">11 Maggio 10:35</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0 text-c-red">Scaduto</h6>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="#!" class="label theme-bg2 text-white f-12">Aggiorna</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="m-0"><img class="rounded-circle  m-r-10" style="width:30px;" src="{{asset('img/Docente.jpg')}}" alt="activity-user">Ida Jorgensen</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-muted">11 Maggio 10:35</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-muted">11 Maggio 10:35</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0 text-c-yellow">In scadenza</h6>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="#!" class="label theme-bg2 text-white f-12">Aggiorna</a>
                                                    </td>
                                                </tr>
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
