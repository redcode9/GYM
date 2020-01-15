<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Associazione extends Model
{
    //
    protected $table = 'associazione';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
