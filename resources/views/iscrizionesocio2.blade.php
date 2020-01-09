@extends('base')
@section('corpo')
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="mt-5 p-3 border border-dark">Iscrizione Socio</h1>
        </div>
        <div class="col-12 mt-5">
            <form class="mt-5 mb-5" action="" method="post">
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
                    <div class="col-0 col-lg-1"></div>

                    <div class="col-0 col-lg-1"></div>
                    <div class="col-12 col-lg-10 border p-5 mt-5">
                        <h2>Assicurazione</h2>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="data1"><h5>Data Stipula</h5></label>
                                    <input type="text" class="form-control" name="data1" id="data1" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="numero"><h5>Numero</h5></label>
                                    <input type="text" class="form-control" name="numero" id="numero" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="scadenza"><h5>Data Scadenza</h5></label>
                                    <input type="text" class="form-control" name="scadenza" id="scadenza" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-0 col-lg-1"></div>

                    <div class="col-0 col-lg-1"></div>
                    <div class="col-12 col-lg-10 border p-5 mt-5">
                        <h2>Certificato Medico</h2>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="data2"><h5>Data Rilascio</h5></label>
                                    <input type="text" class="form-control" name="data2" id="data2" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="scadenza2"><h5>Data Scadenza</h5></label>
                                    <input type="text" class="form-control" name="scadenza2" id="scadenza2" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                   <input type="submit" class="btn btn-dark" name="salva" id="salva" value="Salva">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-0 col-lg-1"></div>
                </div>
            </form>
        </div>
    </div>
@endsection
