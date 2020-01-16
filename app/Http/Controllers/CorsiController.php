<?php

namespace App\Http\Controllers;

use App\Corso;
use App\Disciplina;
use App\Sala;
use App\Socio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CorsiController extends Controller
{
    //
    public function carica(){
        $sale = Sala::all();
        return view("corsi",[
            "errore" => "",
            "sale" => $sale
            ]);
    }

    public function caricaCorso($id){
        $corso = Corso::find($id);
        var_dump($corso->insegnato->dati_iscrizione);

        return view("corso",[
            "errore" => "",
            "corso" => $corso,
        ]);
    }
}
