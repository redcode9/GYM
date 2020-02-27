<?php

namespace App\Http\Controllers;

use App\Corso;
use App\Disciplina;
use App\Sala;
use App\Socio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GestioneCorsiController extends Controller
{
    public function carica(){
        $sale = Sala::all();
        return view("gestionecorsi",[
            "errore" => "",
            "sale" => $sale
        ]);
    }

    public function caricaCorso($id){
        $corso = Corso::find($id);

        return view("corso",[
            "errore" => "",
            "corso" => $corso,
        ]);
    }

}


