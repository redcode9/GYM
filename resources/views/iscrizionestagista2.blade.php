@extends('templates.base', ['menu' => "on"])
@section('corpo')
    @include('templates.iscrizioni-secondaparte', ['title' => "ISCRIZIONE STAGISTA",'idTitle' => "stagista",
     "nomeroute"=>"stagista", "idBack"=> $id])
@endsection
