<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;


use App\Models\Cat_temas;


class temasController extends Controller
{
    public function temas()
    {
        $cat_temas = Cat_temas::all()->where('estatus', '=', 'activado');
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

        return View::make('temas', array('cat_temas'=>$cat_temas));
    }

   public function registrotemas()
    {
       $cat_temas = Cat_temas::all()->where('estatus', '=', 'activado');
        Cat_temas::create(request()->all());


        $alert = new \stdClass();
        $alert->message = 'El tema se creo correctamente.';
        $alert->type = 'success';
        return View::make('temas', array(
            'alert' => $alert, 'cat_temas'=>$cat_temas));
    }

    public function delete()
    {

    }

}
