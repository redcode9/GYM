<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('js/sort-table.css')}}">

    <!-- CSS collegato allo script per rendere ordinabili le tabelle-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--Script per la search bar delle tabelle-->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="{{asset('js/sort-table.js')}}"></script>  <!-- Script che serve a rendere ordinabili le tabelle-->
    <script src="{{asset('js/scripting.js')}}"></script> <!-- Script che serve per la dashboard a fare le magie-->
    <style>
        html, body {
            height: 100%;
        }
    </style>
</head>
<body>
<div class="container-fluid" style="height:100%">
    <div class="row" style="height:100%">
        @if ($menu === "on")
            <div class="col-lg-2" id="side-menu" style="padding-left: 0;">
                @include('templates.menu')
            </div>
        @elseif ($menu === "off")
            <div class="col-lg-1"></div>
        @endif
        <div class="col-12 col-lg-10" id="main">
            @section('corpo')
            @show
        </div>

    </div>
</div>

</body>
<script src="{{asset('js/Inserimento.js')}}"></script> <!-- Script che serve per l'inserimento dei dati in tabella-->
</html>
