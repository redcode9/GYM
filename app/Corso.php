<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corso extends Model
{
    //
    protected $table = 'corso';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    public function discipline()
    {
        return $this->belongsTo(Disciplina::class,"disciplina");
    }

    public function insegnato()
    {
        return $this->belongsTo(Socio::class,"insegnante");
    }

    public function insegnatoStagista()
    {
        return $this->belongsTo(Esterno::class,"stagista");
    }


    public function partecipa()
    {
        return $this->belongsToMany(Socio::class,"partecipazione","corso","allievo");
    }
}
