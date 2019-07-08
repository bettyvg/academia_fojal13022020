<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Collection;
use Eloquent;

class Cat_ejecutivos extends Eloquent
{
    protected $table = 'cat_ejecutivos';
    protected $primaryKey = 'id_ejecutivo';
    public $timestamps = false;


}

