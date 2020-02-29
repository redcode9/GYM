<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransazioneEst extends Model
{
    protected $table = 'transazioneest';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;


    public function effettuataEst()
    {
        return $this->belongsTo(Esterno::class,"esterno");
    }
}
