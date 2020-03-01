@extends('templates.base', ['menu' => "on"])
@section('corpo')
    <div class="row mt-4">

        <div class="col-12 col-lg-12">
            <div class="mx-4 text-center">
                <h1 style="padding: 1rem; border: 3px solid black; border-right: none; border-left: none; color: black"
                    id="fornitore">GESTIONE CORSI</h1>
            </div>
        </div>
        <div class="col-12 col-lg-12 mt-4"></div>

        <div class="col-0 col-lg-2"></div>
        <div class="col-12 col-lg-8">
            @foreach($sale as $sala)
                @foreach($sala->disciplina as $disciplina)
                    <div class="col-12 ml-n2"
                         style="font-weight: bold; background-color: #f4f7fa; width: 40%; border-radius: 10px; text-align: center; text-transform: uppercase">
                        <h4 style="margin: 0;padding-bottom: 0.05rem;font-size: 1.5rem;">
                            {{$disciplina->nome}}
                        </h4>
                    </div>
                    <div class="jumbotron" style="margin-top: -2.2rem;background-color: #cdf5de">

                        <div class="row">
                            @foreach($disciplina->corsi as $corso)
                                <div class="col-12 col-md-6 col-xl-4">

                                    <div class="jumbotron mr-1 text-center mb-n1"
                                         style="background-color: #13ce66; text-transform: uppercase; cursor: pointer"
                                         onclick="window.location.href='{{route('corso',["id"=>$corso->id])}}'">
                                        <h5 class="py-3">
                                            {{$corso->nome}}
                                        </h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
        <div class="col-0 col-lg-2"></div>
    </div>
@endsection

