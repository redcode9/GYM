<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/toggleButton.css') }}">
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
    <div class="col-11 col-lg-9"></div>
    <div id="divSconto" class="col-12 col-lg-2 px-2" style="margin-top: -2.75rem;">
        <?php //TODO @if 2 o più corsi selezionati ?>
        <h4 class="pl-2" style="border: 2px dashed black; border-radius: 5px;"> Sconto del
            XX%<?php //TODO inserire sconto pacchetti ?>!</h4>
    </div>
    <div class="col-12 col-lg-2"></div>
    <div id="BodyIscrizioneCorso" class="col-12 col-lg-8 mt-5">
        @foreach($sale as $sala)
            @foreach($sala->disciplina as $disciplina)
                <div class="col-12 ml-n2"
                     style="font-weight: bold; background-color: #fff; width: 18%; border-radius: 10px; text-align: center; text-transform: uppercase">
                    <h4 style="padding-bottom: 0.1rem">
                        {{$disciplina->nome}}
                    </h4>
                </div>
                <div class="jumbotron" style="margin-top: -2.2rem;background-color: #cdf5de">

                    <div class="row">
                        @foreach($disciplina->corsi as $corso)
                            <div class="col-12 col-md-6 col-xl-4">

                                <div class="jumbotron mr-1 text-center mb-n1"
                                     style="background-color: #13ce66; cursor: pointer; text-transform: uppercase"
                                     onclick="<?php //TODO deve essere selezionabile ciascun corso?>">
                                    <h5 class="py-3">
                                        {{$corso->nome}}
                                    </h5>
                                </div>

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
    <div class="col-12 col-lg-12 mt-5 ml-n4">
        <form action="" method="post">
            <div class="form-group">
                <input type="submit" class="btn btn-dark ml-5 mt-3"
                       style="font-size: 22px; cursor: pointer; margin-left:2rem" name="indietroCorso"
                       id="indietroCorso" value="Indietro" formnovalidate>
                <input type="submit" class="btn btn-dark mt-3 float-right"
                       style="font-size: 22px; cursor: pointer;" name="terminaCorso"
                       id="terminaCorso" value="Termina Iscrizione e Stampa Modulo di Tesseramento">
            </div>
            @csrf
        </form>
    </div>
</div>
<div class="col-12 col-lg-2"></div>
<div class="col-12 col-lg-12 mt-n5 ml-n4">
    <form action="" method="post">
        <div class="form-group">
            <input type="submit" class="btn btn-dark mt-5"
                   style="font-size: 22px; cursor: pointer; position: relative; z-index: 2; margin-left: 2.05rem;"
                   name="indietro"
                   id="indietro" value="Indietro" formnovalidate>
            <input type="submit" class="btn btn-dark mt-5 float-right"
                   style="font-size: 22px; cursor: pointer; position: relative; z-index: 2; margin-right: -0.95rem"
                   name="termina"
                   id="termina" value="Termina Iscrizione e Stampa Modulo di Tesseramento" formnovalidate>
        </div>
        @csrf
    </form>
</div>
<div class="col-0 col-lg-2"></div>
</div>
</body>

<?php //TODO collegare questa view al database ?>
