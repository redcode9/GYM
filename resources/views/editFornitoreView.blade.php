@extends('templates.base', ['menu' => "on"])
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/placeholders.css') }}">
    <script type="text/javascript" src="{{ url('js/showAltro.js') }}"></script>
</head>
@section('corpo')
    <div class="row mt-4">

        <div class="col-12 col-lg-12">
            <div class="mx-4 text-center">
                <h1 style="padding: 1rem; border: 3px solid black; border-right: none; border-left: none; color: black"
                    id="fornitore">MODIFICA DATI FORNITORE</h1>
            </div>
        </div>

        <div class="col-12 col-lg-12">
            <div class="row mt-5">
                <h5 class="px-2"
                    style="margin-top: -0.75rem; margin-left: 3rem; color: gray; position:absolute; z-index: 2; background-color: white; font-weight: normal">
                    ANAGRAFICA
                </h5></div>
            <form action="" method="POST">
                <div class="row mx-4 mb-5">
                    <div class="col-12 col-lg-12"
                         style="padding: 2rem; border: 0.1rem solid lightgray; border-radius: 5px;">

                        <div class="row mt-2">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="ragione" class="mb-0"><h5>Ragione Sociale</h5></label>
                                    <input type="text" pattern="[a-Z]" class="form-control" name="ragione" id="ragione"
                                           value="{{$forn->rag_sociale}}" placeholder="es. SRL">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="tipologia" class="mb-0"><h5>Tipologia</h5></label>
                                    <select class="custom-select" name="tipologia" id="tipologia" onchange="showAltro()" required>
                                        <option value="" disabled selected hidden>Scegli un'opzione</option>
                                        <option value="Ge">Generico</option>
                                        <option value="Af">Affitto</option>
                                        <option value="En">Energia</option>
                                        <option value="Ga">Gas</option>
                                        <option value="Ac">Acqua</option>
                                        <option value="Co">Consumi</option>
                                        <option value="Ab">Abbigliamento</option>
                                        <option value="Pu">Pubblicità</option>
                                        <option value="Ca">Cancelleria</option>
                                        <option value="At">Assistenza</option>
                                        <option value="Cm">Commercialista</option>
                                        <option value="Ass">Assicurazione</option>
                                        <option value="Pl">Pulizie</option>
                                        <option value="Al">Altro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6"></div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group my-3" id="divAltro" style="display: none;">
                                    <label for="altro"></label>
                                    <input type="text" pattern="[a-Z]" class="form-control" name="altro" id="altro"
                                           value="" placeholder="Specificare Tipologia*" required>
                                </div>
                            </div>

                            <div class="col-12 col-lg-12 mt-2">
                                <hr>
                            </div>
                            <div class="col-12 col-lg-12 mt-3"></div>
                            <div class="col-12 col-lg-2 mt-3"></div>
                        </div>

                    </div>
                </div>



<div class="row col-12">
                <div class="col-lg-6  text-left">
                    <input type="button" href="" class="btn btn-dark" style="font-size: 22px" name="annulla"
                           id="annulla" value="Annulla" onclick="window.location.href='{{route('GestioneFornitori')}}'">
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
