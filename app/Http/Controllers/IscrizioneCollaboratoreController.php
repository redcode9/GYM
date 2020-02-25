<?php

namespace App\Http\Controllers;

use App\Esterno;
use App\Iscritto;
use Illuminate\Http\Request;

class IscrizioneCollaboratoreController extends Controller
{

    public function registrazione(Request $request){

        if ($request->isMethod('POST')) {
            $iscritto = new Iscritto;
            $collab = new Esterno;

            return redirect()->route("socio2", ["id" => $collab->id]);


        } else {
            return view("iscrizionecollaboratore", [
                "errore" => ""
            ]);

        }
    }
}
