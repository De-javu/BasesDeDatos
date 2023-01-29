<?php
/*
Ejercicio 3. Escribir un programa que imprima por pantalla los cuadrados 
(Un numero multiplicado por si mismo) de los primeros numero naturales.
NOTA: Utilizar bucle while.



 */ 

 $numero = 0;
 

//  while ($numero <= 40) {
//     $Resultado = $numero * $numero ;
//     echo  "<p>El cuadrado del numero $numero es  $Resultado <p/>" ;
//     $numero++;

//
/*
FUNCIONES UTILIZADAS:

$ = La utilizamos para definir las variables
echo = Nos permite imprimir por pnatalla
for = Permite repetir un bloque de isntrucciones las veces que sea necesario
p = Se utiliza para distribuir el texto en parrafos.
*/  

for($numero = 0; $numero <= 1000000000; $numero++){

    $Resultado = $numero * $numero;

    echo  "<p>El cuadrado del numero $numero es  $Resultado <p/>" ;

}

?>