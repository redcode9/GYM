<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partecipazione extends Model
{
    protected $table = 'partecipazione';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    public function sala()
    {
        return $this->belongsTo('App\Sala',"id");
    }

    public function corsi()
    {
        return $this->hasMany(Corso::class,"disciplina");
    }


    protected $fillable = [
        'allievo', 'corso'
    ];


}
