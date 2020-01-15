<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Esterno extends Model
{
    protected $table = 'esterno';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    public function dati_iscrizione()
    {
        return $this->belongsTo(Iscritto::class, 'iscrizione');
    }

    public function dati_tessera()
    {
        return $this->belongsTo(Tessera::class, 'tessera');
    }
}
