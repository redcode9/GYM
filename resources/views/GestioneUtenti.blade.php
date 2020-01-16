@extends('templates.base')
@section('corpo')
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="mt-5 p-3 border">Gestione Utenti</h1>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-xl-6">
                    <div class="col-12 mt-3 ml-3" style="font-size: 1.1em;">PRIVATO</div>
                    <div class="jumbotron" style="margin-top: -15px;background-color: #cdf5de">
                        <div class="row">
                            <div class="col-6">
                                <div class="jumbotron mr-1 text-center"
                                     style="background-color: #13ce66;cursor: pointer"
                                     onclick="window.location.href='{{route("GestioneSoci")}}'">
                                    <h5>
                                        SOCIO
                                    </h5>
                                    <div class="under_category">
                                    <h6 class="mt-5">
                                        Allievi
                                    </h6>
                                    <h6>
                                        Insegnanti
                                    </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="jumbotron ml-1 text-center"
                                     style="background-color: #51d69a;cursor: pointer"
                                     onclick="window.location.href='{{route("GestioneCollaboratori")}}'">
                                    <h5>
                                        COLLABORATORE
                                    </h5>
                                    <div class="under_category">
                                    <h6 class="mt-5">
                                        Pulizia
                                    </h6>
                                    <h6>
                                        Manutentore
                                    </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="col-12 mt-3 ml-3" style="font-size: 1.1em;">PROFESSIONISTA/AZIENDA</div>
                    <div class="jumbotron" style="margin-top: -15px;background-color: #feffd7">
                        <div class="row">
                            <div class="col-6">
                                <div class="jumbotron mr-1 text-center" style="background-color: #f1e140;cursor: pointer"
                                     onclick="window.location.href='{{route("GestioneStagisti")}}'">
                                    <h5>
                                        STAGISTA
                                    </h5>
                                    <div class="under_category">
                                    <h6 class="mt-5">
                                        Insegnanti Esterni
                                    </h6>
                                    <h6>
                                        Workshop
                                    </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="jumbotron ml-1 text-center" style="background-color: #ffba5c;cursor: pointer"
                                     onclick="window.location.href='{{route("GestioneFornitori")}}'">
                                    <h5>
                                        FORNITORE
                                    </h5>
                                    <div class="under_category">
                                    <h6 class="mt-5">
                                        Gas e Luce
                                    </h6>
                                    <h6>
                                        Affitto
                                    </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border text-center mb-5" style="margin-top: -15px;font-size: 30px ;cursor:pointer" onclick="window.location.href='{{route('VisualizzaTutti')}}'">
                Visualizza Tutti
            </div>
            <div class="col-0 col-lg-2"></div>
        </div>
    </div>
    @endsection
