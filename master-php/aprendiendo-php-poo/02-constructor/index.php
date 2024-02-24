<?php

require_once 'coche.php';

$coche0 = new Coche("Amarillo", "Renault", "Twingo", 120, 1500, 2);
$coche1 = new Coche("Azul", "chevrolet", "Onix", 120, 1500, 2);
$coche2 = new Coche("Rojo", "Mazda", "Mazda2", 200, 2500, 3);
$coche3 = new Coche("Blanco", "Toyota", "Hilux", 200, 2000, 5);
$coche4 = new Coche("Plata", "For", "Renger", 120, 1500, 2);

$coche0->color = "Rosa";
$coche0->setMarca("Ferrari");
$coche0->getModelo("Imperial");
var_dump($coche0,);

echo $coche0->mostrarInformacion($coche4);

// DICCIONARIO DE FUCIONESUTLIZADAS
/*
requiere_once = Se utiliza para incluir un fichero de otro archivo una unica vez.
new = Se utiliza para crear instancias de una clase y poder acceder a la clase desde el objeto
var_dum = Se utiliza para mostrar los datos que se estabn proceando en una variable
-> = Se utiliza para accerder a propiedades y metodos.
*/

