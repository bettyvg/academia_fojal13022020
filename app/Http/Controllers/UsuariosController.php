<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use Illuminate\Routing\Controller as BaseController;

class UsuariosController extends BaseController {

    /**
     * Muestra el login
     */
    public function login() {

        $title = 'Inicio de Sesión';

        try {
            // Si es por método post
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (Input::get('usuario') && Input::get('contrasena')) {

                    $usuario = Usuario::where('correo_electronico', Input::get('usuario'))->first();
                    $alert = null;
                    // Verifica que exista el usuario y que la contraseña sea correcta
                    if ($usuario && password_verify(Input::get('contrasena'), $usuario->password)) {

                        $usuario->last_login = date('Y-m-d');
                        $usuario->last_ip  = $_SERVER['REMOTE_ADDR'];

                        $usuario->save();

                        Session::put('usuario', $usuario);
                        Session::save();

                        return Redirect::route('inicio');
                    } else {
                        $alert = new \stdClass();
                        $alert->message = 'La contraseña o el usuario son incorrectos.';
                        $alert->type = 'danger';

                        return View::make('usuarios.login', array(
                            'alert' => $alert
                        ));
                    }
                    return View::make('usuarios.login', array(
                        'title' => $title,
                        'usuario' => $usuario,
                        'alert' => $alert
                    ));
                } else {

                }
            }
            return View::make('usuarios.login', array(
                'title' => $title
            ));
        } catch (QueryException $exception) {
            $alert = new \stdClass();
            $alert->message = 'Ocurrió un error, por favor, contacte al administrador. ' .$exception->getMessage();
            $alert->type = 'danger';
            return View::make('usuarios.login', array(
                'title' => $title,
                'alert' => $alert
            ));
        }
    }

    public function registro(){

        try {
            $title = 'Registro de usuarios';
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                dd(Input::all());
                $usuario = new Usuario();
                if(Input::get('confirma-contrasena') == Input::get('contrasena'))
                {
                    $usuario->usuario = Input::get('usuario');
                    $usuario->nombre = Input::get('nombre');
                    $usuario->apellido_paterno = Input::get('apat');
                    $usuario->apellido_materno = Input::get('amat');
                    $usuario->correo_electronico = Input::get('correo');
                    $usuario->area = Input::get('area');
                    $usuario->puesto = Input::get('puesto');
                    $usuario->extension = Input::get('extension');
                    $usuario->password = Hash::make(Input::get('password'));

                    $usuario->save();

                    $alert = new \stdClass();
                    $alert->message = 'El usuario se creo correctamente.';
                    $alert->type = 'success';
                    return View::make('usuarios.registro', array(
                        'title' => $title,
                        'alert' => $alert
                    ));

                }else{
                    $alert = new \stdClass();
                    $alert->message = 'Las contraseñas no coinciden.';
                    $alert->type = 'danger';
                    return View::make('usuarios.registro', array(
                        'title' => $title,
                        'alert' => $alert
                    ));
                }

            }else{
                return View::make('usuarios.registro');
            }

        } catch (Exception $e) {
            $alert = new \stdClass();
            $alert->message = 'Ocurrió un error, por favor, contacte al administrador.';
            $alert->type = 'danger';
            return View::make('usuarios.registro', array(
                'title' => $title,
                'alert' => $alert
            ));
        }

    }

    public function edit_user($id){
        $usuario_session = Session::get('usuario');
        if(!$usuario_session){
            return Redirect::route('login');
        }
        try {
            $title = 'Edicion de usuario';
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $usuario = Usuario::find($id);
                if(Input::get('confirma-contrasena') == Input::get('contrasena'))
                {
                    $usuario->usuario = Input::get('usuario');
                    $usuario->nombre = Input::get('nombre');
                    $usuario->apellido_paterno = Input::get('apat');
                    $usuario->apellido_materno = Input::get('amat');
                    $usuario->correo_electronico = Input::get('correo');
                    $usuario->area = Input::get('area');
                    $usuario->puesto = Input::get('puesto');
                    $usuario->extension = Input::get('extension');

                    if(!Input::get('password') == ''){
                        $usuario->password = Hash::make(Input::get('password'));
                    }

                    $usuario->save();

                    $alert = new \stdClass();
                    $alert->message = 'El usuario se actualizo correctamente.';
                    $alert->type = 'success';
                    return View::make('usuarios.registro', array('alert' => $alert, 'edit_user' => $usuario, 'title' => $title));

                }else{
                    $alert = new \stdClass();
                    $alert->message = 'Las contraseñas no coinciden.';
                    $alert->type = 'danger';
                    return View::make('usuarios.registro', array(
                        'title' => $title,
                        'alert' => $alert
                    ));
                }

            }else{
                $edit_user = Usuario::find($id);
                return View::make('usuarios.registro', array('edit_user' => $edit_user));
            }

        } catch (Exception $e) {
            $alert = new \stdClass();
            $alert->message = 'Ocurrió un error, por favor, contacte al administrador.';
            $alert->type = 'danger';
            return View::make('usuarios.registro', array(
                'title' => $title,
                'alert' => $alert
            ));
        }

    }
    /**
     * Cierra la sesión
     */
    public function signout() {
        Session::flush();
        return Redirect::route('login');
    }

    public function mostrar_usuarios(){
        $usuarios = Usuario::all();

        return View::make('usuarios.usuarios', array('usuarios' => $usuarios));
    }

    public function delete_user ($id){
        $delete = Usuario::find($id);
        if($delete->delete()){
            return response()->json('Se elimino correctamente','200');
        }else{
            return response()->json('Error al eliminar usuario','400');
        }
    }

    /**
     * Interfaz de inicio
     */
    public function inicio() {
        return View::make('inicio');
    }

}

