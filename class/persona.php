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
    public function setNombre($nombre)
    {
        if (is_string($nombre) && trim($nombre) !== "") 
    }


    public function setName($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getName()
    {
        return $this->nombre;
    }

    public function saludar()
    {
        return "Hola, mi nombre es $this->nombre $this->apellido, tengo $this->edad años y vivo en $this->ciudad.";
    }
}