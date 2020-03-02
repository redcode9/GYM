<?php

namespace App\Http\Controllers;
use App\DatiFiscali;
use App\Iscritto;
use App\Tessera;
use App\Socio;
use App\Fornitore;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Corso;
use App\Disciplina;
use App\Esterno;
use App\Sala;
use App\Partecipazione;
use App\Transazione;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;
use App\Helpers;
use Symfony\Component\Console\Helper\Helper;

class JoinTuttiController extends Controller
{
    public function tabellaTuttiUtenti()
    {
        $join = DB::table('iscritto')
            ->join('socio', 'socio.iscrizione', '=', 'iscritto.id')
            ->join('esterno', 'esterno.iscrizione', '=', 'iscritto.id')
            ->select('socio.nome as nomeS', 'socio.cognome as cognomeS', 'esterno.nome as nomeE', 'esterno.cognome as cognomeE', 'socio.id as idS')
            ->get();

        $allsoci = Socio::all();
        $allest = Esterno::all();
        $allisc = Iscritto::all();
        $allfrnt = Fornitore::all();
        $sociest = ["soci" => $allsoci, "est" => $allest, "frnt" => $allfrnt];
        return view('VisualizzaTutti', ['tutti' => $join, 'sociest' => $sociest, 'alliscr' => $allisc, 'fornit' => $allfrnt]);
    }

    public function tabellaTuttiCorsi()
    {
        $join = DB::table('corso')
            ->join('disciplina', 'disciplina.id', '=', 'corso.disciplina')
            ->select('corso.nome as corsonm', 'disciplina.nome', 'corso.costo', 'corso.id', 'disciplina.id as discid')
            ->get();
        $allcorsis = Corso::all();
        $alldisc = Disciplina::all();

        return view('gestionecorsi', ['all' => $join, 'corsi' => $allcorsis, 'disciplina' => $alldisc]);
    }

    public function modificaCorso($id, $iddisc, Request $request)
    {
        $corsoid = Corso::find($id);
        if ($request->isMethod('GET')) {
            $oregiorni = json_decode($corsoid->orari);
            $giorni = Helpers::giorni();
            $orari = Helpers::orari();
            if (Auth::user()->ruolo === 'admin') {
                $disciid = Disciplina::find($iddisc);
            }

            return view('corsomodifica', ['corso' => $corsoid, 'disciplina' => $disciid, 'giorni' => $giorni, 'orari' => $orari]);


        }
        if ($request->isMethod('POST')) {
            $corsoid->nome = $request->post("nomeCorso");
            $corsoid->costo = $request->post("costo");
            $corsoid->data_inizio = $request->post("data_inizio");
            $corsoid->data_fine = $request->post("data_fine");
            //$corsoid->orario = $request->post("orari");
            $corsoid->discipline->nome = $request->post("nomeDisciplina");
            $corsoid->discipline->save();
            $corsoid->save();
            return redirect()->route("gestionecorsi");

        }
    }
        public function deleteCorso($id)
        {
            $corso = Corso::find($id);
            $partecipa = Partecipazione::all();
            foreach ($partecipa as $partecipazione) {
                if ($partecipazione->corso == $corso->id) {

                    return redirect()->route("gestionecorsi");

                } else
                    $corso->delete();

                return redirect()->route("gestionecorsi");
            }

        }

}
