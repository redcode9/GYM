@extends('templates.base', ['menu' => "off"])
@section('corpo')
<h1>Crea Nuova Sala</h1>
<form action="{{route('sala.save')}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="nome" id="nome" class="form-control" value="" placeholder="es. Piscina">

    </div>

    <button type="submit" class="btn btn-dark" style="font-size: 18px" name="Aggiungi_Sala"
            id="Aggiungi_sala" value="Crea Sala">CREA</button>

</form>
@endsection
