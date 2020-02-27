@extends('templates.base', ['menu' => "on"])
@section('corpo')
        @include('templates.iscrizioni-quartaparte', ['title' => "ISCRIZIONE SOCIO",'idTitle' => "socio", "nomeroute"=>'socio3', "idBack"=> $socio->id,
         "years"=>$years])
@endsection
