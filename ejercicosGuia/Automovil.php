<?php

class Automovil
{
    public $marca;
    public $modelo;

    public function imprimir(){
        echo "<p> Hola! Soy un $this->marca modelo $this->modelo</p>";
    }
}

$a = new Automovil();
$a->marca = "Toyota";
$a->modelo = "Corolla";
$a->imprimir();

$a = new Automovil();
$a->marca = "Volkswagen";
$a->modelo = "Jetta";
$a->imprimir();