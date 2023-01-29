<?php

/*function = Conjunto de instrucciones agrupadas bajo un nombre completo, pueden utilizarce 
           unicamente invocando a la funcion tantas veces como se desee 
$ = Se tuliza para definir una vareioable
return = Si es llamdo desde una funcion, la sentencia return inmediatamente termina la
        ejecucion de la funcion actual, devulve su argumento como el valor de la llamada 
        a la funcion.
*/

// Ejemplo funcion dentro de la funcion

function devulveElNombre($nombre, $apellidos ) {

    $texto = "El nombre es: $nombre"
    ."<br/>". 
    "Los apellidos son: $apellidos";
    return $texto;

}
echo devulveElNombre("Andres", "Pardo Moreno");



?>