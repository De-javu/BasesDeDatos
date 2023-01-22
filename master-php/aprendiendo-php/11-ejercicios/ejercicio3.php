<?php
/*
Ejercicio 3. Escribir un progrma que imprima por pantalla los cuadrados 
(Un numero multiplicado por si mismo) de los primeros numero naturales.
NOTA: Utilizar bucle while.

 */ 

 $numero = 0;
 

//  while ($numero <= 40) {
//     $Resultado = $numero * $numero ;
//     echo  "<p>El cuadrado del numero $numero es  $Resultado <p/>" ;
//     $numero++;

//  }

for($numero = 0; $numero <= 1000000000; $numero++){

    $Resultado = $numero * $numero;

    echo  "<p>El cuadrado del numero $numero es  $Resultado <p/>" ;

}

?>