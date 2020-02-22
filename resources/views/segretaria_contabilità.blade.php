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
                        <h3 class="card-title">Ricerca tramite nome</h3>
                        <div class="form-group">
                            <input class="form-control text-dark" style="border: 2px solid #353a40" type="text"
                                   name="search"
                                   id="search_table" placeholder="Search">
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
                                    <th scope="col" style="cursor: pointer" class="js-sort-date">Data</th>
                                    <th scope="col" style="cursor: pointer" class="js-sort-number">Entrata</th>
                                    <th scope="col" style="cursor: pointer" class="js-sort-number">Uscita</th>
                                    <th scope="col" style="cursor: pointer">Nome</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Piero</td>
                                    <td>Carrieri</td>
                                    <td>Si</td>
                                    <td>Pulitore</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
