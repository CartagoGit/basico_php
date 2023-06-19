<?php
include 'includes/header.php';

class Empleado
{
    // Contructor property Promotion
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo
    ) {
    }
}

$empleado = new Empleado("Juan", "Perez", "Ventas", "juanperez@gmail.com", 1234);
// $empleado->nombre = "Juan";
// $empleado->apellido = "Perez";
// $empleado->departamento = "Ventas";
// $empleado->email = "juanperez@gmail.com";
// $empleado->codigo = 1234;

echo "<pre>";
var_dump($empleado);
echo "</pre>";
