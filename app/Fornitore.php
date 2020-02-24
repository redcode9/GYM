<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornitore extends Model
{
    protected $table = 'fornitore';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    public function dati_iscrizione()
    {
        return $this->belongsTo(Iscritto::class, 'iscrizione');
    }
}
