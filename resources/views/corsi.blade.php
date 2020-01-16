@extends('templates.base')
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
        @foreach($sale as $sala)
            <div class="col-12 ml-3" style="font-size: 1.3em;">{{$sala->nome}}</div>
            <div class="jumbotron" style="margin-top: -15px;background-color: #cdf5de">
                @foreach($sala->disciplina as $disciplina)
                <div class="row">
                    @foreach($disciplina->corsi as $corso)
                    <div class="col-12 col-md-6 col-xl-4">

                        <div class="jumbotron mr-1 text-center" style="background-color: #13ce66; cursor: pointer" onclick="window.location.href='{{route('corso',["id"=>$corso->id])}}'">
                            <h5>
                                {{$disciplina->nome}}
                            </h5>
                            <h6 class="mt-5">
                                {{$corso->nome}}
                            </h6>
                        </div>

                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>Gestione Corso
        @endforeach

    </div>
    <div class="col-0 col-lg-2"></div>
</div>
@endsection
