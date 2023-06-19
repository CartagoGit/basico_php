<?php
include 'includes/header.php';

class Empleado
{
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

}

$empleado = new Empleado();
$empleado->nombre = "Juan";
$empleado->apellido = "Perez";
$empleado->departamento = "Ventas";
$empleado->email = "juanperez@gmail.com";
$empleado->codigo = 1234;



echo "<pre>";
var_dump($empleado);
echo "</pre>";