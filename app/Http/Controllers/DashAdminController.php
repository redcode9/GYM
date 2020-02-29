<?php

namespace App\Http\Controllers;
use App\DatiFiscali;
use App\Iscritto;
use App\Tessera;
use App\Socio;
use App\Esterno;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class DashAdminController extends Controller
{
    public function dashaazioni()
    {
        $SocioDB = DB::table('socio')
            ->join('transazione', 'socio.id', '=', 'transazione.socio')
            ->join('corso', 'corso.id', '=', 'transazione.corso')
            ->join('tessera', 'tessera.id', '=', 'socio.tessera')
            ->join('dati_fiscali', 'socio.id', '=', 'dati_fiscali.socio')
            ->select('socio.nome', 'socio.cognome', 'socio.tipo', 'socio.verbalizzato', 'socio.tessera', 'tessera.scad_tess', 'dati_fiscali.data_iscriz', 'tessera.data_tess', 'socio.id as socioid')
            ->get();

        $today = date("Y-m-d");
        $Sociozz = Socio::all();
        $Datifis = DatiFiscali::all();
        $tess = Tessera::all();
        $iscr = Iscritto::all();
        return view('templates.Dashboard', ['socioz' => $SocioDB, 'allsoci' => $Sociozz, 'oggi' => $today, 'datifs' => $Datifis, 'TESS' => $tess, 'ISCR' => $iscr]);
    }

    public function verbalizzoNO($id)
    {

        $socio = Socio::find($id);
        $socio->delete();
        return view('HomeAdmin');
    }

    public function verbalizzoSI($id)
    {

        $socio = Socio::find($id);
        $socio->verbalizzato = 1;
        $socio->save();


    }

    public function aggtess($id)
    {
        DB::table('tessera')->where('id', $id)
            ->update(['scad_tess' => DB::raw("scad_tess + INTERVAL 1 YEAR")]);

        return view('HomeAdmin');
    }

    public function aggmedcertf($id)
    {
        $today = date("Y-m-d");
        DB::table('iscritto')->where('id', $id)
            ->update(['cert_med_rilascio' =>DB::raw("cert_med_rilascio + INTERVAL 3 YEAR")]);

             DB::table('iscritto')->where('id', $id)
            ->update(['cert_med_scadenza' => DB::raw( "cert_med_scadenza + INTERVAL 3 YEAR")]);

        return view('HomeAdmin');

    }
}
