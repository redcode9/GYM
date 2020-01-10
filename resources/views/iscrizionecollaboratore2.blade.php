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
                    DETTAGLI
                </h5></div>
            <form action="" method="post">
                <div class="row ml-4 mr-4 mb-5">
                    <div class="col-12 col-lg-12" style="padding: 2rem; border: 2px solid lightgray;">
                        <div class="row mt-2">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="cf" class="mb-0"><h5>Codice Fiscale</h5></label>
                                    <input type="text" class="form-control" name="cf" id="cf" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="tel" class="mb-0"><h5>Cellulare</h5></label>
                                    <input type="text" class="form-control" name="tel" id="tel" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3 mb-n2">
                                <div class="form-group">
                                    <label for="email" class="mb-0"><h5>Email</h5></label>
                                    <input type="text" class="form-control" name="email" id="email" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <h5 class="px-2"
                        style="margin-top: -0.75rem; margin-left: 4rem; color: dimgray; position:absolute; z-index: 2; background-color: white;">
                        ASSICURAZIONE
                    </h5></div>
                <div class="row ml-4 mr-4 mb-5 mt-n5">
                    <div class="col-12 col-lg-12 mt-5" style="padding: 2rem; border: 2px solid lightgray;">
                        <div class="row mt-2">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="data1" class="mb-0"><h5>Data Stipula</h5></label>
                                    <input type="text" class="form-control" name="data1" id="data1" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="numero" class="mb-0"><h5>Numero</h5></label>
                                    <input type="text" class="form-control" name="numero" id="numero" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3 mb-n2">
                                <div class="form-group">
                                    <label for="scadenza" class="mb-0"><h5>Data Scadenza</h5></label>
                                    <input type="text" class="form-control" name="scadenza" id="scadenza" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <h5 class="px-2"
                        style="margin-top: -0.75rem; margin-left: 4rem; color: dimgray; position:absolute; z-index: 2; background-color: white;">
                        CERTIFICATO MEDICO
                    </h5></div>
                <div class="row ml-4 mr-4 mb-5 mt-n5">
                    <div class="col-12 col-lg-12 mt-5" style="padding: 2rem; border: 2px solid lightgray;">
                        <div class="row mt-2">
                            <div class="col-12 col-lg-6 mb-n2">
                                <div class="form-group">
                                    <label for="data2" class="mb-0"><h5>Data Rilascio</h5></label>
                                    <input type="text" class="form-control" name="data2" id="data2" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-n2">
                                <div class="form-group">
                                    <label for="scadenza2" class="mb-0"><h5>Data Scadenza</h5></label>
                                    <input type="text" class="form-control" name="scadenza2" id="scadenza2" value="">
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
