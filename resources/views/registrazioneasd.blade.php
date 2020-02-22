@extends('templates.base', ['menu' => "off"])
@section('corpo')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div>
                    <p style="text-align: center"><img style="width: 37%;margin-left:-1.5rem" src="{{asset('img/logo_gym3.png')}}" alt="Logo">
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-12">
            <div class="mx-4 text-center">
                <h1 style="padding: 1rem; border: 3px solid black; border-right: none; border-left: none; color: black"
                    id="fornitore">REGISTRAZIONE ASSOCIAZIONE</h1>
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
                                    <label for="nome" class="mb-0"><h5>Nome*</h5></label>
                                    <input type="text" pattern="[a-Z]" class="form-control" name="nome" id="nome"
                                           value="" placeholder="es. GYM" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="iban" class="mb-0"><h5>IBAN*</h5></label>
                                    <input type="text" pattern="[a-Z]" class="form-control" name="iban" id="iban"
                                           value="" placeholder="es. IT60X0542811101000000123456" required>
                                </div>
                            </div>
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
                                        <label for="piva" class="mb-0"><h5>Partita IVA*</h5></label>
                                        <input type="text" pattern="[a-Z]" class="form-control" name="piva" id="piva"
                                               value="" placeholder="es. IT08973230967" required>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6"></div>
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
                <div class="col-12 col-lg-12 mt-n3">
                    <div class="form-group float-left">
                        <input type="button" onclick="window.location.replace('{{route('login')}}')" class="btn btn-dark" style="font-size: 22px" name="annulla"
                               id="annulla" value="Annulla">
                    </div>
                    <div class="form-group float-right">
                        <input type="submit" href="" class="btn btn-dark" style="font-size: 22px" name="continua"
                               id="continua" value="Continua">
                    </div>
                </div>
                @csrf
            </form>
        </div>
    </div>
@endsection
