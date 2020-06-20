<?php
class home{
    public function __construct(){
    }
    public function home($params)
    {
        echo "mensaje desde el controlador";  
    }
    public function datos($params){
        echo "dato resibido: ".$params;
    }
}
?>