<?php

include 'includes/header.php';

class Empleado
{
    protected string $nombre;
    public string $apellido;
    private string $departamento;
    public string $email;
    public int $codigo;

    public static $propiedadEstatica = 'Propiedad estatica';

    public static function getPropiedadEstatica(): string
    {
        return self::$propiedadEstatica;
    }

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        //* Si nombre fuera estatico podriamos asignarselo en el constructor de la siguiente manera ->
        // self::$nombre = $nombre;
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

    public static function getKeyPropsSegunTipo(?string $tipo = null): array
    {
        if ($tipo !== 'public' && $tipo !== 'protected' && $tipo !== 'private' && $tipo !== null) {
            throw new Exception("Tipo de parametro invalido");
        }

        $reflectionClass = new ReflectionClass(static::class);
        $properties = $reflectionClass->getProperties();

        $keyProperties = [];
        foreach ($properties as $property) {
            $propertyName = $property->getName();
            if ($tipo === null) {
                $keyProperties[] = $propertyName;
                continue;
            }

            if ($tipo === 'public' && $property->isPublic()) {
                $keyProperties[] = $property;
            } elseif ($tipo === 'private' && $property->isPrivate()) {
                $keyProperties[] = $property;
            } elseif ($tipo === 'protected' && $property->isProtected()) {
                $keyProperties[] = $property;
            }
        }

        return $keyProperties;
    }
}

$juan = new Empleado(
    'Juan',
    'Perez',
    'Ventas',
    'juanperez@gmail.com',
    1234
);

echo '<pre>';
var_dump($juan->getPropsSegunTipo('public'));
echo '<br>';

echo "Estas propiedades deberian ser publicas: <br>";
var_dump(Empleado::getKeyPropsSegunTipo('public'));

echo '<br>';
echo "Estas propiedades deberian ser privadas: <br>";
var_dump(Empleado::getKeyPropsSegunTipo('private'));

echo '<br>';
echo "Estas propiedades deberian ser protegidas: <br>";
var_dump(Empleado::getKeyPropsSegunTipo('protected'));

echo '<br>';

echo "Deberian ser todas las propiedades: <br>";
var_dump(Empleado::getKeyPropsSegunTipo());
echo '</pre>';

echo `<pre>`;
echo Empleado::getPropiedadEstatica();
echo `</pre>`;

echo '<br>';
echo Empleado::$propiedadEstatica;
