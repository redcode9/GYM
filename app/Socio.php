<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    //
    protected $table = 'socio';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    /**
     * @param Builder $query
     * @param String $tipo
     * @return Builder
     */
    public function scopeTipo($query, $tipo)
    {
        return $query->where('tipo', '=', $tipo);
    }

    public function insegna()
    {
        return $this->hasOne(Corso::class,"insegnante");
    }

    public function dati_tessera()
    {
        return $this->belongsTo(Tessera::class,"tessera");
    }

    public function partecipa()
    {
        return $this->belongsToMany(Corso::class,"partecipazione","allievo","corso");
    }

    public function dati_iscrizione()
    {
        return $this->belongsTo(Iscritto::class, 'iscrizione');
    }

}
