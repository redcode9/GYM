@component('templates.entityTables',['SearchBox' => "ON"])  <!-- Cambiare in OFF se la searchbox non serve in questa tabella-->
    <!-- ciao-->
    @slot('title_upper_view','Gestione Utenti')
    @slot('title_upper_table','Visualizza Tutti')   <!-- Se si vuole inserire un dato interattivo, seguire il seguente form-->

    @slot('table_header')

        <th scope="col" class="text-right" style="cursor: pointer">Modifica</th>
        <th scope="col" style="cursor: pointer">Elimina</th>
        <th scope="col" style="cursor: pointer">Nome / Ragione Sociale</th>
        <th scope="col" style="cursor: pointer">Cognome</th>
        <th scope="col" style="cursor: pointer">Ruolo</th>
        <th scope="col" style="cursor: pointer">Tipologia</th>


    @endslot
    @slot('table_content')
        @foreach($alliscr as $iscritto)
            <tr>

                @foreach($sociest['soci'] as $socio)
                    @if($iscritto->id==$socio->iscrizione)
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
                        <td>
                            {{$socio->tipo}}
                        </td>
                        <td>-</td>
                    @endif
                @endforeach
                    @foreach ($sociest['est'] as $esterno)
                 @if($iscritto->id==$esterno->iscrizione)
                        <td class="text-right">
                            <input type="image" src="{{asset('img/matita.png')}}" width="25" height="25"
                                   @if($esterno->tipo=="stagista") onclick="window.location.href='{{ route("editStagista", ["id"=>$esterno->id]) }}';"
                                   @elseif($esterno->tipo=="collaboratore")onclick="window.location.href='{{ route("editCollab", ["id"=>$esterno->id]) }}';"@endif
                        </td>
                        <td>
                            <input type="image" src="{{asset('img/cestino.png')}}" width="25" height="25"
                                  @if($esterno->tipo=="stagista") onclick="window.location.href='{{ route("deleteStagista", ["id"=>$esterno->id]) }}';"
                            @elseif($esterno->tipo=="collaboratore")onclick="window.location.href='{{ route("deleteCollab", ["id"=>$esterno->id]) }}';"@endif>

                        </td>
                        <td>{{ $esterno->nome }}</td>
                <td>{{ $esterno->cognome }}</td>
                    <td>
                        {{$esterno->tipo}}
                    </td>
                        <td>-</td>
                    @endif
                @endforeach
                @foreach ($sociest['frnt'] as $fornitore)
                    @if($iscritto->id==$fornitore->iscrizione)
                        <td class="text-right">
                            <input type="image" src="{{asset('img/matita.png')}}" width="25" height="25"
                                   onclick="window.location.href='{{ route("editFornitore", ["id"=>$fornitore->id]) }}';">
                        </td>
                        <td>
                            <input type="image" src="{{asset('img/cestino.png')}}" width="25" height="25"
                                   onclick="window.location.href='{{ route("deleteFornitore", ["id"=>$fornitore->id]) }}';">
                        </td>
                        <td>{{ $fornitore->rag_sociale}}</td>
                        <td>--</td>
                        <td>fornitore</td>
                        <td>@switch($fornitore->tipologia)
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
                    @endif
                @endforeach

             </tr>
        @endforeach
    @endslot

    <script>
        $(document).ready(function() {
            $('#tabellaUtenti').DataTable();
        } );
    </script>

    @endcomponent



