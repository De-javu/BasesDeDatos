<?php

/*
Ejercicio # 1:
Hacwe un peograma con PHP que tenga un array con 8 numeros enteros 
y que haga los siguinete:
_ Recorrerlo
_ Ordenarlo y mostrarlo
_ Mostrar su longitud 
_ Buscar algun elemento.


FUNCIONES UTILIZADAS:

$ =  Se utiliza para definir una variable
array = Es una estructura de datos que permiete almacenar multiples elemenetos 
        en una sola variable.
for = Es una estructura de contyrol que permiete repetir un bloque de indtrucciones
      las veces que sea necesario.
echo = Nos permiete imprimir por pantalla
sort = Permiete ordenar un array de manera ascendente
var_dump = Proporciona informacion de las varaibales, tamaño, tipo de datos y en los
           array los objetos que lo componen
hr = permite dividir o separar las ecciones para brindar mas orden visual 
count = Permite contar el numero de elementos en un array
array_search = Se utiliza para buscar una valor espesifico dentro de un array y lo devulve
            en el caso de que el array contenga este valor 

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

$buscar = 5;
$encontrar = array_search($buscar, $numeros);
var_dump($buscar);
echo $encontrar;

