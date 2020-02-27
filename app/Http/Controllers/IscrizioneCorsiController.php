<?php

namespace App\Http\Controllers;

use App\Corso;
use App\Disciplina;
use App\Sala;
use App\Socio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IscrizioneCorsiController extends Controller
{
    public function carica(){
        $sale = Sala::all();
        return view("corsi",[
            "errore" => "",
            "sale" => $sale
        ]);
    }

    public function creazionecorso(){
        $sale = Sala::all();
        $insegnanti = Socio::tipo("insegnante")->get();
        return view('creazionecorso',[
            "errore" => "",
            "sale" => $sale,
            "insegnanti" => $insegnanti
        ]);
    }

    public function creazionedisciplina(){
        $sale = Sala::all();
        return view('creazionedisciplina',[
            "errore" => "",
            "sale" => $sale
        ]);
    }

    public function creazionecorsoPost( $id, Request $request){
        if (($request->has("termina"))){
            $corso = new Corso();
            $corso->nome = $request->post("nomeCorso");
            $corso->data_inizio = $request->post("data_inizio");
            $corso->data_fine = $request->post("data_fine");
            $corso->costo = $request->post("costo");
            if ($request->has("insegnante")){
                $corso->insegnante = $request->post("insegnante");
            }
            $corso->disciplina = $id;
            $corso->save();

            return redirect()->route("corsi");
        }
    }

    public function creazionedisciplinaPost(Request $request){
        if (($request->has("termina"))){
            $disciplina = new Disciplina();
            $disciplina->nome = $request->post("nomeDisciplina");
            $disciplina->sala = $request->post("sala");
            $disciplina->save();

            return redirect()->route("corsi");
        }
    }
}

