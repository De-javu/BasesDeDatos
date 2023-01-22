<?php
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



