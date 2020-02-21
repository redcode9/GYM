@extends('templates.base', ['menu' => "on"])
@section('corpo')
    <form action="" method="post" id="myform">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mt-5 p-3 border-dark border-top border-bottom">Seleziona il tipo di socio</h1>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 mt-5">
                        <div class="alert alert-info">
                            <strong>Nota Bene:</strong> Una volta iscritto, il socio dovrà essere verbalizzato
                            dall'admin nella sezione Dashboard.
                        </div>
                        <div class="jumbotron mt-4" style="margin-top: -15px;background-color: #cdf5de">
                            <div class="row">
                                <div class="col-6">

                                    <input type="text" class="jumbotron mr-1 text-center" id="jumbo1" value="ALLIEVO"
                                           name="allievo"
                                           style="width: 100%;background-color: #ffffff;border:#13ce66 solid 5px;border-radius: 6px;cursor: pointer"
                                           readonly
                                           onclick="turnGreenAll();toogleScelta(1);">
                                </div>
                                <div class="col-6">
                                    <input type="text" class="jumbotron ml-1 text-center" id="jumbo2" value="INSEGNANTE"
                                           name="insegnante"
                                           style="width: 100%;background-color: #ffffff;border:#13ce66 solid 5px;border-radius: 6px;cursor: pointer"
                                           readonly
                                           onclick="turnGreenIns();toogleScelta(2);">
                                </div>
                                <input type="hidden" name="scelta" id="scelta" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-12 mt-n3 ml-n2 mb-3">
            <div class="form-group text-center mt-4">
                <input type="submit" class="btn btn-dark mr-5" style="font-size: 22px; cursor: pointer;"
                       name="termina"
                       id="continua" value="Termina iscrizione" onclick="toogleIscrizione(1);return false;">
                <input type="submit" class="btn btn-dark mr-5" style="font-size: 22px; cursor: pointer;"
                       name="sceglicorso"
                       id="continua" value="Scegli corso" onclick="toogleIscrizione(2);return false;">
                <input type="hidden" name="direzione" id="direzione" value="">
            </div>
        </div>
        @csrf
    </form>
    <script>

        function turnGreenAll() {
            document.getElementById("jumbo1").style.backgroundColor = "#13ce66";
            document.getElementById("jumbo2").style.backgroundColor = "#ffffff";
        }

        function turnGreenIns() {
            document.getElementById("jumbo2").style.backgroundColor = "#13ce66";
            document.getElementById("jumbo1").style.backgroundColor = "#ffffff";
        }

        function toogleScelta(id) {
            switch (id) {
                case 1:
                    document.getElementById("scelta").value = "allievo";
                    break;
                case 2:
                    document.getElementById("scelta").value = "insegnante";
                    break;
            }
        }

        function toogleIscrizione(id) {
            event.preventDefault();
            switch (id) {
                case 1:
                    document.getElementById("direzione").value = "termina";
                    break;
                case 2:
                    document.getElementById("direzione").value = "corsi";
                    break;
            }
            $("#myform").submit();
        }
    </script>

@endsection
