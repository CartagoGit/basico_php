<?php
include 'includes/header.php';

// HERENCIA
class Persona
{
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;

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
}

class Empleado extends Persona
{

    protected $codigo;
    protected $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo = $codigo;
        $this->departamento = $departamento;
    }
}


class Proveedor extends Persona
{
    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
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
    "cualquiera@proveedor.com",
    123456789,
    'Facebook'
);

echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($proveedor);
echo "</pre>";
// echo "<pre>".var_dump($proveedor)."</pre>"; //!! esto falla porque var_dump() no devuelve un valor asignable

// Mostrar información
$empleado->mostrarInformacion();
echo "<hr>";
$proveedor->mostrarInformacion();
