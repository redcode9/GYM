@extends('templates.base', ['menu' => "on"])
@section('corpo')
    <div class="row mt-4">

        <div class="col-12 col-lg-12">
            <div class="mx-4 text-center">
                <h1 style="padding: 1rem; border: 3px solid black; border-right: none; border-left: none; color: black; text-transform: uppercase">
                    Corso {{$corso->nome}} di {{$corso->discipline->nome}} </h1>
            </div>
        </div>

        <div class="col-0 col-lg-4"></div>
        <div class="col-12 col-lg-7 mt-3">
            <button class="btn btn-dark float-right mt-3 ml-3">Rimuovi Insegnante</button>
            <button class="btn btn-dark float-right mt-3 mx-3">Aggiungi Insegnante</button>
        </div>
        <div class="col-0 col-lg-1"></div>

        <div class="col-0 col-lg-2"></div>
        <div class="col-12 col-lg-5 my-4 ml-3">
            <div class="form-group">
                <input class="form-control" type="text" id="myInput" onkeyup="myFunction()"
                       placeholder="Filtra per Nome">
            </div>
        </div>
        <div class="col-12 col-lg-4 my-4 ml-n3">
            <button class="btn btn-dark float-right ml-3">Rimuovi Iscritto</button>
            <button class="btn btn-dark float-right mr-5">Aggiungi Iscritto</button>
        </div>
        <div class="col-0 col-lg-1"></div>

        <div class="col-0 col-lg-1"></div>
        <div class="col-12 col-lg-10">
            <table class="table" id="myTable">
                <thead class="thead-dark">
                <th># Tessera</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Tipologia</th>
                <th>Entrata</th>
                </thead>
                <tbody>
                <tr>

                    <td>{{$corso->insegnato->dati_tessera->numero ?? ""}}</td>
                    <td>{{$corso->insegnato->nome ?? ""}}</td>
                    <td>{{$corso->insegnato->cognome ?? ""}}</td>
                    <td>Insegnante</td>
                    <td>0</td>
                </tr>
                @foreach($corso->partecipa as $partecipante)
                    <tr>
                        <td>{{$partecipante->dati_tessera->numero}}</td>
                        <td>{{$partecipante->nome}}</td>
                        <td>{{$partecipante->cognome}}</td>
                        <td>Allievo</td>
                        <td>10</td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
        <div class="col-0 col-lg-1"></div>
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
