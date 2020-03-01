<?php


namespace App\Http\Controllers;

use App\Iscritto;
use Illuminate\Http\Request;
use App\Esterno;
use App\Socio;
use App\Fornitore;

class GestioniController extends Controller
{
    public function gestioneutenti()
    {
        return view('GestioneUtenti');
    }

    //-------------------------------------------------------//
    //GESTIONE SOCI


    public function richiediFondatore($id){

        $socio = Socio::find($id);
        $socio->fondatore = 2;
        $socio->save();

        return redirect()->route('GestioneSoci');


    }


    public function editSocio($id, Request $request){

        if ($request->isMethod('POST')){
            $socio = Socio::find($id);

            $socio->nome = $request->input('nome');
            $socio->cognome = $request->input('cognome');


            $socio->save();

            return redirect()->route('GestioneSoci');

        }else {

            return view('editSocioView', [

                "errore" => "",
                "id" => $id,
                $socio = Socio::find($id),
                "socio" => $socio
            ]);
        }

    }

    public function deleteSocio($id){

        Socio::destroy($id);
        return redirect()->route('GestioneSoci');
    }

    //GESTIONE FORNITORI



    public function editFornitore($id, Request $request){

        if ($request->isMethod('POST')){
        $fornitore = Fornitore::find($id);

        $fornitore->rag_sociale = $request->input('ragione');
        $fornitore->tipologia = $request->input('tipologia');

        $fornitore->save();

        return redirect()->route('GestioneFornitori');

        }else {

        return view('editFornitoreView', [

            "errore" => "",
            "id" => $id,
            $fornitore = Fornitore::find($id),
            "forn" => $fornitore
        ]);
        }


    }

    public function deleteFornitore($id){

        Fornitore::destroy($id);
        return redirect()->route('GestioneFornitori');
    }

    //GESTIONE COLLABORATORI
    public function editCollab($id, Request $request){


        if ($request->isMethod('POST')){
            $collaboratore = Esterno::find($id);

            $collaboratore->nome= $request->input('nome');
            $collaboratore->cognome = $request->input('cognome');

            $collaboratore->save();

            return redirect()->route('GestioneCollaboratori');

        }else {

            return view('editCollaboratoreView', [

                "errore" => "",
                "id" => $id,
                $collaboratore = Esterno::find($id),
                "collab" => $collaboratore
            ]);
        }


    }


    public function deleteCollab($id){

        Esterno::destroy($id);
        return redirect()->route('GestioneCollaboratori');
    }


    //GESTIONE STAGISTI
    public function editStagista($id, Request $request){


        if ($request->isMethod('POST')){
            $stagista = Esterno::find($id);

            $stagista->nome= $request->input('nome');
            $stagista->cognome = $request->input('cognome');

            $stagista->save();

            return redirect()->route('GestioneStagisti');

        }else {

            return view('editStagistaView', [

                "errore" => "",
                "id" => $id,
                $stagista = Esterno::find($id),
                "stag" => $stagista
            ]);
        }


    }


    public function deleteStagista($id){

        Esterno::destroy($id);
        return redirect()->route('GestioneStagisti');
    }


    //VISUALIZZA TUTTI

    public function editTutti($id, Request $request){

        if ($request->isMethod('POST')){
            $iscritto = Iscritto::find($id);

            $iscritto->nome = $request->input('nome');
            $iscritto->cognome = $request->input('cognome');

            $iscritto->save();

            return redirect()->route('VisualizzaTutti');

        }else {

            return view('editTuttiView', [

                "errore" => "",
                "id" => $id,
                $iscritto = Iscritto::find($id),
                "tutti" => $iscritto
            ]);
        }


    }

    public function deleteTutti($id){

        Iscritto::destroy($id);
        return redirect()->route('VisualizzaTutti');
    }




}
