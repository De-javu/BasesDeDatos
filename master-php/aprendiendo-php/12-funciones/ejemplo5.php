<?php
// Ejemplo funcion dentro de la funcion

function devulveElNombre($nombre, $apellidos ) {

    $texto = "El nombre es: $nombre"
    ."<br/>". 
    "Los apellidos son: $apellidos";

    return $texto;

}

echo devulveElNombre("Andres", "Pardo Moreno");



?>