@extends('base')
@section('corpo')
    <div class="row mt-4">
        <div class="col-3"></div>
        <div class="col-6 text-center">
            <h2 style="padding: 1rem; border: 7px solid lightslategray; color: dimgray">
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
                                    <label for="nome" class="mb-0"><h5>Nome</h5></label>
                                    <input type="text" class="form-control" name="nome" id="nome" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="cognome" class="mb-0"><h5>Cognome</h5></label>
                                    <input type="text" class="form-control" name="cognome" id="cognome" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3">
                                <div class="form-group">
                                    <label for="indirizzo" class="mb-0"><h5>Indirizzo</h5></label>
                                    <input type="text" class="form-control" name="indirizzo" id="indirizzo" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3">
                                <div class="form-group">
                                    <label for="cap" class="mb-0"><h5>CAP</h5></label>
                                    <input type="text" class="form-control" name="cap" id="cap" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3">
                                <div class="form-group">
                                    <label for="citta" class="mb-0"><h5>Città</h5></label>
                                    <input type="text" class="form-control" name="citta" id="citta" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3">
                                <div class="form-group">
                                    <label for="prov" class="mb-0"><h5>Provincia</h5></label>
                                    <input type="text" class="form-control" name="prov" id="prov" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3">
                                <div class="form-group">
                                    <label for="sesso" class="mb-0"><h5>Sesso</h5></label>
                                    <select class="custom-select" name="sesso" id="sesso">
                                        <option value="0">Scegli un'opzione</option>
                                        <option value="M">Maschio</option>
                                        <option value="F">Femmina</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3">
                                <div class="form-group">
                                    <label for="nascita" class="mb-0"><h5>Luogo di nascita</h5></label>
                                    <input type="text" class="form-control" name="nascita" id="nascita" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3">
                                <div class="form-group">
                                    <label for="data" class="mb-0"><h5>Data di nascita</h5></label>
                                    <input type="text" class="form-control" name="data" id="data" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3">
                                <div class="form-group">
                                    <label for="ruolo" class="mb-0"><h5>Scelta Altro Ruolo</h5></label>
                                    <input type="text" class="form-control" name="ruolo" id="ruolo" value="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-12 mt-n2 ml-n2 mb-3 text-right">
                    <div class="form-group">
                        <input type="submit" class="btn btn-dark" style="font-size: 22px" name="continua"
                               id="continua" value="Continua">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
