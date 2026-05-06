<?php

namespace app\models;

use app\lib\Database;

class Authentication
{
    private $conn;

    public function __construct()
    {

        $this -> conn = Database::connection();

    }

    public function new_user($user, $pass)
    {

        $sql = "INSERT INTO empleado (user, pass) VALUES ('$user', '$pass')";

        \mysqli_query($this -> conn, $sql);

    }

    public function validation($user, $pass)
    {
        $sqlPass = "SELECT pass FROM empleado AS e WHERE e.user='$user'";

        $queryPass = \mysqli_query($this -> conn, $sqlPass);

        $hash = \mysqli_fetch_array($queryPass)[0] ?? '';
        if(password_verify($pass, $hash))
        {

            return true;

        }

        return false;

    }

}