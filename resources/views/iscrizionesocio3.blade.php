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
                        <h2>TESSERAMENTO</h2>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="data"><h5>Data Tesseramento</h5></label>
                                        <input type="text" class="form-control" name="data" id="data" value="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="numero"><h5>Numero Tessera</h5></label>
                                        <input type="text" class="form-control" name="numero" id="numero" value="">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="scadenza"><h5>Scadenza</h5></label>
                                        <input type="text" class="form-control" name="scadenza" id="scadenza" value="">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-0 col-lg-1"></div>

                    <div class="col-0 col-lg-1"></div>
                    <div class="col-12 col-lg-10 border p-5 mt-5">
                        <h2>DATI FISCALI</h2>

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="data1"><h5>Rilascio Documento</h5></label>
                                    <input type="radio" class="form-control" name="rilascio" id="rilascio" value="1">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="tipodoc"><h5>Tipo Documento</h5></label>
                                    <select class="custom-select" id="tipodoc" name="tipodoc">
                                        <option value="0">Seleziona Una voce</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="numerodoc"><h5>Numero Documento</h5></label>
                                    <input type="text" class="form-control" name="numerodoc" id="numerodoc" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="importo"><h5>&nbsp</h5></label><br>
                                    <label for="importo"><h5>Importo iscrizione 10</h5></label>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="descrizione"><h5>Descrizione</h5></label>
                                    <textarea class="form-control" name="descrizione" id="descrizione" style="resize: none" rows="4">

                                    </textarea>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="pagamento"><h5>Modalità Pagamento</h5></label>
                                    <select class="custom-select" id="pagamento" name="pagamento">
                                        <option value="0">Seleziona Una voce</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <input type="submit" class="btn btn-dark" name="salva" id="salva" value="Scarica Moduli">
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
