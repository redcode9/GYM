<?php

namespace App\Http\Controllers;

use App\Corso;
use App\Disciplina;
use App\Sala;
use App\Socio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IscrizioneUtenteCorsiController extends Controller
{
    public function caricaAllievo(){
        $sale = Sala::all();
        return view("allievoacorso",[
            "errore" => "",
            "sale" => $sale
        ]);
    }

    public function caricaInsegnante(){
        $sale = Sala::all();
        return view("insegnanteacorso",[
            "errore" => "",
            "sale" => $sale
        ]);
    }

}

