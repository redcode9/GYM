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
                            <div class="col-12 col-lg-6 form-group">
                                    <div>
                                        <label for="rilascio"><h5>Rilascio Documento:</h5></label>
                                        <input type="checkbox" onclick="showTipoDoc()" name="rilascio"
                                               id="rilascio" style="width: 22px; height: 22px; display:inline-block;
                                               margin-left: 2em;">
                                    </div>

                                    <div id="selTipoDoc" style="display: none">
                                        <select class="custom-select" id="tipodoc" name="tipodoc">
                                            <option value="0">Seleziona tipo documento</option>
                                            <option value="R">Ricevuta</option>
                                            <option value="RN">Ricevuta numerata</option>
                                            <option value="RF">Ricevuta fiscale</option>
                                            <option value="FA">Fattura</option>
                                        </select>
                                    </div>

                            </div>



                            <div class="col-12 col-lg-6">
                                <div class="form-group" style="margin-top: 2px">
                                    <label for="numerodoc"><h5>Numero Documento</h5></label>
                                    <input type="text" class="form-control" name="numerodoc" id="numerodoc" value="">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="importo"><h5>&nbsp</h5></label><br>
                                    <label for="importo"><h5>Importo iscrizione: 10&#x20ac</h5></label>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="descrizione"><h5>Descrizione</h5></label>
                                    <textarea class="form-control" name="descrizione" id="descrizione"
                                              style="resize: none" rows="4">

                                    </textarea>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="pagamento"><h5>Modalità Pagamento</h5></label>
                                    <select class="custom-select" id="pagamento" name="pagamento">
                                        <option value="0">Seleziona una voce</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row col-12 mt-4">
                        <div class="col-12 col-lg-4">
                            <div class="form-group text-center">
                                <a href="{{route('iscrizione2')}}"><input type="button" class="btn btn-dark"
                                                                          name="indietro2"
                                                                          id="indietro2" value="Indietro"></a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4"></div>
                        <div class="col-12 col-lg-4">
                            <div class="form-group text-center">
                                <a href="{{route('corsi')}}"><input type="button" class="btn btn-dark" name="avanti2"
                                                                    id="avanti2" value="Scegli corso"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

<script>

    function showTipoDoc() {
        var checkBox = document.getElementById("rilascio");
        var tipoDoc = document.getElementById("selTipoDoc");
        if (checkBox.checked == true){
            tipoDoc.style.display = "block";
        } else {
            tipoDoc.style.display = "none";
        }
    }
</script>

@endsection
