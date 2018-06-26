<?php
class Persona{
    public $nombre = "Nathalia";
    public $apellido;
    public static $tipoSangre = 'A+';
}

echo Persona::$tipoSangre."<br>";

Persona::$tipoSangre = "O+";
echo Persona::$tipoSangre."<br>";

$p = new Persona();
$p->nombre = "Dania";
echo $p->nombre."<br>";

$p2 = new Persona();
$p2->nombre = "Sandra";
echo $p2->nombre."<br>";