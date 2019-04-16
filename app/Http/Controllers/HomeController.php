<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Database\QueryException;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Controller as Controller;


class HomeController extends Controller
{
    public function inicio()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }



        return View::make('inicio');
    }

    public function usuarios3()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }
        return View::make('usuarios3');
    }

    public function capacitores()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

                return View::make('capacitores');
    }

    public function alumnos()
    {
        $usuario_session = Session::get('usuario');
        if (!$usuario_session) {
            return Redirect::route('login');
        }

                return View::make('alumnos');
    }




}
