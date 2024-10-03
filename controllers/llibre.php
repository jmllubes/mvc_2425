<?php 
require_once "models/llibre.php";
class llibreController {
    public function hola() {
        echo "<h1>hola</h1>";
    }
    public function mostrar(){
        $llibre = new llibre();
        $result = $llibre->mostrar();
        require "views/llibre/mostrar.php";    

        
    }
    public function insertar(){
        require "views/llibre/insertar.php";
    }
}



















?>