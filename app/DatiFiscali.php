<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatiFiscali extends Model
{
    //
    protected $table = 'dati_fiscali';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
