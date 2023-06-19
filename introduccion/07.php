<?php
include 'includes/header.php';


class Empleado
{
    public string $nombre;
    public string $apellido;
    public string $departamento;
    public string $email;
    public int $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    public function nombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellido;
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

echo "<p>", $juan->nombreCompleto(), "</p>";
echo "<p>", $karen->nombreCompleto(), "</p>";




echo "<pre>";
var_dump($juan);
echo "</pre>";

echo "<pre>";
var_dump($karen);
echo "</pre>";
