<?php
// app/lib/Database.php

class Database {
    private static $host = DB_HOST;

    private static $user = DB_USER;

    private static $pass = DB_PASS;

    private static $dbname = DB_NAME;


    public static function connection()
    {

        $connect = mysqli_connect(self::$host, self::$user, self::$pass);
        
        mysqli_select_db($connect, self::$dbname);

        return $connect;

    }

}