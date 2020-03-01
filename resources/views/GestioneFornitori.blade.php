@component('templates.entityTables',['SearchBox' => "OFF"])
    @slot('title_upper_view','GESTIONE UTENTI')
    @slot('title_upper_table','Gestione Fornitori')

    @slot('table_header')
        <th scope="col" style="cursor: pointer">ID</th>
        <th scope="col" class="text-right" style="cursor: pointer;">Modifica</th>
        <th scope="col" style="cursor: pointer">Elimina</th>
        <th scope="col" style="cursor: pointer">Ragione Sociale</th>
        <th scope="col" style="cursor: pointer">Tipologia</th>
    @endslot
    @slot('table_content')
        @foreach($fornitori as $forn)
            <tr>
                <td>{{$forn->id}}</td>
                <td class="text-right">
                    <input type="image" src="{{asset('img/matita.png')}}" width="25" height="25" id="matitaForn"
                           onclick="window.location.href='{{ route("editFornitore", ["id"=>$forn->id]) }}';">
                </td>
                <td>
                    <input type="image" src="{{asset('img/cestino.png')}}" width="25" height="25"
                           onclick="window.location.href='{{ route("deleteFornitore", ["id"=>$forn->id]) }}';">
                </td>
                <td>{{ $forn->rag_sociale}}</td>
                <td>@switch($forn->tipologia)
                        @case ("Ge")
                             <?php echo "Generico" ?>
                            @break
                        @case ("Af")
                            <?php echo "Affitto" ?>
                            @break
                        @case ("En")
                            <?php echo "Energia" ?>
                            @break
                        @case ("Ga")
                            <?php echo "Gas" ?>
                            @break
                        @case ("Ac")
                            <?php echo "Acqua" ?>
                            @break
                        @case ("Co")
                            <?php echo "Consumi" ?>
                            @break
                        @case ("Ab")
                            <?php echo "Abbigliamento" ?>
                            @break
                        @case ("Pu")
                            <?php echo "Pubblicità" ?>
                            @break
                        @case ("Ca")
                            <?php echo "Cancelleria" ?>
                            @break
                        @case ("At")
                            <?php echo "Assistenza" ?>
                            @break
                        @case ("Cm")
                            <?php echo "Commercialista" ?>
                            @break
                        @case ("Ass")
                            <?php echo "Assicurazione" ?>
                            @break
                        @case ("Pl")
                            <?php echo "Pulizie" ?>
                            @break
                        @case ("Al")
                            <?php echo "Altro" ?>
                            @break
                    @endswitch
                </td>
            </tr>


        <!--Modal edit-->
       {{-- <div class="modal fade" id="editFornModal" tabindex="-1" role="dialog" aria-labelledby="editFornModalLabel" aria-hidden="true">
            <div class="modal-center">
                <div class="modal-dialog .modal-align-center">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="editFornModalLabel">MODIFICA DATI FORNITORE</h4>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">×</span><span class="sr-only">Close</span>

                            </button>
                        </div>

                        <form action="" method="POST" id="editFornForm">
                            <input name="_method" type="hidden" value="PATCH">

                            @csrf

                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="fname">Ragione Sociale</label>
                                    <input type="text" name="fname" id="fname" class="form-control" placeholder="Inserisci nuovo nome">
                                </div>

                                <div class="form-group">
                                    <label for="tipoName">Seleziona tipologia</label>
                                    <select class="custom-select" name="tipoName" id="tipoName"
                                            required>
                                        <option value="" disabled selected hidden>Scegli un'opzione</option>
                                        <option value="Ge">Generico</option>
                                        <option value="Af">Affitto</option>
                                        <option value="En">Energia</option>
                                        <option value="Ga">Gas</option>
                                        <option value="Ac">Acqua</option>
                                        <option value="Co">Consumi</option>
                                        <option value="Ab">Abbigliamento</option>
                                        <option value="Pu">Pubblicità</option>
                                        <option value="Ca">Cancelleria</option>
                                        <option value="At">Assistenza</option>
                                        <option value="Cm">Commercialista</option>
                                        <option value="Ass">Assicurazione</option>
                                        <option value="Pl">Pulizie</option>
                                    </select>
                                </div>

                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                            <button type="submit" class="btn btn-primary" >Salva</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--fine Modal-->

        <!--Modal conferma delete
        <div class="modal fade" id="deleteFornModal" tabindex="-1" role="dialog" aria-labelledby="deleteFornModalLabel" aria-hidden="true">
            <div class="modal-center">
                <div class="modal-dialog .modal-align-center">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="deleteFornModalLabel">Confermi eliminazione utente?</h4>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">×</span><span class="sr-only">Close</span>

                            </button>
                        </div>

                        <form action="/utenti/GestioneFornitori/" method="POST" id="deleteFornForm">

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                                <button type="submit" class="btn btn-primary">Conferma</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--fine Modal-->--}}

        @endforeach



{{--        <script type="text/javascript">
            $(document).ready(function () {

                var table = $("#dataTableUtenti");

                //Start edit
                table.on('click', '#matitaForn', function () {
                    $tr = $(this).closest('tr');
                    if ($($tr).hasClass('child')) {
                        $tr = $tr.prev('.parent');
                    }

                    var data = table.row($tr).data();
                    console.log(data);

                    $("#fname").val(data[1]);
                    $("#tipoName").val(data[2]);

                    $("#editFornForm").attr('action', '/utenti/GestioneFornitori/' + data[0]);
                    $("#editFornModal").modal('show');

                });
            })


        </script>--}}

    @endslot



@endcomponent

