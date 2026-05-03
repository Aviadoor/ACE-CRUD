<?php

namespace app\controllers;

use app\lib\Control;

class Usuario extends Control
{
    
    public function form()
    {

        $modelUsuario = $this -> load_model('Usuario');
        
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

        $modelUsuario -> closeDB();

    }

    public function update($id = [])
    {
        $modelUsuario = $this -> load_model('Usuario');
        
        $datos = [];

        $datos['usuario'] = $modelUsuario -> search($id);
        
        $this -> load_view('actualizarUsuario', $datos);

        if (isset($_POST['btn_enviar']))
        {

            $nombre = $_POST['nombre'];

            $correo = $_POST['correo'];

            $telefono = $_POST['telefono'];

            $modelUsuario -> update($id, $nombre, $correo, $telefono);

            header("Location: " . URL . "/usuario/form");

        }

        $modelUsuario -> closeDB();

    }

    public function delete($id = [])
    {

        $modelUsuario = $this -> load_model('Usuario');

        $modelUsuario -> delete($id);

        header("Location: " . URL . "/usuario/form");
        
        $modelUsuario -> closeDB();
    
    }

}