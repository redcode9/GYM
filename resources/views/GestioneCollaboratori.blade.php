@component('templates.entityTables',['SearchBox' => "OFF"])
    @slot('title_upper_view','GESTIONE UTENTI')
    @slot('title_upper_table','Gestione Collaboratori')

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
        @foreach($esterni as $esterno)
            <tr>
                <td>{{$esterno->id}}</td>
                <td class="text-right">
                    <input type="image" src="{{asset('img/matita.png')}}" width="25" height="25"
                           onclick="window.location.href='{{ route("editCollab", ["id"=>$esterno->id]) }}'">
                </td>
                <td>
                    <input type="image" src="{{asset('img/cestino.png')}}" width="25" height="25"
                           onclick="window.location.href='{{ route("deleteCollab", ["id"=>$esterno->id]) }}'">
                </td>
                <td>{{ $esterno->nome }}</td>
                <td>{{ $esterno->cognome }}</td>
                <td>Si</td>
                <td>{{ $esterno->tipo }}</td>
            </tr>
        @endforeach

    @endslot
@endcomponent
