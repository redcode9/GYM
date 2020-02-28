@extends('templates.base', ['menu' => "on"])
@section('corpo')
    @include('templates.iscrizioni-terzaparte', ['title' => "ISCRIZIONE COLLABORATORE",'idTitle' => "collaboratore", "nomeroute"=>"collaboratore2", "idBack"=>$collab])
@endsection
