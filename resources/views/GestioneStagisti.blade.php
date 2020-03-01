@component('templates.entityTables',['SearchBox' => "OFF"])
    @slot('title_upper_view','GESTIONE UTENTI')
    @slot('title_upper_table','Gestione Stagisti')

    @slot('table_header')
        <th scope="col" style="cursor: pointer">ID</th>
        <th scope="col" class="text-right" style="cursor: pointer">Modifica</th>
        <th scope="col" style="cursor: pointer">Elimina</th>
        <th scope="col" style="cursor: pointer">Nome</th>
        <th scope="col" style="cursor: pointer">Cognome</th>
        <th scope="col" style="cursor: pointer">Socio</th>
        <th scope="col" style="cursor: pointer">Ruolo</th>
    @endslot
    @slot('table_content')
        @foreach($stagisti as $stagista)
            <tr>
                <td>{{$stagista->id}}</td>
                <td class="text-right">
                    <input type="image" src="{{asset('img/matita.png')}}" width="25" height="25"
                    onclick="window.location.href='{{ route("editStagista", ["id"=>$stagista->id]) }}'">
                </td>
                <td>
                    <input type="image" src="{{asset('img/cestino.png')}}" width="25" height="25"
                           onclick="window.location.href='{{ route("deleteStagista", ["id"=>$stagista->id]) }}'">
                </td>
                <td>{{ $stagista->nome }}</td>
                <td>{{ $stagista->cognome }}</td>
                <td>@if (is_null($stagista->socio))
                        <?php echo "No" ?>
                        @else <?php echo "Si" ?>
                        @endif

                </td>
                <td>{{ $stagista->tipo }}</td>
            </tr>




        <!--Modal conferma delete-->
{{--        <div class="modal fade" id="deleteStagModal" tabindex="-1" role="dialog" aria-labelledby="deleteStagModalLabel" aria-hidden="true">
            <div class="modal-center">
                <div class="modal-dialog .modal-align-center">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="deleteStagModalLabel">Confermi eliminazione utente?</h4>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">×</span><span class="sr-only">Close</span>

                            </button>
                        </div>

                        <form action="/utenti/GestioneStagista" method="POST" id="deleteStagForm">

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                                <button type="button" class="btn btn-primary">Conferma</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--fine Modal-->--}}

        @endforeach

    @endslot
@endcomponent
