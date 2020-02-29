@extends('templates.base', ['menu' => "on"])
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/placeholders.css') }}">
</head>
@section('corpo')
    <div class="row mt-4">

        <div class="col-12 col-lg-12">
            <div class="mx-4 text-center">
                <h1 style="padding: 1rem; border: 3px solid black; border-right: none; border-left: none; color: black"
                    id="editStagista">MODIFICA DATI ISCRITTO</h1>
            </div>
        </div>

        <div class="col-12 col-lg-12">
            <div class="row mt-5">
                <h5 class="px-2"
                    style="margin-top: -0.75rem; margin-left: 3rem; color: gray; position:absolute; z-index: 2; background-color: #f4f7fa; font-weight: normal; ">
                    ANAGRAFICA
                </h5></div>
            <form action="" method="post">
                <div class="row mx-4 mb-5">
                    <div class="col-12 col-lg-12"
                         style="padding: 2rem; border: 0.1rem solid lightgray; border-radius: 5px;">

                        <div class="row mt-2">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="nome" class="mb-0"><h5>Nome</h5></label>
                                    <input type="text" pattern="[a-Z]" class="form-control" name="nome" id="nome"
                                           value="{{$tutti->nome}}" placeholder="es. Mario" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="cognome" class="mb-0"><h5>Cognome</h5></label>
                                    <input type="text" pattern="[a-Z]" class="form-control" name="cognome" id="cognome"
                                           value="{{$tutti->cognome}}" placeholder="es. Rossi" required>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 mt-4"></div>
                            <div class="col-12 col-lg-12 mt-2"></div>

                        </div>

                    </div>
                </div>

                <div class="row col-12">
                    <div class="col-lg-6  text-left">
                        <input type="button" href="" class="btn btn-dark" style="font-size: 22px" name="annulla"
                               id="annulla" value="Annulla" onclick="window.location.href='{{route('VisualizzaTutti')}}'">
                    </div>

                    <div class="col-lg-6 text-right">
                        <div class="form-group">

                            <input type="submit" href="" class="btn btn-dark" style="font-size: 22px" name="continua"
                                   id="continua" value="Continua">
                        </div>
                    </div>
                </div>
                @csrf
            </form>
        </div>
    </div>
@endsection
