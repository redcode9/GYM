@extends('templates.base', ['menu' => "on"])
@section('corpo')
    @include('templates.iscrizioni-quartaparte', ['title' => "ISCRIZIONE COLLABORATORE",'idTitle' => "collaboratore", "nomeroute"=>"collaboratore3", "idBack"=>$collab])
@endsection
