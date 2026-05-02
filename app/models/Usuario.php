<?php
namespace models;

use Database;

class Usuario{
    
    private $conn;

    public function __construct()
    {
        
        $this -> conn = Database::connection();

    }

    public function read()
    {

        $sql = "SELECT * FROM usuario";

        $query = mysqli_query($this -> conn, $sql);

        //Clave => Valor de usuarios
        $usuarios = [];
        
        while ($row = mysqli_fetch_array($query))
        {

            $usuarios[$row['idUsuario']] = [

                $row['idUsuario'],
            
                $row['nombreUsuario'], 
                
                $row['correoUsuario'],
                
                $row['telefonoUsuario']
            ];

        }

        return $usuarios;

    }
}