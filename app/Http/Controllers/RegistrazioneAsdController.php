<?php

namespace App\Http\Controllers;

use App\Associazione;
use Illuminate\Http\Request;

class RegistrazioneAsdController extends Controller
{

    public function registraAsd(Request $request){

        if ($request->isMethod("POST")){
            $asd = new Associazione;
            $asd->nome = $request->input("nome");
            $asd->iban = $request->input("iban");
            $asd->indirizzo = $request->input("indirizzo");
            $asd->cap = $request->input("cap");
            $asd->citta = $request->input("citta");
            $asd->provincia = $request->input("prov");
            $asd->telefono = $request->input("tel");
            $asd->p_iva = $request->input("piva");
            $asd->save();

            return redirect()->route("admin");

        } else {
            return view("registrazioneasd", [
                "errore" => ""
            ]);

        }
    }




}


