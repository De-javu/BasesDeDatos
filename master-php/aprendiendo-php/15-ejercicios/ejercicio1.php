<?php

/*
Ejercicio # 1:
Hacwe un peograma con PHP que tenga un array con 8 numeros enteros 
y que haga los siguinete:
_ Recorrerlo
_ Ordenarlo y mostrarlo
_ Mostrar su longitud 
_ Buscar algun elemento.
*/

//Crear el array
$numeros = array(1,15,20,2,32,24,8,10,5,6,7,17,4);

for ($i= 0; $i < count($numeros); $i++) {
    echo "<br/>";
    echo $numeros[$i];
}

//Ordenarlos Y Mostrarlo
echo "<hr/>";
$orden = sort($numeros);
echo ($numeros[$orden]);
var_dump($numeros);

//Mostrar logitud
echo "<hr/>";
echo count($numeros);

//Buscar los Elemntos


echo "<hr/>";

$buscar = 4;
 $encontrar = array_search($buscar, $numeros);
var_dump($buscar);
echo $encontrar;

