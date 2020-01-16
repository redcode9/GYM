<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    //
    protected $table = 'disciplina';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    public function sala()
    {
        return $this->belongsTo('App\Sala',"sala");
    }

    public function corsi()
    {
        return $this->hasMany(Corso::class,"disciplina");
    }
}
