<?php
include 'includes/header.php';

// HERENCIA
// ? Una clase abtrcta es una clase que no se puede instanciar
abstract class Persona
{
    protected string $nombre;
    protected string $apellido;
    protected string $email;
    protected int $telefono;

    public function __construct($nombre, $apellido, $email, $telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    public function mostrarInformacion(): void
    {
        echo "Nombre: {$this->nombre} <br>Apellido: {$this->apellido}<br>Email: {$this->email}";
    }

    public function getTelefono(): int
    {
        return $this->telefono;
    }
}

class Empleado extends Persona
{

    protected int $codigo;
    protected string $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }
}


class Proveedor extends Persona
{
    protected string $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->empresa = $empresa;
    }
}
// $persona = new Persona(
//     "Lolo",
//     "Zape",
//     "zape@lolo.com",
//     456789123
// );

$empleado = new Empleado(
    "Juan",
    "Perez",
    'juan_ti@gmail.com',
    123456789,
    1111,
    'Ventas'
);

$proveedor = new Proveedor(
    "Karen",
    "Gonzalez",
    "cualquiera@proveedor.com",
    987654321,
    'Facebook'
);

echo "<pre>";
// var_dump($persona);
// echo "<br>";

var_dump($empleado);
echo "<br>";

var_dump($proveedor);
echo "</pre>";
