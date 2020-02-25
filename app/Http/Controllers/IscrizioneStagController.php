<?php


namespace App\Http\Controllers;

use App\Esterno;
use App\Iscritto;
use Illuminate\Http\Request;

class IscrizioneStagController extends Controller
{
    public function registrazione(Request $request){

        $iscritto = new Iscritto();
        $iscritto->cf = $request->post("cf");
        $iscritto->cellulare = $request->post("tel");
        $iscritto->email = $request->post("email");
        $iscritto->cap = $request->post("cap");
        $iscritto->citta = $request->post("citta");
        $iscritto->indirizzo = $request->post("indirizzo");
        $iscritto->provincia = $request->post("prov");
        $iscritto->dati_gestore()->associate(\Auth::user());
        $iscritto->save();

        $esterno = new Esterno();
        $esterno->nome = $request->post("nome");
        $esterno->cognome = $request->post("cognome");
        $esterno->genere = $request->post("sesso");
        $esterno->luogo_nasc = $request->post("nascita");
        $esterno->data_nasc = $request->post("data");
        $esterno->tipo = "stagista";
        $esterno->p_iva = $request->post("piva");
        $esterno->dati_iscrizione()->associate($iscritto);
        $esterno->save();

        return redirect()->route("stagista2", ["id"=> $iscritto->id]);
    }

    public function registrazioneCont($id, Request $request){
        $iscritto = Iscritto::find($id);

        //data1 numero scadenza
        $iscritto->ass_rilascio = $request->post("data1");
        $iscritto->ass_scad = $request->post("scadenza1");
        $iscritto->ass_num = $request->post("numero");
        //data2 scadenza2
        $iscritto->cert_med_scadenza =  $request->post("scadenza2");
        $iscritto->cert_med_rilascio =  $request->post("data2");

        $iscritto->note = json_encode(["ASS"=> $request->post("note1"), "CRT"=> $request->post("note2")]);

        $iscritto->save();

        return redirect()->route("iscrizioni");
    }
}
