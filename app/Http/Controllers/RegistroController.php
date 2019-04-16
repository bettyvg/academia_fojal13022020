<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Registro;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Database\QueryException;
use Illuminate\Routing\Controller as BaseController;




class RegistroController extends BaseController
{
    public function vinculacion()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        return View::make('vinculacion');
    }

    public function registro(){

        try {
            $title = 'Registro de platica informativa';

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $registro = new Registro();

                    $registro->nombre = Input::get('nombre');
                    $registro->apellido_paterno = Input::get('apat');
                    $registro->apellido_materno = Input::get('amat');
                    $registro->genero = Input::get('genero');
                    $registro->fecha_nacimiento = Input::get('fechanacimiento');
                    $registro->estado_nacimiento = Input::get('estado');
                    $registro->municipio = Input::get('municipio');
                    $registro->correo = Input::get('correo');
                    $registro->telefono = Input::get('telefono');
                    $registro->escolaridad = Input::get('escolaridad');
                    $registro->ocupacion = Input::get('ocupacion');
                    $registro->save();

            }else{
                return View::make('vinculacion');
            }

        } catch (Exception $e) {
            $alert = new \stdClass();
            $alert->message = 'Ocurrió un error, por favor, contacte al administrador.';
            $alert->type = 'danger';
            return View::make('vinculacion');
            array(
                'title' => $title,
                'alert' => $alert
            );
        }

    }
}
