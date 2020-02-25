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
                    id="fornitore">CREAZIONE DISCIPLINA</h1>
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
                                    <label for="nomeDisciplina" class="mb-0"><h5>Nome Disciplina*</h5></label>
                                    <input type="text" pattern="[a-Z]" class="form-control" name="nomeDisciplina"
                                           id="nomeDisciplina"
                                           value="" placeholder="es. Nuoto" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12 mt-5">
                                <div class="form-group">
                                    <label for="sala" class="mb-0"><h5>Sala*</h5></label>
                                    <select class="custom-select" name="sala" id="sala"
                                            required>
                                        <option value="" disabled selected hidden>Scegli un'opzione</option>
                                        @foreach($sale as $sala)
                                            <option value="{{ $sala->id }}">{{ $sala->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-12 mt-5 ml-3 text-right">
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
