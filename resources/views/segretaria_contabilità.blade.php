@extends('templates.base', ['menu' => "on"])
@section('corpo')
    <div class="row mt-4">

        <div class="col-12 col-lg-12">
            <div class="mx-4 text-center">
                <h1 style="padding: 1rem; border: 3px solid black; border-right: none; border-left: none; color: black">Contabilità</h1>
            </div>
        </div>

        <div class="container container-fluid mt-5"> <!-- Margine superiore modificabile se 5 è troppo-->
            <div class="jumbotron_no_pad jumbotron-fluid">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Tabella Soci</h3>
                        <div class="form-group">
                            <input class="form-control text-dark" style="border: 2px solid #353a40" type="text"
                                   name="search"
                                   id="search_table" placeholder="Search Socio Tramite Cognome" onkeyup="myFunction()">
                        </div>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-hover table-bordered table-striped js-sort-table" id="myTable">
                                <thead class="thead-dark">
                                <!--js-sort-asc: ascending sort
                                    js-sort-desc: descending sort
                                    js-sort-0: zero-based number of the sorted column
                                    js-sort-string: sort by string
                                    js-sort-date: sort by date
                                    js-sort-number: sort by number
                                    js-sort-last: sort by the last word
                                    js-sort-input: sort by the input value
                                -->
                                <tr>
                                    <th scope="col" style="cursor: pointer" class="js-sort-number">Entrata</th>
                                    <th scope="col" style="cursor: pointer" class="js-sort-number">Uscita</th>
                                    <th scope="col" style="cursor: pointer" class="js-sort-string">Corso</th>
                                    <th scope="col" style="cursor: pointer" class="js-sort-string">Nome</th>
                                    <th scope="col" style="cursor: pointer" class="js-sort-string">Cognome</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($socioncm as $NCS)
                                <tr>
                                    <td>@if($NCS->tipoS=='Entrata') {{$NCS->importo}} @else{{0}}@endif</td>
                                    <td>@if($NCS->tipoS=='Uscita') - {{$NCS->importo}} @else{{0}}@endif</td>
                                    <td>{{$NCS->corsonome}}</td>
                                    <td>{{$NCS->nome}}</td>
                                    <td>{{$NCS->cognome}}</td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-fluid mt-5"> <!-- Margine superiore modificabile se 5 è troppo-->
            <div class="jumbotron_no_pad jumbotron-fluid">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Tabella Esterno</h3>
                        <div class="form-group">
                            <input class="form-control text-dark" style="border: 2px solid #353a40" type="text" name="search"
                                   id="search_table2" placeholder="Search Esterno Tramite Cognome" onkeyup="myFunction()">
                        </div>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-hover table-bordered table-striped js-sort-table" id="myTable2">
                                <thead class="thead-dark">
                                <!--js-sort-asc: ascending sort
                                    js-sort-desc: descending sort
                                    js-sort-0: zero-based number of the sorted column
                                    js-sort-string: sort by string
                                    js-sort-date: sort by date
                                    js-sort-number: sort by number
                                    js-sort-last: sort by the last word
                                    js-sort-input: sort by the input value
                                -->
                                <tr>
                                    <th scope="col" style="cursor: pointer" class="js-sort-number">Uscita</th>
                                    <th scope="col" style="cursor: pointer" class="js-sort-string">Tipo</th>
                                    <th scope="col" style="cursor: pointer" class="js-sort-string">Nome</th>
                                    <th scope="col" style="cursor: pointer" class="js-sort-string">Cognome</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($esternoncm as $NCE)
                                <tr>
                                    <td>{{$NCE->importo}} </td>
                                    <td>{{$NCE->tipo}}</td>
                                    <td>{{$NCE->nome}}</td>
                                    <td>{{$NCE->cognome}}</td>


                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search_table");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[4];
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
    <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("search_table2");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable2");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[3];
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
