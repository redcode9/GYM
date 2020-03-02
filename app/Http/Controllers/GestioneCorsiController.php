<?php

namespace App\Http\Controllers;

use App\Corso;
use App\Disciplina;
use App\Esterno;
use App\Sala;
use App\Socio;
use App\Partecipazione;
use App\Transazione;
use App\TransazioneEst;
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


    public function aggiungiAllievo($id, Request $request){

        $allievo = Socio::find($request->post('selAllievo'));

        $part = Partecipazione::firstOrNew(['allievo'=>$allievo->id, 'corso'=>$id]);
         $part->save();
        return redirect()->route('corsoupdate', ["id" => $id]);

    }

    public function eliminaPartecipante($id)
    {

        $part = Partecipazione::all()->where('allievo', '=', $id)->first();
        $corso = $part->corso;
        $part->delete();

        return redirect()->route('corsoupdate', ["id" => $corso]);

    }




    public function aggiungiInsegnante($id, Request $request){

        $ins= Socio::find($request->post('selInsegnante'));

        $corso = Corso::find($id);
        $part = Partecipazione::all()->where('corso', '=', $corso->id);


        $n_partecipanti = $part->count();
        $corso->insegnante = $ins->id;
        $corso->save();

        $trans = new Transazione;
        $trans->corso = $corso->id;
        $trans->socio = $ins->id;
        $trans->tipo = 'Uscita';
        $trans->importo = ((($corso->costo)*$n_partecipanti)*30)/100; //Dell'incasso totale di un corso, il 30% va di stipendio all'insegnante
        $trans->save();

        return redirect()->route('corsoupdate', ["id" => $id]);

    }


    public function eliminaInsegnCorso($id)
    {

        $corso = Corso::find($id);
        $corso->insegnante = null;
        $corso->save();

        return redirect()->route('corsoupdate', ["id" => $id]);

    }





    public function aggiungiStagista($id, Request $request){

        $stag = Esterno::find($request->post('selStagista'));

        $corso = Corso::find($id);
        $part = Partecipazione::all()->where('corsoupdate', '=', $corso->id);

        $n_partecipanti = $part->count();
        $stag->corso = $corso->id;
        $stag->save();

        $trans = new TransazioneEst;
        $trans->esterno = $stag->id;
        $trans->importo = ((($corso->costo)*$n_partecipanti)*30)/100; //Dell'incasso totale di un corso, il 30% va di stipendio all'insegnante
        $trans->save();

        return redirect()->route('corsoupdate', ['stag'=>$stag,"id" => $id]);
    }





    public function eliminaStagistaCorso($id)
    {

        $stag = Esterno::find($id);
        $corso = $stag->corso;
        $stag->corso = null;
        $stag->save();

        return redirect()->route('corsoupdate', ["id" => $corso]);

    }


}


