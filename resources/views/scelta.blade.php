@extends('templates.base', ['menu' => "on"])
@section('corpo')
    <div class="row mt-4">

        <div class="col-12 col-lg-12">
            <div class="mx-4 text-center">
                <h1 style="padding: 1rem; border: 3px solid black; border-right: none; border-left: none; color: black">
                    NUOVO UTENTE</h1>
            </div>
        </div>

        <div class="col-12">
            <div class="row mt-4 mx-n1">
                <div class="col-12 col-xl-6">
                    <div class="col-12 mt-3 ml-3" style="font-size: 1.3em;">PRIVATO</div>
                    <div class="jumbotron"
                         style="margin-top: -15px;background-color: #cdf5de; padding-bottom: 2rem!important;">
                        <div class="row">
                            <div class="col-6">
                                <div class="jumbotron text-center"
                                     style="background-color: #13ce66;cursor: pointer; padding-bottom: 3.5rem!important;"
                                     onclick="window.location.href='{{route("socio")}}'">
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
                                <div class="jumbotron text-center"
                                     style="background-color: #51d69a;cursor: pointer; padding-bottom: 3.5rem!important;"
                                     onclick="window.location.href='{{route("collaboratore")}}'">
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
                    <div class="jumbotron"
                         style="margin-top: -15px;background-color: #feffd7; padding-bottom: 2rem!important;">
                        <div class="row">
                            <div class="col-6">
                                <div class="jumbotron text-center"
                                     style="background-color: #f1e140;cursor: pointer; padding-bottom: 3.5rem!important;"
                                     onclick="window.location.href='{{route("stagista")}}'">
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
                                <div class="jumbotron text-center"
                                     style="background-color: #ffba5c;cursor: pointer; padding-bottom: 3.5rem!important;"
                                     onclick="window.location.href='{{route("fornitore")}}'">
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
