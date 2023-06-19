<?php
include 'includes/header.php';


class Empleado
{
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }


}

$juan = new Empleado(
    "Juan",
    "Perez",
    "Ventas",
    "juanperez@gmail.com",
    1234
);

$karen = new Empleado(
    "Karen",
    "Gonzalez",
    "Marketing",
    "karen@gmail.com",
    4321
);

// $empleado->nombre = "Juan";
// $empleado->apellido = "Perez";
// $empleado->departamento = "Ventas";
// $empleado->email = "juanperez@gmail.com";
// $empleado->codigo = 1234;



echo "<pre>";
var_dump($juan);
echo "</pre>";

echo "<pre>";
var_dump($karen);
echo "</pre>";