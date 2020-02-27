@extends('templates.base', ['menu' => "on"])
@section('corpo')
    @include('templates.iscrizioni-secondaparte', ['title' => "ISCRIZIONE SOCIO",'idTitle' => "socio", 'nomeroute'=>"socio", 'idBack'=>"$socio"])
@endsection
