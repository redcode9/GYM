<?php

namespace App\Http\Controllers;

use App\Associazione;
use App\Corso;
use App\Disciplina;
use App\Sala;
use App\Socio;
use App\Associazione;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Helpers;

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
        $ass = Associazione::all()->first();
        $sale = Sala::all();
        $insegnanti = Socio::tipo("insegnante")->get();
        $orari = Helpers::orari();
        $giorni = Helpers::giorni();

        $orari = Helpers::arrayExcept($orari, $ass->giorno_ap, $ass->giorno_chius);
        $giorni = Helpers::arrayExcept($giorni, $ass->orario_ap, $ass->orario_chius);

        if ($orari === false){
            $orari = Helpers::orari();
        }
        if ($giorni === false){
            $giorni = Helpers::giorni();
        }

        return view('creazionecorso',[
            "errore" => "",
            "sale" => $sale,
            "insegnanti" => $insegnanti,
            "orari" =>$orari,
            "giorni"=>$giorni
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
            $corso->orari = json_encode($request->post("orari"));
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

