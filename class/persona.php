<?php

class Persona
{
    public $nombre;
    public $apellido;
    public $edad;
    public $documento;
    public $ciudad;

    public function __construct($nombre, $apellido, $edad, $documento, $ciudad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->documento = $documento;
        $this->ciudad = $ciudad;
    }

    // Setter para nombre
    public function setName($nombre)
    {
        if (is_string($nombre) && trim($nombre) != "") {
            $this->nombre = $nombre;
        }
    }

    // Getter para nombre
    public function getName()
    {
        return $this->nombre;
    }

    // Setter para apellido
    public function setApellido($apellido)
    {
        if (is_string($apellido) && trim($apellido) != "") {
            $this->apellido = $apellido;
        }
    }

    // Setter para edad
    public function setEdad($edad)
    {
        if (is_numeric($edad) && $edad >= 0 && $edad <= 120) {
            $this->edad = $edad;
        }
    }

    // Método saludar
    public function saludar()
    {
        return "Hola, mi nombre es $this->nombre $this->apellido, tengo $this->edad años y vivo en $this->ciudad.";
    }
}