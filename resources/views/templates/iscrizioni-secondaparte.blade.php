<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/placeholders.css') }}">
    <script type="text/javascript" src="{{ url('js/removeSpaces.js') }}"></script>
</head>
<body>
<div class="row mt-4">

    <div class="col-12 col-lg-12">
        <div class="mx-4 text-center">
            <h1 style="padding: 1rem; border: 3px solid black; border-right: none; border-left: none; color: black"
                id="{{ $idTitle }}">{{ $title }}</h1>
        </div>
    </div>

    <div class="col-12 col-lg-12">
        <div class="row mt-5">
            <h5 class="px-2"
                style="margin-top: -0.75rem; margin-left: 3rem; color: gray; position:absolute; z-index: 2; background-color: white; font-weight: normal; ">
                ASSICURAZIONE
            </h5></div>
        <form action="" method="post">
            <div class="row ml-4 mr-4 mb-5 mt-n5">
                <div class="col-12 col-lg-12 mt-5"
                     style="padding: 2rem; border: 0.1rem solid lightgray; border-radius: 5px;">
                    <div class="row mt-2">
                        <div class="col-12 col-lg-12">
                            <div class="form-group">
                                <label for="numero" class="mb-0"><h5>Numero*</h5></label>
                                <input type="text" pattern="[a-Z]" class="form-control" name="numero" id="numero"
                                       value="" placeholder="es. 091AF1642" required>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mt-3">
                            <div class="form-group">
                                <label for="data1" class="mb-0"><h5>Data di Emissione*</h5></label>
                                <input type="date" pattern="\d{1,2}/\d{1,2}/\d{4}" class="form-control" name="data1"
                                       id="data1" value="" required>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mt-3">
                            <div class="form-group">
                                <label for="scadenza1" class="mb-0"><h5>Data di Scadenza*</h5></label>
                                <input type="date" pattern="\d{1,2}/\d{1,2}/\d{4}" class="form-control"
                                       name="scadenza1" id="scadenza1" value="" required>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mt-3 mb-n2">
                            <div class="form-group">
                                <label for="note1" class="mb-0"><h5>Note aggiuntive</h5></label>
                                <textarea type="text" pattern="[a-Z.]"
                                          onfocus="this.value=removeSpaces(this.value);" class="form-control"
                                          name="note1" id="note1" value="" style="resize: none" rows="3">
                                    </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <h5 class="px-2"
                    style="margin-top: -0.75rem; margin-left: 3rem; color: gray; position:absolute; z-index: 2; background-color: white; font-weight: normal; ">
                    CERTIFICATO MEDICO
                </h5></div>
            <div class="row ml-4 mr-4 mb-5 mt-n5">
                <div class="col-12 col-lg-12 mt-5"
                     style="padding: 2rem; border: 0.1rem solid lightgray; border-radius: 5px;">
                    <div class="row mt-2">
                        <div class="col-12 col-lg-6 mb-n2">
                            <div class="form-group">
                                <label for="data2" class="mb-0"><h5>Data Rilascio*</h5></label>
                                <input type="date" pattern="\d{1,2}/\d{1,2}/\d{4}" class="form-control" name="data2"
                                       id="data2" value="" required>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mb-n2">
                            <div class="form-group">
                                <label for="scadenza2" class="mb-0"><h5>Data Scadenza*</h5></label>
                                <input type="date" pattern="\d{1,2}/\d{1,2}/\d{4}" class="form-control"
                                       name="scadenza2" id="scadenza2" value="" required>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mt-4 mb-n2">
                            <div class="form-group">
                                <label for="note2" class="mb-0"><h5>Note aggiuntive</h5></label>
                                <textarea type="text" pattern="[a-Z.]"
                                          onfocus="this.value=removeSpaces(this.value);" class="form-control"
                                          name="note2" id="note2" value="" style="resize: none" rows="3">
                                    </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-12 mt-n3 ml-n2 mb-3">
                <div class="form-group">
                    <input type="button" class="btn btn-dark ml-3" style="font-size: 22px; cursor: pointer;"
                           name="indietro"
                           onclick="window.location.href='{{route("$nomeroute", ["$idBack"])}}';"
                           id="indietro" value="Indietro" formnovalidate>
                    <input type="submit" class="btn btn-dark float-right" style="font-size: 22px; cursor: pointer;"
                           name="continua"
                           id="continua" value="Continua">
                </div>
            </div>
            @csrf
        </form>
    </div>
</div>
</body>
