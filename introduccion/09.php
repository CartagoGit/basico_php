<?php
include 'includes/header.php';


class Empleado
{
    private string $nombre;
    public string $apellido;
    public string $departamento;
    public string $email;
    public int $codigo;

    /*
        Get - Para obtener
        Set - Para asignar 
    */

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): string
    {
        $this->nombre = $nombre;
        return 'Se cambio el nombre ' . $this->nombre;
    }

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

echo "<pre>";
var_dump($juan->getNombre());
var_dump($juan->setNombre('Pedro'));
var_dump($juan->getNombre());
echo "</pre>";
