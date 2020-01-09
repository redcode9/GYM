@extends('base')
@section('corpo')
<div class="row mt-5">
    <div class="col-12 text-center">
        <h1 class="mt-5 p-3 border border-dark">Gestione Corsi</h1>
    </div>
    <div class="col-0 col-lg-2"></div>
    <div class="col-12 col-lg-8">
        <button class="btn btn-dark float-right ml-3">Modifica</button>
        <button class="btn btn-dark float-right mr-3">Aggiungi</button>

    </div>
    <div class="col-0 col-lg-2"></div>
    <div class="col-0 col-lg-2"></div>
    <div class="col-12 col-lg-8">
        <div class="col-12 ml-3" style="font-size: 1.3em;">PISCINA</div>
        <div class="jumbotron" style="margin-top: -15px;background-color: #cdf5de">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="jumbotron mr-1 text-center" style="background-color: #13ce66; cursor: pointer" onclick="window.location.href='{{route('corso')}}'">
                        <h5>
                            NUOTO
                        </h5>
                        <h6 class="mt-5">
                            Principianti
                        </h6>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="jumbotron ml-1 mr-1 text-center" style="background-color: #51d69a; cursor: pointer" onclick="window.location.href='{{route('corso')}}'">
                        <h5>
                            NUOTO
                        </h5>
                        <h6 class="mt-5">
                            Intermedio
                        </h6>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="jumbotron ml-1 text-center" style="background-color: #51d69a; cursor: pointer" onclick="window.location.href='{{route('corso')}}'">
                        <h5>
                            NUOTO
                        </h5>
                        <h6 class="mt-5">
                            Agonistico
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-3 ml-3" style="font-size: 1.3em;">SALA PESI</div>
        <div class="jumbotron" style="margin-top: -15px;background-color: #feffd7">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="jumbotron mr-1 text-center" style="background-color: #f1e140; cursor: pointer" onclick="window.location.href='{{route('corso')}}'">
                        <h5>
                            BODY BUILDING
                        </h5>
                        <h6 class="mt-5">
                            Personal Coaching
                        </h6>
                        <h6>
                            Sottotitolo 1
                        </h6>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="jumbotron ml-1 text-center" style="background-color: #ffba5c; cursor: pointer" onclick="window.location.href='{{route('corso')}}'">
                        <h5>
                            WEIGHT LIFTING
                        </h5>
                        <h6 class="mt-5">
                            Power Lifting
                        </h6>
                        <h6>
                            Sottotitolo 1
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-3 ml-3" style="font-size: 1.3em;">Nuova Sala</div>
        <div class="border text-center mb-5" style="margin-top: -15px;font-size: 100px">
            +
        </div>
    </div>
    <div class="col-0 col-lg-2"></div>
</div>
@endsection
