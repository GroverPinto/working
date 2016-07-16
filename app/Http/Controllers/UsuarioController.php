<?php

namespace Illa\Http\Controllers;

use Illuminate\Http\Request;
use Illa\Http\Requests;

// Modelo.
use Illa\Usuario_model;
// Generador de claves Uuid.
use Webpatser\Uuid\Uuid;
use Session;
use Redirect;

// Requests con reglas personalizadas.
// use Illa\Http\Requests\UsuarioCreateRequest;

class UsuarioController extends Controller
{
    // Funcion que se ejecuta de manera predeterminada.
    public function index(){
      $users = Usuario_model::All();
      return view('usuario.inicio',compact('users'));
    }

    public function create(){
      return view('usuario.registro');
    }

}
