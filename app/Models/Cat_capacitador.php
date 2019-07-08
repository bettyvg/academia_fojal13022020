<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Collection;
use Eloquent;

class Cat_capacitador extends Eloquent
{
    protected $table = 'cat_capacitador';
    protected $primaryKey = 'id_capacitador';
    public $timestamps = false;

    public function capacitador()
    {
        return $this->hasMany('App\Models\EvaluacionCapacitador', 'id_capacitador', 'id_capacitador');
    }


}
