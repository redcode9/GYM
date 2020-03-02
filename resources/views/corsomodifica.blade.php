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
                    id="fornitore">MODIFICA CORSO</h1>
            </div>
        </div>
        <div class="col-12 col-lg-12">
            <div class="row mt-5">
                <h5 class="px-2"
                    style="margin-top: -0.75rem; margin-left: 3rem; color: gray; position:absolute; z-index: 2; background-color: #f4f7fa; font-weight: normal">
                    DETTAGLI
                </h5></div>
            <form id="form_corso" name="form_corso" action="" method="post">
                <div class="row mx-4 mb-5">
                    <div class="col-12 col-lg-12"
                         style="padding: 2rem; border: 0.1rem solid lightgray; border-radius: 5px;">
                        <div class="row mt-2">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="nomeCorso" class="mb-0"><h5>Nome Corso*</h5></label>
                                    <input type="text" pattern="[a-Z]" class="form-control" name="nomeCorso"
                                           id="nomeCorso"
                                           value="{{$corso->nome}}" required>
                                </div>
                            </div>
                            <div class="col-4 col-lg-2">
                                <div class="form-group">
                                    <label for="costo" class="mb-0"><h5>Costo Corso*</h5></label>
                                    <input type="number" min="0" step="any" class="form-control" name="costo" id="costo"
                                           value="{{$corso->costo}}" required>
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
                                           id="data_inizio" value="{{$corso->data_inizio}}" required>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 mt-3 mb-n2">
                                <div class="form-group">
                                    <label for="data_fine" class="mb-0"><h5>Data di Fine Corso*</h5></label>
                                    <input type="date" pattern="\d{1,2}/\d{1,2}/\d{4}" class="form-control"
                                           name="data_fine"
                                           id="data_fine" value="{{$corso->data_fine}}" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <hr>
                            </div>
                            {{--<div class="col-12 col-lg-12 mt-3">
                                <div class="form-group">
                                    <label for="sala" class="mb-0"><h5>Sala*</h5></label>
                                    <select class="custom-select" name="sala" id="sala"
                                            required>
                                        <option value="" disabled selected hidden>Scegli una sala</option>
                                        @foreach($sale as $sala)
                                            <option value="{{ $sala->id }}">{{ $sala->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>--}}
                        </div>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-hover table-bordered table-striped js-sort-table text-center">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col" style="cursor: pointer">Ora</th>
                                    @foreach($giorni as $giorno)
                                        <th scope="col" style="cursor: pointer">{{ $giorno }}</th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orari as $orario)
                                    <tr>
                                        <td>{{ $orario }}</td>
                                        @foreach($giorni as $keyg => $giorno)
                                            <td><input form="form_corso" type="checkbox"
                                                       name="{{ 'orari'.'['.$keyg.']'.'['.$orario.']' }}">
                                            </td>
                                        @endforeach
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label for="nomeDisciplina" class="mb-0"><h5>Nome Disciplina*</h5></label>
                            <input type="text" pattern="[a-Z]" class="form-control" name="nomeDisciplina"
                                   id="nomeDisciplina"
                                   value="{{$disciplina->nome}}" required>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-12 mt-5 ml-3 text-right">
                    <div class="form-group">
                        <input type="submit" class="btn btn-dark" style="font-size: 22px" name="termina"
                               id="termina" value="Termina">
                    </div>
                </div>
                @csrf
            </form>
        </div>

    </div>
@endsection
