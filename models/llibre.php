<?php 


class llibre{
    public function mostrar(){
        $con = new mysqli("localhost","root","","biblioteca");
        $sql = "SELECT * FROM llibre";
        $result = $con->query($sql);
        return $result;
    }
}