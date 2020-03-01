@component('templates.entityTables',['SearchBox' => "OFF"])  <!-- Cambiare in OFF se la searchbox non serve in questa tabella-->
<!-- ciao-->
@slot('title_upper_view','Gestione Corsi')
@slot('title_upper_table','Tutti i Corsi')   <!-- Se si vuole inserire un dato interattivo, seguire il seguente form-->

    @slot('table_header')

        <th scope="col" class="text-right" style="cursor: pointer">Modifica</th>
        <th scope="col" style="cursor: pointer">Elimina</th>
        <th scope="col" style="cursor: pointer">Associa</th>
        <th scope="col" style="cursor: pointer">NomeCorso</th>
        <th scope="col" style="cursor: pointer">Nome Disciplina</th>
        <th scope="col" style="cursor: pointer">Costo</th>


    @endslot
    @slot('table_content')
    @foreach($all as $corsidisc)
        <tr>
            <td class="text-right">
                <input type="image" src="{{asset('img/matita.png')}}" width="25" height="25"
                       onclick="window.location.href='{{ route("corsomodifica", ["id"=>$corsidisc->id]) }}';">
                {{----}}
            </td>
            <td>
                <input type="image" src="{{asset('img/cestino.png')}}" width="25" height="25"
                       onclick="window.location.href='{{ route("corsodelete", ["id"=>$corsidisc->id]) }}';">
            </td>
            <td>
                <input type="image" src="{{asset('img/user.png')}}" width="25" height="25"
                       onclick="window.location.href='{{ route("corsoupdate", ["id"=>$corsidisc->id]) }}';">
            </td>

            <td>{{$corsidisc->corsonm}}</td>

            <td>{{$corsidisc->nome}}</td>

            <td>{{$corsidisc->costo}}</td>

            </tr>
            @endforeach
            @endslot

            <script>
                $(document).ready(function () {
                    $('#tabellaUtenti').DataTable();
                });
            </script>

        @endcomponent



