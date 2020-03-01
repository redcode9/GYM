<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/toggleButton.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/selectedItems.css') }}">
    <script type="text/javascript" src="{{ url('js/toggleIscrizioneCorso.js') }}"></script>
</head>
<body>
<div class="row mt-4">

    <div class="col-12 col-lg-12">
        <div class="mx-4 text-center">
            <h1 style="padding: 1rem; border: 3px solid black; border-right: none; border-left: none; color: black"
                id="{{ $idTitle }}">{{ $title }}</h1>
        </div>
    </div>
    <div class="col-12 col-lg-12 mt-4"></div>

    <div class="col-12 col-lg-12 mt-3"></div>
    <div class="col-2 col-lg-1 ml-n5"></div>
    <h4 class="mt-n1 ml-n2 mr-1">ISCRIZIONE A CORSO</h4>&nbsp;
    <div class="row mb-n2">
        <div class="clearfix"></div>
        <div class="col-sm-12">
            <label class="label-switch switch-primary">
                <input type="checkbox" class="switch switch-bootstrap flagCorso"
                       onchange="toggleIscrizioneCorso()"
                       name="flagCorso" id="flagCorso" value="" checked>
                <span class="lable"></span></label>
        </div>
    </div>
    <div class="col-11 col-lg-6"></div>
    <div id="divSconto" class="col-12 col-lg-3" style="margin-top: -0.5rem; padding-right: 6.75rem; opacity: 0;">
        <h4 class="pl-2" style="border: 2px dashed black; border-radius: 5px;font-size: 1.5rem;">Sconto del
            XX%<?php //TODO inserire sconto pacchetti ?>!</h4>
    </div>
    <div class="col-12 col-lg-2"></div>
    <div id="BodyIscrizioneCorso" class="col-12 col-lg-8 mt-5">
        @foreach($sale as $sala)
            @foreach($sala->disciplina as $disciplina)
                <div class="col-12 ml-n2"
                     style="font-weight: bold; background-color: #f4f7fa; width: 40%; border-radius: 10px; text-align: center; text-transform: uppercase">
                    <h4 style="margin: 0;padding-bottom: 0.05rem;font-size: 1.5rem;">
                        {{$disciplina->nome}}
                    </h4>
                </div>
                <div class="jumbotron" style="margin-top: -2.2rem;background-color: #cdf5de">

                    <div class="row">
                        @foreach($disciplina->corsi as $corso)
                            <div id="checkboxes" class="col-12 col-md-6 col-xl-4">
                                <input form="corsi_form" type="checkbox" name="group[]" id="rb{{$corso->id}}"
                                       value="{{$corso->id}}" onchange="checkedCorsi();">
                                <label class="jumbotron mr-1 text-center mb-n1" for="rb{{$corso->id}}"
                                       style="background-color: #13ce66; cursor: pointer; text-transform: uppercase; width: 100%;max-height: 11.8rem">
                                    <h5 class="py-3">
                                        {{$corso->nome}}
                                    </h5>
                                </label>
                            </div>
                        @endforeach
                        <div class="col-12 col-md-6 col-xl-4">

                        </div>
                    </div>
                    @endforeach
                </div>
            @endforeach
    </div>
    <div class="col-0 col-lg-2"></div>
    <div class="col-12 col-lg-12 mt-4 ml-n4">
        <form id="corsi_form" action="" method="post">
            <div class="form-group">
                <input type="button" class="btn btn-dark ml-5 mt-3"
                       style="font-size: 22px; cursor: pointer; margin-left:2rem" name="indietroCorso"
                       id="indietroCorso" value="Indietro" formnovalidate
                       onclick="window.location.href='{{route("$nomeroute", ["$idBack"])}}';">

                <input type="submit" class="btn btn-dark mt-3 float-right"
                       style="font-size: 22px; cursor: pointer; margin-left: 2.05rem;" name="terminaCorso"
                       id="terminaCorso" value="Termina" disabled>

                <input type="button" class="btn btn-dark mt-3 float-right"
                       style="font-size: 22px; cursor: pointer; position: relative; z-index: 2;"
                       onclick="enableButton();"
                       name="modulo"
                       id="modulo" value="Stampa modulo iscrizione" formnovalidate>
            </div>
            @csrf
        </form>
    </div>
</div>
<div class="col-12 col-lg-2"></div>
<script>

    function enableButton() {
        document.getElementById("terminaCorso").disabled = false;
        window.open('{{route('moduloIscr')}}');
    }

</script>
</body>

