<?php

namespace App\Http\Controllers;

use App\Esterno;
use App\Fornitore;
use App\Iscritto;
use Illuminate\Http\Request;

class IscrizioneFornController extends Controller
{

    public function registrazione(Request $request){

        if ($request->isMethod('POST')) {

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

            $forn = new Fornitore();
            $forn->rag_sociale = $request->post("ragione");

            if($request->has("altro") && $request->post("altro") != "") {
                $forn->tipologia = $request->post("altro");
            } else {
                $forn->tipologia = $request->post("tipologia");
            }

            $forn->p_iva = $request->post("piva");

            $forn->dati_iscrizione()->associate($iscritto);

            $forn->save();

            return redirect()->route("iscrizioni");

        } else {
            return view("iscrizionecollaboratore", [
                "errore" => ""
            ]);

        }
    }
}

