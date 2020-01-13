@extends('templates.base')
@section('corpo')
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="mt-5 p-3 border border-dark">Iscrizione Socio</h1>
        </div>
        <div class="col-12 mt-5">
            <form class="mt-5 mb-5" action="" method="post">
                <div class="row">

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
                            <div class="col-12 col-lg-6"></div>
                        </div>
                    </div>


                    <div class="row col-12 mt-4">
                        <div class="col-12 col-lg-4">
                            <div class="form-group text-center">
                                <a href="{{route('iscrizione')}}"><input type="button" class="btn btn-dark" name="indietro1"
                                                                         id="indietro1" value="Indietro"></a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4"></div>
                        <div class="col-12 col-lg-4">
                            <div class="form-group text-center">
                                <a href="{{route('iscrizione3')}}"><input type="button" class="btn btn-dark" name="avanti2"
                                                                          id="avanti2" value="Avanti"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
