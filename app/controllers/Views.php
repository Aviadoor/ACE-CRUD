<?php
class Views extends Control
{
    public function inicio()
    {
        
        $datos = [
            "title" => "Inicio"
        ];
        
        $this->load_view('inicio', $datos);
    
    }
    public function update($id, $name)
    {
        echo "Update view " . $id;
        
        echo "<br>Update view " . $name;
    }

}