<?php

namespace app\controllers;

use app\lib\Control;

class Authentication extends Control
{

    public function __construct()
    {

        

    }

    public function login()
    {
        $user = ' ';

        $pass = ' ';

        $validation = false;

        if(isset($_POST['btn_login']))
        {

            $user = $this -> user_processing($_POST['user']);

            $pass = $_POST['password'];

            $AutModel = $this -> load_model('Authentication');

            $validation = $AutModel -> validation($user, $pass);

        }

        $datos = [

            'validation' => $validation,

            'user' => $user,

            'password' => $pass

        ];

        $this -> load_view('login', $datos);    

    }
    
    public function singup()
    {
        
        if(isset($_POST['btn_singup']))
        {

            $user = $this -> user_processing($_POST['user']);
            
            $pass = $this -> generate_hash($_POST['password']);

            $AutModel = $this -> load_model('Authentication');

            $AutModel -> new_user($user, $pass);

            header("Location: " . "./login");

        }

        $this -> load_view('singup');

    }

    protected function generate_hash($pass)
    {

        return password_hash($pass, PASSWORD_DEFAULT);

    } 

    protected function user_processing($user)
    {

        $characters_special = "/[#\*']/";

        $user = trim($user);

        $user = str_replace(' ', '', $user);

        $user = preg_replace($characters_special, '', $user);

        return $user;

    }

}