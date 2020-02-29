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
                                   id="search_table" placeholder="Search Socio Tramite Cognome">
                        </div>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-hover table-bordered table-striped js-sort-table ">
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
                        <h3 class="card-title">Tabella Esterno tramite nome</h3>
                        <div class="form-group">
                            <input class="form-control text-dark" style="border: 2px solid #353a40" type="text"
                                   name="search"
                                   id="search_table" placeholder="Search Esterno Tramite Cognome">
                        </div>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-hover table-bordered table-striped js-sort-table ">
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
                                    <th scope="col" style="cursor: pointer" class="js-sort-string">Nome</th>
                                    <th scope="col" style="cursor: pointer" class="js-sort-string">Cognome</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($esternoncm as $NCE)
                                <tr>
                                    <td>{{$NCE->importo}} </td>
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
@endsection
