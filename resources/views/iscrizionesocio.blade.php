@extends('templates.base', ['menu' => "on"])
@section('corpo')
    @include('templates.iscrizioni-primaparte', ['title' => "ISCRIZIONE SOCIO",'idTitle' => "socio",'idNext' => "socio2"])
@endsection
