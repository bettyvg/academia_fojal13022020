<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class evaluacion extends Model
{
    protected $table = 'evaluacion';
    protected $primaryKey = 'id_evaluacion';

    protected $fillable = ['nombre','correo','id_ejecutivo','telefono','curp','municipio','puntualidad','conocimiento','capacidad','claridad','utilidad','modelo','razonasiste',
        'personajuridica','altahacienda','anosalta', 'montofinanciamiento','updated_at','created_at'];


}
