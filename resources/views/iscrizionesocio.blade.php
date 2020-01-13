@extends('base')
@section('corpo')
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="mt-5 p-3 border border-dark ">Iscrizione Socio</h1>
        </div>
        <div class="col-12 mt-5 mb-5">
            <div class="row">
                <div class="col-0 col-lg-1"></div>
                <div class="col-12 col-lg-10 border p-5">
                    <h2>Anagrafica</h2>
                    <form class="mt-5" action="" method="post">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="nome"><h5>Nome</h5></label>
                                    <input type="text" class="form-control" name="nome" id="nome" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="cognome"><h5>Cognome</h5></label>
                                    <input type="text" class="form-control" name="cognome" id="cognome" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="indirizzo"><h5>Indirizzo</h5></label>
                                    <input type="text" class="form-control" name="indirizzo" id="indirizzo" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="cap"><h5>CAP</h5></label>
                                    <input type="text" class="form-control" name="cap" id="cap" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="citta"><h5>Città</h5></label>
                                    <input type="text" class="form-control" name="citta" id="citta" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="prov"><h5>Provincia</h5></label>
                                    <input type="text" class="form-control" name="prov" id="prov" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="sesso"><h5>Sesso</h5></label>
                                    <select class="custom-select" name="sesso" id="sesso">
                                        <option value="0">Scegli un'opzione</option>
                                        <option value="M">Maschio</option>
                                        <option value="F">Femmina</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="nascita"><h5>Luogo nascita</h5></label>
                                    <input type="text" class="form-control" name="nascita" id="nascita" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="data"><h5>Data nascita</h5></label>
                                    <input type="text" class="form-control" name="data" id="data" value="">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 mt-5 mb-5">
                    <div class="row">
                        <div class="col-0 col-lg-1"></div>

                        <div class="col-12 col-lg-10 border p-5">
                            <h2>Dettagli</h2>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="cf"><h5>Codice Fiscale</h5></label>
                                        <input type="text" class="form-control" name="cf" id="cf" value="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="tel"><h5>Cellulare</h5></label>
                                        <input type="text" class="form-control" name="tel" id="tel" value="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="email"><h5>Email</h5></label>
                                        <input type="text" class="form-control" name="email" id="email" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12 col-lg-5"></div>
                <div class="col-12 col-lg-5"></div>
                <div class="col-12 col-lg-2">
                    <div class="form-group">
                        <a href="{{route('iscrizione2')}}"><input type="submit" class="btn btn-dark" name="avanti1"
                                                                  id="avanti1" value="Avanti"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
