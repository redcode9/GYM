<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tessera extends Model
{
    protected $table = 'tessera';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
