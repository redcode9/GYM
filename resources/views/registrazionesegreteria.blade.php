@extends('templates.base', ['menu' => "off"])
@section('corpo')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div>
                    <p style="text-align: center"><img style="width: 37%;margin-left:-1.5rem" src="{{asset('img/logo_gym3.png')}}" alt="Logo">
                    </p></div>
                <div class="jumbotron pb-3 pt-3" style="background-color: #fae8c6">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center mb-3">Registrazione Segreteria</h2>
                        </div>
                        <div class="col-12 mt-4">
{{--                            @if($errore!="")--}}
{{--                                {{$errore}}--}}
{{--                            @endif--}}
                            <div class="row">
                                <div class="col-0 col-lg-3"></div>
                                <div class="col-12 col-lg-6">
                                    <form method="post" action="{{route("segreteria")}}">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="background-color: #ffac14"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" name="username" class="form-control" placeholder="Username">

                                        </div>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="background-color: #ffac14"><i class="fas fa-key icon"></i></span>
                                            </div>
                                            <input type="Password" name="password" class="form-control" placeholder="Password"/>
                                        </div><br />
                                        <div class="form-group mt-3">
                                            <input class="btn btn-block btn-dark" type="submit" name="submit" value="Iscrivi">
                                        </div>
                                        @csrf

                                    </form>
                                    <div class="form-group mt-3">
                                        <input class="btn btn-block btn-dark" type="submit" name="submit" value="Termina Senza Iscrizione">
                                    </div>
                                </div>
                                <div class="col-0 col-lg-3"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection
