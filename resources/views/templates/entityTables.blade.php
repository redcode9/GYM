@extends('templates.base', ['menu' => "on"])
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/editableItems.css') }}">
    <script type="text/javascript" src="{{ url('js/EditableTableRecords.js') }}"></script>
</head>
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
                            <table class="table table-hover table-bordered table-striped js-sort-table " id="tabellaUtenti">
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
                                    {{ $table_header }}
                                </tr>
                                </thead>
                                <tbody>
                                {{ $table_content }}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="container pl-5 pb-5">
            <div class="row">
                <div>
                    <a href="{{ route('GestioneUtenti') }}" style="cursor:pointer" class="btn btn-dark">Indietro</a>
                </div>
            </div>
        </div>

@endsection


