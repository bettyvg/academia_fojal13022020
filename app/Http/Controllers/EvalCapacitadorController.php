<?php

namespace App\Http\Controllers;

use App\Http\Requests\EvaluacionCapaRequest;
use Illuminate\Http\Request;
use App\Models\Cat_municipios;
use App\Models\EvaluacionCapacitador;
use App\Models\Cat_capacitador;
use App\Models\Cat_instituciones;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Scope;
use App\Models\Cat_entidades;
use App\Models\Cat_ejecutivos;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Collection;
use \Illuminate\Database\QueryException;
use Illuminate\Routing\Controller as BaseController;
use App\EvaluacionCap;
use Illuminate\Routing\Controller as Controller;

class EvalCapacitadorController extends Controller
{

    //
    public function inicioevaluacion()
    {

        $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
        $cat_capacitador = Cat_capacitador::select('id_capacitador','nom_cap', 'apellido_paterno', 'apellido_materno')->orderBy('nom_cap', 'ASC')->get();
        $cat_instituciones = Cat_instituciones::all();
        $usuario_session = Session::get('usuario');
        $evaluacioncapacitador = EvaluacionCapacitador::all();
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        return View::make('EvaluacionCapacitadores', array('cat_municipios'=>$cat_municipios, 'cat_capacitador'=>$cat_capacitador, 'cat_instituciones'=>$cat_instituciones));
    }


    public function EvaluacionCapacitadores()
    {
        $busqueda = EvaluacionCapacitador::OrderBy('id_capacitador', 'DESC');
        $cat_municipios = Cat_municipios::where('cve_compuesta_ent_mun', 'like', '14%')->orderBy('nom_mun', 'ASC')->get();
        $cat_capacitador = Cat_capacitador::select('id_capacitador', 'nom_cap', 'apellido_paterno', 'apellido_materno')->orderBy('nom_cap', 'ASC')->get();
        $cat_instituciones = Cat_instituciones::all();
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {


                EvaluacionCapacitador::create(request()->all());



                $alert2 = new \stdClass();
                $alert2->message = 'La evaluación se envio correctamente';
                $alert2->type = 'success';
                return View::make('EvaluacionCapacitadores', array(
                    'alert2' => $alert2, 'cat_municipios' => $cat_municipios, 'cat_capacitador' => $cat_capacitador, 'cat_instituciones' => $cat_instituciones, 'busqueda'=>$busqueda));

                //return back();
            } else {

            }
        } catch (Exception $e) {
            $alert2 = new \stdClass();
            $alert2->message = 'Ocurrió un error, por favor, contacte al administrador.';
            $alert2->type = 'danger';
            return View::make('EvaluacionCapacitadores',
                array(
                    'alert' => $alert2, 'cat_municipios' => $cat_municipios, 'cat_capacitador' => $cat_capacitador,'busqueda'=>$busqueda)
            );
        }
    }


}
