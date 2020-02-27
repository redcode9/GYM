@extends('templates.base', ['menu' => "on"])
@section('corpo')
    @include('templates.iscrizioni-secondaparte', ['title' => "ISCRIZIONE COLLABORATORE",
    'idTitle' => "collaboratore", "nomeroute"=>"collaboratore", "idBack"=>$collab])
@endsection
