<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div>
                <p style="text-align: center"><img style="width: 30%;" src="{{asset('img/logo_gym3.png')}}" alt="Logo">
                </p></div>
            <div class="jumbotron pb-3 pt-3" style="background-color: #fae8c6">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center">Login</h1>
                    </div>
                    <div class="col-12 mt-4">
                        @if($errore!="")
                            {{$errore}}
                        @endif
                        <div class="row">
                            <div class="col-0 col-lg-3"></div>
                            <div class="col-12 col-lg-6">
                                <form method="post" action="{{route("login")}}">
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
                                    <div class="form-group" >
                                        <input class="btn btn-block btn-dark" type="submit" name="submit" value="Accedi">
                                    </div>
                                    <div class="form-group">
                                        <a class="nav-link mt-1 text-light btn btn-dark" href="{{route('asd')}}">Registra ASD</a>
                                    </div>
                                    @csrf

                                </form>
                                <a class="nav-link text-center text-dark" href="">Password dimenticata?</a>
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
</body>
</html>
