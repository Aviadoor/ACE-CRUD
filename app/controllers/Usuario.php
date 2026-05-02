<?php

class Usuario extends Control
{
    
    public function form()
    {

        $modelUsuario = $this -> load_model('UsuarioModel');
        
        $datos = [];
        
        $usuarios = $modelUsuario -> read();

        if (isset($usuarios))
        {
            $datos['usuarios'] = $usuarios;
        }

        if (isset($_POST['btn_enviarUsuario']))
        {

            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];

            $modelUsuario -> create($nombre, $correo, $telefono);

            header("Location: " . URL . "/usuario/form");

        }
        $this -> load_view('usuario', $datos);

    }

}