<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transazione extends Model
{
    protected $table = 'transazione';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;



    public function inerenteCorso()
    {
        return $this->belongsTo(Corso::class,"corso");
    }

    public function effettuata()
    {
        return $this->belongsTo(Socio::class,"socio");
    }
}
