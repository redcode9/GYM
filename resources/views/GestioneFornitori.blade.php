@component('templates.entityTables',['SearchBox' => "OFF"])
    @slot('title_upper_view','GESTIONE UTENTI')
    @slot('title_upper_table','Gestione Fornitori')

    @slot('table_header')
        <th scope="col" class="text-right" style="cursor: pointer">Modifica</th>
        <th scope="col" style="cursor: pointer">Elimina</th>
        <th scope="col" style="cursor: pointer">Nome</th>
        <th scope="col" style="cursor: pointer">Cognome</th>
        <th scope="col" style="cursor: pointer">Socio</th>
        <th scope="col" style="cursor: pointer">Ruolo</th>
    @endslot
    @slot('table_content')
        @foreach($fornitori as $forn)
            <tr>
                <td class="text-right">
                    <input type="image" src="{{asset('img/matita.png')}}" width="25" height="25">
                </td>
                <td>
                    <input type="image" src="{{asset('img/cestino.png')}}" width="25" height="25">
                </td>
                <td>{{ $forn->dati_iscrizione->nome }}</td>
                <td>{{ $forn->dati_iscrizione->cognome }}</td>
                <td>Si</td>
                <td>{{ $forn->tipologia }}</td>
            </tr>
        @endforeach
    @endslot
@endcomponent
