<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    //
    protected $table = 'sala';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    public function disciplina()
    {
        return $this->hasMany('App\Disciplina',"sala");
    }
}
