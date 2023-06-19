<?php

class DB
{
    protected $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function guardarNombre(string $nombre): string
    {
        $this->nombre = $nombre;
        return 'Guardando el nombre ' . $this->nombre;
    }
}
