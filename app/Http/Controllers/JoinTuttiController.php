<?php

namespace App\Http\Controllers;
use App\DatiFiscali;
use App\Iscritto;
use App\Tessera;
use App\Socio;
use App\Fornitore;
use App\Esterno;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


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
        $sociest = ["soci"=>$allsoci, "est"=>$allest, "frnt"=>$allfrnt];
        return view('VisualizzaTutti', ['tutti' => $join, 'sociest'=>$sociest,'alliscr' => $allisc, 'fornit' => $allfrnt]);
    }

}