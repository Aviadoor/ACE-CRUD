<?php
require_once __DIR__ . '/../models/Usuario.php';

use models\Usuario as ModelUsuario;

class Usuario extends Control
{
    
    public function form()
    {
        $datos = [];

        $usuarios = new ModelUsuario;

        $usuarios = $usuarios -> read();

        if (isset($usuarios))
        {

            $datos['usuarios'] = $usuarios;

        }

        $this -> load_view('usuario', $datos);

    }

    public function mostrar()
    {

        $this -> load_model('read');

    }

}