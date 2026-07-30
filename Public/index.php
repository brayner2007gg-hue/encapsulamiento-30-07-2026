<?php

require_once "../class/Persona.php";

// Crear tres objetos
$persona1 = new Persona("Brayner", "Velandia", 19, "123456789", "La Dorada");
$persona2 = new Persona("Juan", "Perez", 25, "987654321", "Bogotá");
$persona3 = new Persona("María", "López", 30, "456789123", "Medellín");


echo "<h2>=== DATOS ORIGINALES ===</h2>";

echo $persona1->saludar() . "<br>";
echo $persona2->saludar() . "<br>";
echo $persona3->saludar() . "<hr>";


$persona1->edad = 20;
$persona1->ciudad = "Manizales";

$persona2->setName("Carlos");

echo "<h2>=== DATOS MODIFICADOS ===</h2>";

echo $persona1->saludar() . "<br>";
echo $persona2->saludar() . "<br>";
echo $persona3->saludar() . "<hr>";


// Utilizar el Getter
echo "<h2>=== USANDO EL GETTER ===</h2>";

echo "El nombre de la persona 2 es: " . $persona2->getName();

echo "<hr>";


// $persona1->edad = -10;
// $persona2->setName("");
// $persona3->apellido = "12345";

echo "<h2>=== DATOS INCORRECTOS ===</h2>";

echo $persona1->saludar() . "<br>";
echo $persona2->saludar() . "<br>";
echo $persona3->saludar();