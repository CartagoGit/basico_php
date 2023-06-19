<?php
include 'includes/header.php';

include 'DB.php';

// Comunicar 2 Clases
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
$nombre = $juan->getNombre();


echo 'El nombre es ' . $nombre . '<br>';

$db = new DB($nombre);

echo 'El nombre de la base de datos es ' . $db->getNombre();

echo '<br>'.$db->guardarNombre('Pepito');
echo '<br>El nombre de la base de datos es ' . $db->getNombre();
