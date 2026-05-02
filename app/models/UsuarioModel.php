<?php

class UsuarioModel{
    
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

    public function create($nombre, $correo, $telefono)
    {

        $sql = "INSERT INTO usuario (nombreUsuario, correoUsuario, telefonoUsuario) VALUES ('$nombre', '$correo', '$telefono')";
        mysqli_query($this -> conn, $sql);

    }

    public function closeDB()
    {

        mysqli_close($this -> conn);
        
    }
}