<?php

/*FUNCIONES UTILIZADAS:
 
$ = Se utliza para definir varaiables
sort = Ordena el array en orden ascendente tomando los elementos de menos a mayor
arsort = Se utliza para ordenar los arrays de forma invesar a como etan 
var_dump = proporciona informacion sobre el tamaño y el tipo de dato de la variable, 
           y en caso de arrays y objsetos, de los elementops que lo compongan 
array_push = Permeute añadir otra variable la cual pone al final de las demas variables
array_pop = Elimna el ultimo elemento de u array 
unset = Puede eliminar una o varias variables, dependindo cual se desee
array_rand =  Seleccionar de forma aleatoria uno o varios elementos de un array 
array_reverse = Permiete que el arreglo quede ordenado de forlma en reversa 
count = permiete contar dentro de un bucle ,bien sea como se cunfigure 
echo = Nos permiete imprimir por pantalla 


*/

 $cantantes = ['2pac','Drake','jennifer','Alfredo'];
 $numero = [1,202,5,18,9,10,2];

//ORDENAR
sort($cantantes);// orden alfavetivo
arsort($cantantes);   //orden inverso
var_dump($cantantes);


sort($numero);// orden o orden numerico  alfavetivo
var_dump($numero);

//AÑADIR ELEMENTOS ARRAY
$cantantes[] = 'natos'; // una forma de ñadir 
array_push($cantantes, "Waor"); // otra forma de añadir 

//ELEIMINAR ELEMENTOS ARRAY 
array_pop($cantantes); // Quita el ultimo elemneto de la lista 
unset($cantantes[2]); // Quita el elemento que se le indica de la lista.

//ALATORIO
$indice = array_rand($cantantes);
echo ($cantantes[$indice]);

// dar la vuelta
var_dump(array_reverse($numero));


var_dump($cantantes);

// CONTAR NUMERO DE ELEMENTOS
//echo sizeof($cantante);
echo count($cantantes);



