<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/placeholders.css') }}">
</head>
<body>
<div class="row mt-4">

    <div class="col-12 col-lg-12">
        <div class="mx-4 text-center">
            <h1 style="padding: 1rem; border: 3px solid black; border-right: none; border-left: none; color: black"
                id="{{ $idTitle }}">{{ $title }}</h1>
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
                                <label for="nome" class="mb-0"><h5>Nome*</h5></label>
                                <input type="text" pattern="[a-Z]" class="form-control" name="nome" id="nome"
                                       value="" placeholder="es. Mario" required>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="cognome" class="mb-0"><h5>Cognome*</h5></label>
                                <input type="text" pattern="[a-Z]" class="form-control" name="cognome" id="cognome"
                                       value="" placeholder="es. Rossi" required>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mt-3">
                            <div class="form-group">
                                <label for="sesso" class="mb-0"><h5>Sesso*</h5></label>
                                <select class="custom-select" name="sesso" id="sesso" required>
                                    <option value="" disabled selected hidden>Scegli un'opzione</option>
                                    <option value="M">Maschio</option>
                                    <option value="F">Femmina</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mt-4"></div>
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
                        <div class="col-12 col-lg-6 mt-3">
                            <div class="form-group">
                                <label for="nascita" class="mb-0"><h5>Luogo di nascita*</h5></label>
                                <input type="text" pattern="[a-Z]" class="form-control" name="nascita" id="nascita"
                                       value="" placeholder="es. Manduria (TA)" required>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mt-3 mb-n2">
                            <div class="form-group">
                                <label for="data" class="mb-0"><h5>Data di nascita*</h5></label>
                                <input type="date" pattern="\d{4}/\d{1,2}/\d{1,2}" class="form-control" name="data"
                                       id="data" value="" required>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 col-lg-12">
                <div class="row mt-5">
                    <h5 class="px-2"
                        style="margin-top: -0.75rem; margin-left: 2rem; color: gray; position:absolute; z-index: 2; background-color: #f4f7fa; font-weight: normal;">
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

                            @if ($idTitle === "socio")
                                <div class="col-12 col-lg-6">
                                    <label for="tipoSocio"><h5>Tipologia Socio*</h5></label>
                                    <div class="row">
                                        <div class="col-2 col-lg-2">
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input" name="tipoSocio"
                                                       id="allievo" value="option1" required>
                                                <label for="allievo" class="form-check-label" style="font-size: 1.1rem">Allievo</label>
                                            </div>
                                        </div>
                                        <div class="col-2 col-lg-2">
                                            <div class="form-check form-check-inline ml-2">
                                                <input type="radio" class="form-check-input" name="tipoSocio"
                                                       id="insegnante" value="option2" required>
                                                <label for="insegnante" class="form-check-label"
                                                       style="font-size: 1.1rem">Insegnante</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif ($idTitle === "collaboratore")
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="ruolo" class="mb-0"><h5>Ruolo specifico</h5></label>
                                        <input type="text" pattern="[a-Z]" class="form-control" name="ruolo" id="ruolo"
                                               value="" placeholder="es. Manutentore">
                                    </div>
                                </div>
                            @elseif ($idTitle === "segreteria")
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="ruolo" class="mb-0"><h5>Ruolo specifico</h5></label>
                                        <input type="text" pattern="[a-Z]" class="form-control" name="ruolo" id="ruolo"
                                               value="Collaboratore" readonly>
                                    </div>
                                </div>
                            @elseif ( $idTitle === "stagista")
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="piva" class="mb-0"><h5>Partita IVA*</h5></label>
                                        <input type="text" pattern="[a-Z]" class="form-control" name="piva" id="piva"
                                               value="" placeholder="es. IT08973230967" required>
                                    </div>
                                </div>
                            @else
                                <div class="col-12 col-lg-6"></div>
                            @endif

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
                    <input type="submit" class="btn btn-dark" style="font-size: 22px" name="continua"
                           id="continua" value="Continua">
                </div>
            </div>
            @csrf
        </form>
    </div>
</div>
</body>
