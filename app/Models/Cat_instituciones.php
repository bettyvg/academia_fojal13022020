<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Collection;
use Eloquent;

class Cat_instituciones extends Eloquent
{
    protected $table = 'cat_instituciones';
    protected $primaryKey = 'id_institucion';
    public $timestamps = false;


}
