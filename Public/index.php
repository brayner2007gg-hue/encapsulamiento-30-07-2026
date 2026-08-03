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


// ======================
// MODIFICAR DATOS
// ======================

// Modificar usando atributos públicos
$persona1->ciudad = "Manizales";

// Modificar usando setters
$persona1->setEdad(20);
$persona2->setName("Carlos");
$persona3->setApellido("Gómez");

echo "<h2>=== DATOS MODIFICADOS ===</h2>";

echo $persona1->saludar() . "<br>";
echo $persona2->saludar() . "<br>";
echo $persona3->saludar() . "<hr>";


// ======================
// USAR GETTER
// ======================

echo "<h2>=== USANDO EL GETTER ===</h2>";

echo "El nombre de la persona 2 es: " . $persona2->getName();

echo "<hr>";


// ======================
// VALIDACIONES
// ======================

// Estos datos NO se modificarán porque son inválidos
$persona1->setEdad(-10);
$persona2->setName("");
$persona3->setApellido("");

// Estos sí son válidos
$persona1->setEdad(21);
$persona2->setName("Andrés");
$persona3->setApellido("Martínez");

echo "<h2>=== DESPUÉS DE LAS VALIDACIONES ===</h2>";

echo $persona1->saludar() . "<br>";
echo $persona2->saludar() . "<br>";
echo $persona3->saludar();