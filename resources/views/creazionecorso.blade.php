@extends('templates.base', ['menu' => "on"])
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/placeholders.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/toggleButton.css') }}">
    <script type="text/javascript" src="{{ url('js/toggleInsegnante.js') }}"></script>
</head>
@section('corpo')
    <div class="row mt-4">

        <div class="col-12 col-lg-12">
            <div class="mx-4 text-center">
                <h1 style="padding: 1rem; border: 3px solid black; border-right: none; border-left: none; color: black"
                    id="fornitore">CREAZIONE CORSO</h1>
            </div>
        </div>
        <div class="col-12 col-lg-12">
            <div class="row mt-5">
                <h5 class="px-2"
                    style="margin-top: -0.75rem; margin-left: 3rem; color: gray; position:absolute; z-index: 2; background-color: white; font-weight: normal">
                    DETTAGLI
                </h5></div>
            <form action="" method="post">
                <div class="row mx-4 mb-5">
                    <div class="col-12 col-lg-12"
                         style="padding: 2rem; border: 0.1rem solid lightgray; border-radius: 5px;">

                        <div class="row mt-2">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="nomeCorso" class="mb-0"><h5>Nome Corso*</h5></label>
                                    <input type="text" pattern="[a-Z]" class="form-control" name="nomeCorso"
                                           id="nomeCorso"
                                           value="" placeholder="es. Zumba" required>
                                </div>
                            </div>
                            <div class="col-4 col-lg-2">
                                <div class="form-group">
                                    <label for="costo" class="mb-0"><h5>Costo Orario*</h5></label>
                                    <input type="number" min="0" step="any" class="form-control" name="costo" id="costo"
                                           value="" placeholder="">
                                </div>
                            </div>
                            <div class="col-1 col-lg-1">
                                <h3 class="ml-n3" style="margin-top: 2rem">€</h3>
                            </div>
                            <div class="col-7 col-lg-3"></div>
                            <div class="col-6 col-lg-6 mt-3">
                                <div class="form-group">
                                    <label for="data_inizio" class="mb-0"><h5>Data di Inizio Corso*</h5></label>
                                    <input type="date" pattern="\d{1,2}/\d{1,2}/\d{4}" class="form-control"
                                           name="data_inizio"
                                           id="data_inizio" value="" required>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 mt-3 mb-n2">
                                <div class="form-group">
                                    <label for="data_fine" class="mb-0"><h5>Data di Fine Corso*</h5></label>
                                    <input type="date" pattern="\d{1,2}/\d{1,2}/\d{4}" class="form-control"
                                           name="data_fine"
                                           id="data_fine" value="" required>
                                </div>
                            </div>
                            <div class="col-7 col-lg-4 mt-3 mb-n2">
                                <h5>Associare un Insegnante al corso?</h5>&nbsp;
                            </div>
                            <div class="col-2 col-lg-2" style="margin: 1.15rem 0 0 -4.25rem">
                                <label class="label-switch switch-primary" style="max-height: 1rem">
                                    <input type="checkbox" class="switch switch-bootstrap flagInsegnante"
                                           onchange="toggleInsegnante()"
                                           name="flagInsegnante" id="flagInsegnante" value="">
                                    <span class="lable"></span></label>
                            </div>
                            <div class="col-3 col-lg-6"></div>
                            <div class="col-12 col-lg-12 mt-1" id="divInsegnante">
                                <div class="form-group">
                                    <select class="custom-select" name="insegnante" id="insegnante"
                                            required>
                                        <option value="" disabled selected hidden>Scegli un insegnante</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <hr>
                            </div>
                            <div class="col-12 col-lg-12 mt-3">
                                <div class="form-group">
                                    <label for="sala" class="mb-0"><h5>Sala*</h5></label>
                                    <select class="custom-select" name="sala" id="sala"
                                            required>
                                        <option value="" disabled selected hidden>Scegli un'opzione</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-hover table-bordered table-striped js-sort-table text-center">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="cursor: pointer">Lunedì</th>
                                    <th scope="col" style="cursor: pointer">Martedì</th>
                                    <th scope="col" style="cursor: pointer">Mercoledì</th>
                                    <th scope="col" style="cursor: pointer">Giovedì</th>
                                    <th scope="col" style="cursor: pointer">Venerdì</th>
                                    <th scope="col" style="cursor: pointer">Sabato</th>
                                    <th scope="col" style="cursor: pointer">Domenica</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>7:00 - 8:00</td>
                                    <td>7:00 - 8:00</td>
                                    <td>7:00 - 8:00</td>
                                    <td>7:00 - 8:00</td>
                                    <td>7:00 - 8:00</td>
                                    <td>7:00 - 8:00</td>
                                    <td>7:00 - 8:00</td>
                                </tr>
                                <tr>
                                    <td>8:00 - 9:00</td>
                                    <td>8:00 - 9:00</td>
                                    <td>8:00 - 9:00</td>
                                    <td>8:00 - 9:00</td>
                                    <td>8:00 - 9:00</td>
                                    <td>8:00 - 9:00</td>
                                    <td>8:00 - 9:00</td>
                                </tr>
                                <tr>
                                    <td>9:00 - 10:00</td>
                                    <td>9:00 - 10:00</td>
                                    <td>9:00 - 10:00</td>
                                    <td>9:00 - 10:00</td>
                                    <td>9:00 - 10:00</td>
                                    <td>9:00 - 10:00</td>
                                    <td>9:00 - 10:00</td>
                                </tr>
                                <tr>
                                    <td>10:00 - 11:00</td>
                                    <td>10:00 - 11:00</td>
                                    <td>10:00 - 11:00</td>
                                    <td>10:00 - 11:00</td>
                                    <td>10:00 - 11:00</td>
                                    <td>10:00 - 11:00</td>
                                    <td>10:00 - 11:00</td>
                                </tr>
                                <tr>
                                    <td>11:00 - 12:00</td>
                                    <td>11:00 - 12:00</td>
                                    <td>11:00 - 12:00</td>
                                    <td>11:00 - 12:00</td>
                                    <td>11:00 - 12:00</td>
                                    <td>11:00 - 12:00</td>
                                    <td>11:00 - 12:00</td>
                                </tr>
                                <tr>
                                    <td>12:00 - 13:00</td>
                                    <td>12:00 - 13:00</td>
                                    <td>12:00 - 13:00</td>
                                    <td>12:00 - 13:00</td>
                                    <td>12:00 - 13:00</td>
                                    <td>12:00 - 13:00</td>
                                    <td>12:00 - 13:00</td>
                                </tr>
                                <tr>
                                    <td>13:00 - 14:00</td>
                                    <td>13:00 - 14:00</td>
                                    <td>13:00 - 14:00</td>
                                    <td>13:00 - 14:00</td>
                                    <td>13:00 - 14:00</td>
                                    <td>13:00 - 14:00</td>
                                    <td>13:00 - 14:00</td>
                                </tr>
                                <tr>
                                    <td>14:00 - 15:00</td>
                                    <td>14:00 - 15:00</td>
                                    <td>14:00 - 15:00</td>
                                    <td>14:00 - 15:00</td>
                                    <td>14:00 - 15:00</td>
                                    <td>14:00 - 15:00</td>
                                    <td>14:00 - 15:00</td>
                                </tr>
                                <tr>
                                    <td>15:00 - 16:00</td>
                                    <td>15:00 - 16:00</td>
                                    <td>15:00 - 16:00</td>
                                    <td>15:00 - 16:00</td>
                                    <td>15:00 - 16:00</td>
                                    <td>15:00 - 16:00</td>
                                    <td>15:00 - 16:00</td>
                                </tr>
                                <tr>
                                    <td>16:00 - 17:00</td>
                                    <td>16:00 - 17:00</td>
                                    <td>16:00 - 17:00</td>
                                    <td>16:00 - 17:00</td>
                                    <td>16:00 - 17:00</td>
                                    <td>16:00 - 17:00</td>
                                    <td>16:00 - 17:00</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-12 col-lg-12 mt-n3 ml-n2 text-right">
                        <div class="form-group">
                            <input type="submit" href="" class="btn btn-dark" style="font-size: 22px" name="termina"
                                   id="termina" value="Termina">
                        </div>
                    </div>
                </div>
                @csrf
            </form>
        </div>

    </div>
@endsection
