<?php

include 'includes/header.php';

class Empleado
{
    protected string $nombre;
    public string $apellido;
    private string $departamento;
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
        return $this->nombre . ' ' . $this->apellido;
    }

    public function getPropsSegunTipo(?string $tipo = null): array
    {
        if ($tipo !== 'public' && $tipo !== 'protected' && $tipo !== 'private' && $tipo !== null) {
            throw new Exception("Tipo de parametro invalido");
        }

        $properties = get_object_vars($this);


        $kindProperties = [];

        foreach ($properties as $key => $value) {
            if ($tipo === null) {
                $kindProperties[$key] = $value;
                continue;
            }
            $reflectionProperty = new ReflectionProperty($this, $key);

            if ($tipo === 'public' && $reflectionProperty->isPublic()) {
                $kindProperties[$key] = $value;
            } elseif ($tipo === 'private' && $reflectionProperty->isPrivate()) {
                $kindProperties[$key] = $value;
            } elseif ($tipo === 'protected' && $reflectionProperty->isProtected()) {
                $kindProperties[$key] = $value;
            }
        }

        return $kindProperties;
    }
}

$juan = new Empleado(
    'Juan',
    'Perez',
    'Ventas',
    'juanperez@gmail.com',
    1234
);

echo 'Esto es predefinidio <hr><pre>';
print_r($juan->getPropsSegunTipo());
echo '</pre>';

echo 'Esto es publico <hr><pre>';
print_r($juan->getPropsSegunTipo('public'));
echo '</pre>';

echo 'Esto es protegido <hr><pre>';
print_r($juan->getPropsSegunTipo('protected'));
echo '</pre>';

echo 'Esto es privado <hr><pre>';
print_r($juan->getPropsSegunTipo('private'));
echo '</pre>';

// echo 'Esto es deberia dar error <hr><pre>';
// print_r($juan->getPropsSegunTipo('juanito'));
// echo '</pre>';

// echo "<pre>";
// var_dump($juan);
// echo "</pre>";
