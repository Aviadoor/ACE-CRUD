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

        mysqli_query($this -> conn, $sql);

    }

}