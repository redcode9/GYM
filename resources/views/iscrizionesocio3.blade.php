@extends('templates.base', ['menu' => "on"])
@section('corpo')
    @include('templates.iscrizioni-terzaparte', ['title' => "ISCRIZIONE SOCIO",'idTitle' => "socio", "nomeroute"=>'socio2', "idBack"=> $socio])
@endsection
