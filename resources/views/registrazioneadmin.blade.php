@extends('templates.base', ['menu' => "off"])
<head>
    <script type="text/javascript" src="{{ url('js/confirmPassword.js') }}"></script>
</head>
@section('corpo')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div>
                    <p style="text-align: center"><img style="width: 221px;margin-left:-1.5rem"
                                                       src="{{asset('img/logo_gym3.png')}}" alt="Logo">
                    </p></div>
                <div class="jumbotron pb-3 pt-3" style="background-color: #fae8c6">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center mb-3">Registrazione Amministratore</h2>
                        </div>
                        <div class="col-12 mt-4">
                            {{--                            @if($errore!="")--}}
                            {{--                                {{$errore}}--}}
                            {{--                            @endif--}}
                            <div class="row">
                                <div class="col-0 col-lg-3"></div>
                                <div class="col-12 col-lg-6">
                                    <form method="post" action="{{route("admin")}}">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="background-color: #ffac14"><i
                                                        class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" name="username" class="form-control"
                                                   placeholder="Username" required>

                                        </div>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="background-color: #ffac14"><i
                                                        class="fas fa-key icon"></i></span>
                                            </div>
                                            <input type="password" name="password" id="password" class="form-control"
                                                   placeholder="Password" value="" required>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" style="background-color: #ffac14"><i
                                                        class="fas fa-key icon"></i></span>
                                            </div>
                                            <input type="password" name="repeatPassword" id="repeatPassword"
                                                   class="form-control" placeholder="Ripeti Password" value="" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input class="btn btn-block btn-dark" type="submit" name="submit"
                                                   value="Iscrivi e Termina" onclick="validatePassword()">
                                        </div>
                                        <div class="form-group mt-3">
                                            <input class="btn btn-block btn-dark" type="submit" name="submit"
                                                   value="Iscrivi e Registra Segreteria" onclick="validatePassword()">
                                        </div>
                                        @csrf

                                    </form>
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

