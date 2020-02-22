@extends('templates.base', ['menu' => "on"])
@section('corpo')
    <div class="row mt-4">

        <div class="col-12 col-lg-12">
            <div class="mx-4 text-center">
                <h1 style="padding: 1rem; border: 3px solid black; border-right: none; border-left: none; color: black">{{$title_upper_view ?? ''}}</h1>
            </div>
        </div>

        <div class="container container-fluid mt-5"> <!-- Margine superiore modificabile se 5 è troppo-->
            <div class="jumbotron_no_pad jumbotron-fluid">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{$title_upper_table}}</h3>
                        <!-- Qui viene passato dalla view precedente-->
                    @if ( $SearchBox === "ON") <!-- Qui viene passato dalla view precedente-->
                        <div class="form-group">
                            <input class="form-control text-dark" style="border: 2px solid #353a40" type="text"
                                   name="search"
                                   id="search_table" placeholder="Search">
                        </div>
                        @endif

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
                                    <th scope="col" class="text-right" style="cursor: pointer">Modifica</th>
                                    <th scope="col" style="cursor: pointer">Elimina</th>
                                    <th scope="col" style="cursor: pointer">Nome</th>
                                    <th scope="col" style="cursor: pointer">Cognome</th>
                                    <th scope="col" style="cursor: pointer">Socio</th>
                                    <th scope="col" style="cursor: pointer">Ruolo</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-right">
                                        <input type="image" src="{{asset('img/matita.png')}}" width="25" height="25">
                                    </td>

                                    <td>
                                        <input type="image" src="{{asset('img/cestino.png')}}" width="25" height="25">
                                    </td>
                                    <td>Piero</td>
                                    <td>Carrieri</td>
                                    <td>Si</td>
                                    <td>Pulitore</td>
                                </tr>
                                <tr>     <!-- Inizio Riga-->
                                    <td class="text-right">
                                        <input type="image" src="{{asset('img/matita.png')}}" width="25" height="25">
                                    </td>

                                    <td>
                                        <input type="image" src="{{asset('img/cestino.png')}}" width="25" height="25">
                                    </td>
                                    <td>Alessia</td>
                                    <td>Calia</td>
                                    <td>No</td>
                                    <td>Spacciatore</td>
                                </tr>   <!-- Fine Riga-->
                                <tr>     <!-- Inizio Riga-->
                                    <td class="text-right">
                                        <input type="image" src="{{asset('img/matita.png')}}" width="25" height="25">
                                    </td>

                                    <td>
                                        <input type="image" src="{{asset('img/cestino.png')}}" width="25" height="25">
                                    </td>
                                    <td>Alessia</td>
                                    <td>Calia</td>
                                    <td>No</td>
                                    <td>Spacciatore</td>
                                </tr>   <!-- Fine Riga-->
                                <tr>     <!-- Inizio Riga-->
                                    <td class="text-right">
                                        <input type="image" src="{{asset('img/matita.png')}}" width="25" height="25">
                                    </td>

                                    <td>
                                        <input type="image" src="{{asset('img/cestino.png')}}" width="25" height="25">
                                    </td>
                                    <td>Alessia</td>
                                    <td>Calia</td>
                                    <td>No</td>
                                    <td>Spacciatore</td>
                                </tr>   <!-- Fine Riga-->
                                <tr>     <!-- Inizio Riga-->
                                    <td class="text-right">
                                        <input type="image" src="{{asset('img/matita.png')}}" width="25" height="25">
                                    </td>

                                    <td>
                                        <input type="image" src="{{asset('img/cestino.png')}}" width="25" height="25">
                                    </td>
                                    <td>Alessia</td>
                                    <td>Calia</td>
                                    <td>No</td>
                                    <td>Spacciatore</td>
                                </tr>   <!-- Fine Riga-->
                                <tr>     <!-- Inizio Riga-->
                                    <td class="text-right">
                                        <input type="image" src="{{asset('img/matita.png')}}" width="25" height="25">
                                    </td>

                                    <td>
                                        <input type="image" src="{{asset('img/cestino.png')}}" width="25" height="25">
                                    </td>
                                    <td>Joseph</td>
                                    <td>Tortorella</td>
                                    <td>No</td>
                                    <td>Insegnante</td>
                                </tr>   <!-- Fine Riga-->

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
