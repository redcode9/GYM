@extends('templates.base', ['menu' => "on"])
@section('corpo')
    <div class="row mt-4">



        <div class="col-12 col-lg-12">
            <div class="mx-4 text-center">
                <h1 style="padding: 1rem; border: 3px solid black; border-right: none; border-left: none; color: black; text-transform: uppercase">
                    Corso {{$corso->nome}} di {{$corso->discipline->nome}} </h1>
            </div>
        </div>

        <div class="row mt-3">
        <div class="col-12 col-lg-3 my-4  ml-auto mr-auto">

            <form action="{{route('addAllievo', ["id"=>$corso->id])}}" method="POST">
                @csrf
                <?php $soci = \App\Socio::all()?>

                <select class="custom-select" name="selAllievo" id="selAllievo">
                        <option value="" disabled selected hidden>Seleziona un allievo</option>
                        @foreach($soci as $socio)
                            @if ($socio->tipo=='allievo')
                                <option value="{{$socio->id}}">{{$socio->nome}} {{$socio->cognome}}</option>
                            @endif
                        @endforeach
                    </select>
                <input type="submit" class="btn btn-dark float-right mr-3 mt-1" value="Aggiungi Allievo">
            </form>

        </div>

        <div class="col-12 col-lg-3 mt-4 ml-auto mr-auto">

            <form action="{{route('addInsegnante', ["id"=>$corso->id])}}" method="POST">
                @csrf
                <select class="custom-select" name="selInsegnante" id="selInsegnante">
                    <option value="" disabled selected hidden>Seleziona un insegnante</option>
                    @foreach($soci as $socio)
                        @if ($socio->tipo=='insegnante')
                    <option value="{{$socio->id}}">{{$socio->nome}} {{$socio->cognome}}</option>
                        @endif
                    @endforeach
                </select>
                    <input type="submit" class="btn btn-dark float-right mt-1 mx-3" value="Aggiungi Insegnante">

            </form>


        </div>
            <div class="col-12 col-lg-3 mt-4 ml-auto mr-auto">

                <form action="{{route('addStagista', ["id"=>$corso->id])}}" method="POST">
                    <?php $stagisti = \App\Esterno::all()->where('tipo', '=', 'stagista')?>
                    @csrf
                    <select class="custom-select" name="selStagista" id="selStagista">
                        <option value="" disabled selected hidden>Seleziona uno stagista</option>
                        @foreach($stagisti as $stagista)
                                <option value="{{$stagista->id}}">{{$stagista->nome}} {{$stagista->cognome}}</option>
                        @endforeach
                    </select>
                    <input type="submit" class="btn btn-dark float-right mt-1 mx-3" value="Aggiungi Stagista">

                </form>


            </div>

        <div class="col-12 col-lg-5 my-4 ml-auto mr-auto">
            <div class="form-group">
                <input class="form-control" type="text" id="myInput" onkeyup="myFunction()"
                       placeholder="Filtra per Cognome">
            </div>
        </div>


        <div class="col-0 col-lg-1"></div>
        <div class="col-12 col-lg-10 ml-auto mr-auto-">
            <table class="table" id="myTable">
                <thead class="thead-dark">

                <th>Nome</th>
                <th>Cognome</th>
                <th>Tipologia</th>
                <th>Entrata</th>
                <th style="text-align:center;">Rimuovi partecipazione</th>
                </thead>
                <tbody>

                <tr>
                    {{--<td>{{$corso->insegnato->dati_tessera->numero ?? ""}}</td>--}}

                    @if ($corso->insegnante !== null)
                    <td>{{$corso->insegnato->nome ?? ""}}</td>
                    <td>{{$corso->insegnato->cognome ?? ""}}</td>
                    <td>Insegnante</td>
                    <td></td>
                    <td align="center"><button class="btn btn-danger"
                     onclick="window.location.href='{{route('deleteInsegnante', ["id"=>$corso->id])}}'">Rimuovi</button></td>
                        @endif
                </tr>


                <tr>
                    {{--<td>{{$corso->insegnato->dati_tessera->numero ?? ""}}</td>--}}
                    @foreach($stagisti->where('corso','=',$corso->id) as $stag)
                    <td>{{$stag->nome ?? ""}}</td>
                    <td>{{$stag->cognome ?? ""}}</td>
                    <td>Stagista</td>
                    <td></td>
                    <td align="center">
                        <button class="btn btn-danger"
                    onclick="window.location.href='{{route('deleteStagCorso', ["id"=>$stag->id])}}'">Rimuovi</button></td>

                </tr>
                @endforeach

                @foreach($corso->partecipa as $partecipante)
                    <tr>
                        {{--<td>{{$partecipante->dati_tessera->numero}}</td>--}}
                        <td>{{$partecipante->nome}}</td>
                        <td>{{$partecipante->cognome}}</td>
                        <td>{{$partecipante->tipo}}</td>
                        <td>{{$corso->costo}}</td>
                        <td align="center"><input type="button" class="btn btn-danger" value="Rimuovi"
                            onclick="window.location.href='{{route('deletePartecipante', ["id"=>$partecipante->id])}}'"></td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
        <div class="col-0 col-lg-1"></div>
    </div>
        <div class="container pl-5 pb-5 mt-5">
            <div class="row">
                <div>
                    <a href="http://ppw/gestione/corsi" style="cursor:pointer" class="btn btn-dark">Indietro</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@endsection
