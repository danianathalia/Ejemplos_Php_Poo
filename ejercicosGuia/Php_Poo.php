<?php

class Producto{
    public $nombre;
    public $precio;
    protected $estado;

    protected function setEstado($estado){
        $this->estado = $estado;
    }

    public function ver(){
        echo "Hola soy el producto: ".$this->nombre."<br>";
        echo "Tengo un precio de: ".$this->precio."<br>";
        echo "Me encuentro en un estado de: ".$this->estado."<br>";

    }

    function _construct(){
        $this->setEstado('en uso');
    }
}

$_producto = new Producto();
$_producto->nombre = "Yogurth";
$_producto->precio = 2000;
$_producto->ver();