@extends('templates.base')
@section('corpo')
<div class="row mt-5 mb-5">
    <div class="col-12 text-center">
        <h1 class="mt-5 p-3 border">Corso {{$corso->discipline->nome}} {{$corso->nome}}</h1>
    </div>
    <div class="col-0 col-lg-2"></div>
    <div class="col-12 col-lg-8 mb-5">
        <button class="btn btn-dark float-right ml-3">Elimina</button>
        <button class="btn btn-dark float-right mr-3 ml-3">Aggiungi</button>
        <div class="form-group float-right mr-3">
        <input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Filtra per Nome">
        </div>
    </div>
    <div class="col-0 col-lg-2"></div>
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

                    <td>{{$corso->insegnato->dati_tessera->numero}}</td>
                    <td>{{$corso->insegnato->nome}}</td>
                    <td>{{$corso->insegnato->cognome}}</td>
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
