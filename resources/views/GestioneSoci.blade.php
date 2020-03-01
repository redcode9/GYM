@component('templates.entityTables',['SearchBox' => "OFF"])
    @slot('title_upper_view','GESTIONE UTENTI')
    @slot('title_upper_table','Gestione Soci')

    @slot('table_header')
        <th scope="col" style="cursor: pointer">ID</th>
        <th scope="col" class="text-right" style="cursor: pointer">Modifica</th>
        <th scope="col" style="cursor: pointer">Elimina</th>
        <th scope="col" style="cursor: pointer">Nome</th>
        <th scope="col" style="cursor: pointer">Cognome</th>
        <th scope="col" style="cursor: pointer">Ruolo</th>
        <th scope="col" style="cursor: pointer">Fondatore</th>


    @endslot
    @slot('table_content')
        @foreach($soci as $socio)
            <tr>
                <td>{{$socio->id}}</td>
                <td class="text-right">
                    <input type="image" src="{{asset('img/matita.png')}}" width="25" height="25"
                        onclick="window.location.href='{{ route("editSocio", ["id"=>$socio->id]) }}'">
                </td>
                <td>
                    <input type="image" src="{{asset('img/cestino.png')}}" width="25" height="25"
                           onclick="window.location.href='{{ route("deleteSocio", ["id"=>$socio->id]) }}';">
                </td>
                <td>{{ $socio->nome }}</td>
                <td>{{ $socio->cognome }}</td>
                <td>{{ $socio->tipo }}</td>
                <td>@if  ($socio->fondatore == 0 || (is_null($socio->fondatore)))
                        <button type="button" class="btn btn-primary" id="richiedi" name="richiedi" value=""
                        onclick="window.location.href='{{route('richiediFondatore', ["id"=>$socio->id])}}'">Richiedi</button>
                    @elseif ($socio->fondatore == 1)
                        <?php echo "Si" ?>
                        @elseif ($socio->fondatore == 2)
                        <button type="button" class="btn btn-warning text-dark" id="attesa" name="attesa" value="" disabled>
                            <b>In attesa</b></button>
                        @endif
                </td>

            </tr>



{{--            <!--Modal conferma delete-->
            <div class="modal fade" id="deleteSocioModal" tabindex="-1" role="dialog"
                 aria-labelledby="deleteSocioModalLabel" aria-hidden="true">
                <div class="modal-center">
                    <div class="modal-dialog .modal-align-center">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="deleteSocioModalLabel">Confermi eliminazione utente?</h4>
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">×</span><span class="sr-only">Close</span>

                                </button>
                            </div>

                            <form action="/utenti/GestioneSocio/" method="POST" id="deleteSocioForm">

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla
                                    </button>
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
