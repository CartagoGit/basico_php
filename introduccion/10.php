<?php
include 'includes/header.php';

// HERENCIA
class Empleado
{
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;
    protected $codigo;
    protected $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }
}


class Proveedor
{
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;
    protected $empresa;


    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->empresa = $empresa;
    }
}
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
    "cualquiera@empresa.com",
    123456789,
    'Facebook'
);

echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($proveedor);
echo "</pre>";
