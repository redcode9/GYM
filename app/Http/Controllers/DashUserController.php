<?php

namespace App\Http\Controllers;
use App\DatiFiscali;
use App\Iscritto;
use App\Tessera;
use App\Socio;
use App\Transazione;
use App\TransazioneEst;
use App\Esterno;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\Void_;


class DashUserController extends Controller
{
    public function dashuserazioni()
    {
        $SocioDB = DB::table('socio')
            ->join('transazione', 'socio.id', '=', 'transazione.socio')
            ->join('corso', 'corso.id', '=', 'transazione.corso')
            ->join('tessera', 'tessera.id', '=', 'socio.tessera')
            ->join('dati_fiscali', 'socio.id', '=', 'dati_fiscali.socio')
            ->select('socio.nome', 'socio.cognome', 'socio.tipo', 'socio.verbalizzato', 'socio.tessera', 'tessera.scad_tess', 'dati_fiscali.data_iscriz', 'tessera.data_tess', 'socio.id as socioid')
            ->get();

        $today = date('Y-m-d');

        $datemes = date_create();
        date_sub($datemes, date_interval_create_from_date_string('30 days'));
        $datemesU = date_create();
        date_sub($datemesU, date_interval_create_from_date_string('30 days'));

        $dateann = date_create();
        date_sub($dateann, date_interval_create_from_date_string('365 days'));
        $Sociozz = Socio::all();
        $Datifis = DatiFiscali::all();
        $tess = Tessera::all();
        $iscr = Iscritto::all();
        $alltransS = Transazione::whereBetween('created_at', [$datemesU, $today])
            ->where('tipo', '=', "Uscita")
            ->sum('importo');

        $alltransE = TransazioneEst::whereBetween('created_at', [$datemesU, $today])->sum('importo');
        $sumtransSST = Transazione::whereBetween('created_at', [$datemes, $today])->where('tipo', '=', "Entrata")->sum('importo');
        $sumtransSAN = Transazione::whereBetween('created_at', [$dateann, $today])->where('tipo', '=', "Entrata")->sum('importo');
        return view('templates.DashboardUser', ['socioz' => $SocioDB, 'allsoci' => $Sociozz, 'oggi' => $today,
            'datifs' => $Datifis, 'TESS' => $tess, 'ISCR' => $iscr, 'transzs' => $alltransS + $alltransE, 'sumtra' => $sumtransSST, 'sumtrann' => $sumtransSAN]);
  }

    public function aggtess($id)
    {
        DB::table('tessera')->where('id', $id)
            ->update(['scad_tess' => DB::raw("scad_tess + INTERVAL 1 YEAR")]);

        return redirect()->route("HomeUser");
    }

    public function aggmedcertf($id)
    {
        $today = date("Y-m-d");
        DB::table('iscritto')->where('id', $id)
            ->update(['cert_med_rilascio' => DB::raw("cert_med_rilascio + INTERVAL 3 YEAR")]);

        DB::table('iscritto')->where('id', $id)
            ->update(['cert_med_scadenza' => DB::raw("cert_med_scadenza + INTERVAL 3 YEAR")]);

        return redirect()->route("HomeUser");

    }
}
