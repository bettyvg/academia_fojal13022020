<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cat_ejecutivos;

class EjecutivosController extends Controller
{
    public function ejecutivos()
    {
        $cat_ejecutivos = Cat_ejecutivos::all()->where('estatus', '=', 'activo');

        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        return View::make('ejecutivos', array('cat_ejecutivos'=>$cat_ejecutivos));
    }

    public function ejecutivoscreate()    {
        //dd(request()->all());
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $cat_ejecutivos = Cat_ejecutivos::all();

                //dd($cat_ejecutivos);

                Cat_ejecutivos::create(request()->all());

                $alert = new \stdClass();
                $alert->message = 'La evaluación se envio correctamente';
                return View::make('ejecutivos', array(
                    'alert' => $alert,
                    'cat_ejecutivos' => $cat_ejecutivos));
                //return back();

            }else{

            }

        }catch (Exception $e) {
            $alert = new \stdClass();
            $alert->message = 'Ocurrió un error, por favor, contacte al administrador.';
            $alert->type = 'danger';
            return View::make('evaluacionplaticainfo',
                array(
                    'alert' => $alert)
            );
        }
    }

    public function delete_ejecutivos($id){

        $delete = Cat_ejecutivos::find($id);

        $delete->estatus = 'inactivo';
        $delete->save();

        flash("Se ha eliminado el ejecutivo ".$delete->nombre_ejecutivo .' '.$delete->apellido_paterno.' '.$delete->apellido_materno." de manera exitosa!")->success()->important();

        return back();

    }

    public function edit($id){

        $editar = Cat_ejecutivos::find($id);
        $cat_ejecutivos = Cat_ejecutivos::all()->where('estatus', '=', 'activo');

        $editar->save();

        //flash("Se ha eliminado el ejecutivo ".$editar->nombre_ejecutivo .' '.$editar->apellido_paterno.' '.$editar->apellido_materno." de manera exitosa!")->success()->important();

        return View::make('ejecutivos', array('cat_ejecutivos'=>$cat_ejecutivos));

    }




}
