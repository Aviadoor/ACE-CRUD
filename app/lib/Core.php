<?php

namespace app\lib;

use app\lib\Control;

class Core extends Control{
    protected $controller, $method, $parameters;

    public function __construct()
    {
        /* 
        Consideraciones:
        $url es un array
        $url = [
            'controller' => 'controller',
            'metodoController' => 'metodo',
            'parametrosMetodos' => 'parametros'
        ]
        */

        $url = $this -> getUrl();
        
        if (!(is_null($url)))
        {

            if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php'))
            {
    
                $this -> controller = ucwords($url[0]);
    
                unset($url[0]);
    
                require_once APP . '/' . 'controllers/' . $this -> controller . '.php';
                
                $nombreCompletoClase = 'app\\controllers\\' . $this -> controller;

                $this -> controller = new $nombreCompletoClase;
                
                if(isset($url[1]))
                {
        
                    if(method_exists($this -> controller, $url[1]))
                    {
        
                        $this -> method = $url[1];
                        
                        unset($url[1]);
        
                    }
        
                    $this -> parameters = $url ? array_values($url) : [];
            
                    //call_user_func_array([objeto, metodo], parametros)
                    //ejecuta el metodo de un objeto
                    if (is_object($this -> controller)){
                        call_user_func_array([$this -> controller, $this -> method], $this -> parameters);
                    }
                }
        
            }

        }
        else
        {

            $this -> load_view('home');

        }

    }

    public function getUrl()
    {

        if (isset($_GET['url']))
        {

            $url = rtrim($_GET['url'], '/');
             
            //Uso de filter_var para conciderarlo como url
            $url = filter_var($url, FILTER_SANITIZE_URL);
            
            //Separa en un array por '/' los nombres
            $url = explode('/', $url);

            return $url;
        }

    }
}