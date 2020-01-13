@extends('base')
<head>
    <script language="javascript" type="text/javascript">
        document.addEventListener("DOMContentLoaded", function visibleRole() {
            if ((document.getElementById('divruolo').style.display === "none") && (document.getElementById('collaboratore'))) {
                document.getElementById('divruolo').style.display = "block";
            }
        })
    </script>
</head>
@section('corpo')
    <div class="row mt-4">
        <div class="col-3"></div>
        <div class="col-6 text-center">
            <h2 style="padding: 1rem; border: 7px solid lightslategray; color: dimgray" id="collaboratore">
                ISCRIZIONE COLLABORATORE
            </h2>
        </div>

        <div class="col-12 col-lg-12">
            <div class="row mt-5">
                <h5 class="px-2"
                    style="margin-top: -0.75rem; margin-left: 4rem; color: dimgray; position:absolute; z-index: 2; background-color: white;">
                    ANAGRAFICA
                </h5></div>
            <form action="" method="post">
                <div class="row ml-4 mr-4 mb-5">
                    <div class="col-12 col-lg-12" style="padding: 2rem; border: 2px solid lightgray;">

                        <div class="row mt-2">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="nome" class="mb-0"><h5>Nome*</h5></label>
                                    <input type="text" pattern="[a-Z]" class="form-control" name="nome" id="nome"
                                           value="" required autofocus>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="cognome" class="mb-0"><h5>Cognome*</h5></label>
                                    <input type="text" pattern="[a-Z]" class="form-control" name="cognome" id="cognome"
                                           value="" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3">
                                <div class="form-group">
                                    <label for="sesso" class="mb-0"><h5>Sesso*</h5></label>
                                    <select class="custom-select" name="sesso" id="sesso" required>
                                        <option value="">Scegli un'opzione</option>
                                        <option value="M">Maschio</option>
                                        <option value="F">Femmina</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3"></div>
                            <div class="col-12 col-lg-12 mt-3">
                                <div class="form-group">
                                    <label for="indirizzo" class="mb-0"><h5>Indirizzo*</h5></label>
                                    <input type="text" class="form-control" name="indirizzo" id="indirizzo" value=""
                                           required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 mt-3">
                                <div class="form-group">
                                    <label for="cap" class="mb-0"><h5>CAP*</h5></label>
                                    <input type="text" pattern="[0-9]{5}" class="form-control" name="cap" id="cap"
                                           value="" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 mt-3">
                                <div class="form-group">
                                    <label for="citta" class="mb-0"><h5>Città*</h5></label>
                                    <input type="text" pattern="[a-Z]" class="form-control" name="citta" id="citta"
                                           value="" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-2 mt-3">
                                <div class="form-group">
                                    <label for="prov" class="mb-0"><h5>Provincia*</h5></label>
                                    <input type="text" pattern="[a-Z]{2}" class="form-control" name="prov" id="prov"
                                           value="" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3">
                                <div class="form-group">
                                    <label for="nascita" class="mb-0"><h5>Luogo di nascita*</h5></label>
                                    <input type="text" pattern="[a-Z]" class="form-control" name="nascita" id="nascita"
                                           value="" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3 mb-n2">
                                <div class="form-group">
                                    <label for="data" class="mb-0"><h5>Data di nascita*</h5></label>
                                    <input type="date" pattern="\d{1,2}/\d{1,2}/\d{4}" class="form-control" name="data"
                                           id="data" value="" required>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-12">
                    <div class="row mt-5">
                        <h5 class="px-2"
                            style="margin-top: -0.75rem; margin-left: 4rem; color: dimgray; position:absolute; z-index: 2; background-color: white;">
                            DETTAGLI
                        </h5></div>
                    <div class="row ml-2 mr-2 mb-5">
                        <div class="col-12 col-lg-12" style="padding: 2rem; border: 2px solid lightgray;">
                            <div class="row mt-2">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="cf" class="mb-0"><h5>Codice Fiscale*</h5></label>
                                        <input type="text"
                                               pattern="^[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]$"
                                               class="form-control" name="cf" id="cf" value="" required>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group" style="display: none" id="divruolo">
                                        <label for="ruolo" class="mb-0"><h5>Ruolo specifico</h5></label>
                                        <input type="text" pattern="[a-Z]" class="form-control" name="ruolo" id="ruolo"
                                               value="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 mt-3 mb-n2">
                                    <div class="form-group">
                                        <label for="tel" class="mb-0"><h5>Telefono / Cellulare</h5></label>
                                        <input type="tel" pattern="[0-9]{10}" class="form-control" name="tel" id="tel"
                                               value="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 mt-3 mb-n2">
                                    <div class="form-group">
                                        <label for="email" class="mb-0"><h5>E-mail</h5></label>
                                        <input type="email" pattern="^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}$"
                                               class="form-control" name="email" id="email" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 mt-n2 ml-n2 mb-3 text-right">
                    <div class="form-group">
                        <input type="button" class="btn btn-dark" style="font-size: 22px" name="continua"
                               id="continua" value="Continua">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
