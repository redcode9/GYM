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
                    id="fornitore">ISCRIZIONE FORNITORE</h1>
            </div>
        </div>

        <div class="col-12 col-lg-12">
            <div class="row mt-5">
                <h5 class="px-2"
                    style="margin-top: -0.75rem; margin-left: 3rem; color: gray; position:absolute; z-index: 2; background-color: white; font-weight: normal">
                    ANAGRAFICA
                </h5></div>
            <form action="" method="post">
                <div class="row mx-4 mb-5">
                    <div class="col-12 col-lg-12"
                         style="padding: 2rem; border: 0.1rem solid lightgray; border-radius: 5px;">

                        <div class="row mt-2">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="ragione" class="mb-0"><h5>Ragione Sociale*</h5></label>
                                    <input type="text" pattern="[a-Z]" class="form-control" name="ragione" id="ragione"
                                           value="" placeholder="es. SRL" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="tipologia" class="mb-0"><h5>Tipologia*</h5></label>
                                    <select class="custom-select" name="tipologia" id="tipologia" onchange="showAltro()"
                                            required>
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
                                        <option value="As">Assicurazione</option>
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
                            {{--                            <div class="col-12 col-lg-6 mt-3">--}}
                            {{--                                <div class="form-group">--}}
                            {{--                                    <label for="nome" class="mb-0"><h5>Nome Titolare*</h5></label>--}}
                            {{--                                    <input type="text" pattern="[a-Z]" class="form-control" name="nome" id="nome"--}}
                            {{--                                           value="" placeholder="es. Mario" required>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="col-12 col-lg-6 mt-3">--}}
                            {{--                                <div class="form-group">--}}
                            {{--                                    <label for="cognome" class="mb-0"><h5>Cognome Titolare*</h5></label>--}}
                            {{--                                    <input type="text" pattern="[a-Z]" class="form-control" name="cognome" id="cognome"--}}
                            {{--                                           value="" placeholder="es. Rossi" required>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="col-12 col-lg-12 mt-2">
                                <hr>
                            </div>
                            <div class="col-12 col-lg-12 mt-3">
                                <div class="form-group">
                                    <label for="indirizzo" class="mb-0"><h5>Indirizzo*</h5></label>
                                    <input type="text" class="form-control" name="indirizzo" id="indirizzo" value=""
                                           placeholder="es. via Abruzzo, 82" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 mt-3">
                                <div class="form-group">
                                    <label for="cap" class="mb-0"><h5>CAP*</h5></label>
                                    <input type="text" pattern="[0-9]{5}" class="form-control" name="cap" id="cap"
                                           value="" placeholder="es. 74121" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 mt-3">
                                <div class="form-group">
                                    <label for="citta" class="mb-0"><h5>Città*</h5></label>
                                    <input type="text" pattern="[a-Z]" class="form-control" name="citta" id="citta"
                                           value="" placeholder="es. Taranto" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 mt-3">
                                <div class="form-group">
                                    <label for="prov" class="mb-0"><h5>Provincia*</h5></label>
                                    <input type="text" pattern="[a-Z]{2}" class="form-control" name="prov" id="prov"
                                           value="" placeholder="es. TA" required>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-12">
                    <div class="row mt-5">
                        <h5 class="px-2"
                            style="margin-top: -0.75rem; margin-left: 2rem; color: gray; position:absolute; z-index: 2; background-color: white; font-weight: normal">
                            DETTAGLI
                        </h5></div>
                    <div class="row mx-2 mb-5">
                        <div class="col-12 col-lg-12"
                             style="padding: 2rem; border: 0.1rem solid lightgray; border-radius: 5px;">
                            <div class="row mt-2">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="cf" class="mb-0"><h5>Codice Fiscale*</h5></label>
                                        <input type="text"
                                               pattern="^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$"
                                               class="form-control" name="cf" id="cf" value=""
                                               placeholder="es. DPLNGL39B21A678U" required>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="piva" class="mb-0"><h5>Partita IVA*</h5></label>
                                        <input type="text" pattern="[a-Z]" class="form-control" name="piva" id="piva"
                                               value="" placeholder="es. IT08973230967" required>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 mt-3 mb-n2">
                                    <div class="form-group">
                                        <label for="tel" class="mb-0"><h5>Telefono / Cellulare</h5></label>
                                        <input type="tel" pattern="[0-9]{10}" class="form-control" name="tel" id="tel"
                                               value="" placeholder="es. 0995916485">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 mt-3 mb-n2">
                                    <div class="form-group">
                                        <label for="email" class="mb-0"><h5>E-mail</h5></label>
                                        <input type="email" pattern="^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}$"
                                               class="form-control" name="email" id="email" value=""
                                               placeholder="es. mario.rossi@gmail.com">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 mt-n3 ml-n2 text-right">
                    <div class="form-group">
                        <input type="submit" href="" class="btn btn-dark" style="font-size: 22px" name="continua"
                               id="continua" value="Continua">
                    </div>
                </div>
                @csrf
            </form>
        </div>
    </div>
@endsection
