<?php
class Control
{
  public function load_model($model)
  {

    if (file_exists('../app/models/' . $model . '.php'))
    {
      
      require_once '../app/models/' . $model . '.php';
    
      return new $model;
      
    }
    else
    {

      die("404 NOT FOUND");
    
    }


  }

  public function load_view($view, $datos = [])
  {

    if(file_exists('../app/views/pages/' . $view . '.php'))
    {

      require_once '../app/views/pages/' . $view . '.php';
    
    }
    else
    {

      die("404 NOT FOUND");
    
    }
    
  }
}