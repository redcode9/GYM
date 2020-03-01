<?php

namespace App\Http\Controllers;


use App\Associazione;
use App\DatiFiscali;
use App\Esterno;
use App\Iscritto;
use App\Sala;
use App\Corso;
use App\Socio;
use App\Tessera;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IscrizioneCollaboratoreController extends Controller
{

    public function registrazione(Request $request)
    {
        if ($request->has("nome")) {
            $iscritto = new Iscritto;
            $collab = new Esterno;
            $collab->nome = $request->input("nome");
            $collab->cognome = $request->input("cognome");
            $collab->genere = $request->input("sesso");
            $collab->luogo_nasc = $request->input("nascita");
            $collab->data_nasc = $request->input("data");

            $iscritto->indirizzo = $request->input("indirizzo");
            $iscritto->cap = $request->input("cap");
            $iscritto->citta = $request->input("citta");
            $iscritto->provincia = $request->input("prov");
            $iscritto->cf = $request->input("cf");
            $iscritto->cellulare = $request->input("tel");
            $iscritto->email = $request->input("email");

            $iscritto->gestore = Auth::id();
            $iscritto->save();

            $collab->iscrizione = $iscritto->id;
            $collab->save();


            return redirect()->route("collaboratore2", ["id" => $collab->id]);


        } else {
            return view("iscrizionecollaboratore", [
                "errore" => ""
            ]);

        }
    }

    public function collaboratore2($id, Request $request)
    {

        if ($request->has("data1")) {
            $collab = Esterno::find($id);
            $iscritto = Iscritto::find($collab->iscrizione);
            //data1 numero scadenza
            $iscritto->ass_rilascio = $request->get("data1");
            $iscritto->ass_scad = $request->get("scadenza1");
            $iscritto->ass_num = $request->get("numero");
            //data2 scadenza2
            $iscritto->cert_med_scadenza = $request->get("scadenza2");
            $iscritto->cert_med_rilascio = $request->get("data2");

            $iscritto->save();

            return redirect()->route('collaboratore3', ["id" => $collab->id]);

        } else {
            return view("iscrizionecollaboratore2", [
                    "errore" => "",
                    "collab" => $id
                ]
            );

        }
    }

    public function collaboratore3($id, Request $request)
    {

        if ($request->isMethod("POST")) {
            $collab = Esterno::find($id);
            $socio = new Socio;
            $tessera = new Tessera;
            $tessera->data_tess = $request->post("emissione");
            $tessera->scad_tess = $request->post("scadenza");
            $tessera->save();
            $collab->tessera = $tessera->id;

            if ($request->tipoSocio == 'option1') {
                $socio->tipo = 'allievo';
            } elseif ($request->tipoSocio == 'option2') {
                $socio->tipo = 'insegnante';
            }
            $socio->verbalizzato = 0;
            $socio->fondatore = 0;
            $socio->iscrizione = $collab->iscrizione;
            $socio->tessera = $tessera->id;
            $socio->nome = $collab->nome;
            $socio->cognome = $collab->cognome;
            $socio->genere = $collab->genere;
            $socio->luogo_nasc = $collab->luogo_nasc;
            $socio->data_nasc = $collab->data_nasc;

            //dati fiscali
            //return redirect()->route();
            //echo $request->get("importo");
            $datidiscali = new DatiFiscali;
            $datidiscali->pagamento = $request->get("pagamento");
            $datidiscali->descrizione = $request->get("descrizione");
            //$datidiscali->importo = $request->get("importo");
            $datidiscali->tipo_doc = $request->get("tipoDocumento");
            $datidiscali->data_iscriz = date("Y-m-d");

            $socio->dati_fiscali = $datidiscali->id;
            $socio->save();

            $collab->socio = $socio->id;
            $collab->dati_fiscali = $datidiscali->id;
            $collab->save();
            $datidiscali->socio = $socio->id;
            $datidiscali->save();

            $corso = Corso::find($id);
            if($corso > 0){
                return redirect()->route('collaboratore4', ["id" => $socio->id]);
            } else {
                return redirect()->route('HomeAdmin');
            }


        } else {
            //$dati = DatiFiscali::where("tipo_doc", "F")->count();
            //$ass = Associazione::all()->first();
            //$imp = $ass->importo;
            //for test
            $n_tess = Tessera::max("id");
            $n_tess += 1;
            $imp = 20;
            $fattura = DatiFiscali::where("tipo_doc", "F")->count() + 1;
            $ricevutaN = DatiFiscali::where("tipo_doc", "RN")->count() + 1;
            $ricevuta = DatiFiscali::where("tipo_doc", "R")->count() + 1;
            $ricevutaF = DatiFiscali::where("tipo_doc", "RF")->count() + 1;

            return view("iscrizionecollaboratore3", [
                "errore" => "",
                "collab" => $id,
                "n_tess" => $n_tess,
                "F" => $fattura,
                "RN" => $ricevutaN,
                "R" => $ricevuta,
                "RF" => $ricevutaF,
                "importo" => $imp
            ]);
        }
    }

    public function collaboratore4($id, Request $request)
    {
        {

            $socio = Socio::find($id);
            $collab = Esterno::where("socio", $id)->first();
            $sale = Sala::all();

            $years = Carbon::parse($socio->data_nasc)->age; //calcola l'età dell'iscritto

            if ($request->isMethod("POST")) {
                return redirect()->route('HomeAdmin');
            } else {

                return view("iscrizionecollaboratore4", [
                    "errore" => "",
                    "sale" => $sale,
                    "collab" => $collab->id,
                    "socio" => $socio,
                    "years" => $years
                ]);
            }
        }
    }
}
