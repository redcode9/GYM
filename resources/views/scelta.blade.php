@extends('base')
@section('corpo')
<div class="row">
    <div class="col-12 text-center">
        <h1 class="mt-5 p-3 border">Gestione Iscrizioni</h1>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="col-12 mt-3 ml-3" style="font-size: 1.3em;">PRIVATO</div>
                <div class="jumbotron" style="margin-top: -15px;background-color: #cdf5de">
                <div class="row">
                    <div class="col-6">
                        <div class="jumbotron mr-1 text-center" style="background-color: #13ce66;cursor: pointer" onclick="window.location.href='{{url("iscrizione")}}'">
                            <h5>
                                SOCIO
                            </h5>
                            <h6 class="mt-5">
                                Allievi
                            </h6>
                            <h6>
                                Insegnanti
                            </h6>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="jumbotron ml-1 text-center" style="background-color: #51d69a;cursor: pointer" onclick="window.location.href='{{url("iscrizionecollaboratore")}}'">
                            <h5>
                                COLLABORATORE
                            </h5>
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
            <div class="col-12 col-xl-6">
                <div class="col-12 mt-3 ml-3" style="font-size: 1.3em;">PROFESSIONISTA/AZIENDA</div>
                <div class="jumbotron" style="margin-top: -15px;background-color: #feffd7">
            <div class="row">
                <div class="col-6">
                    <div class="jumbotron mr-1 text-center" style="background-color: #f1e140">
                        <h5>
                            STAGISTA
                        </h5>
                        <h6 class="mt-5">
                            Insegnanti Esterni
                        </h6>
                        <h6>
                            Workshop
                        </h6>
                    </div>
                </div>
                <div class="col-6">
                    <div class="jumbotron ml-1 text-center" style="background-color: #ffba5c">
                        <h5>
                            FORNITORE
                        </h5>
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
</div>
@endsection
