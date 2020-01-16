<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iscritto extends Model
{
    //
    protected $table = 'iscritto';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

}
