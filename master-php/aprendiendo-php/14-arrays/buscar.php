<?php
/*
FUNCIONES UTILIZADAS:

$ = se utiliza para definir una variable en php
array_search = Se utilizar para buscar valores en un array y nos devulve
               su indice en caso de hacerlo
var_dump =  proporciona información sobre el tamaño y tipo de datos de la variable y, 
            en el caso de arrays y objetos, de los elementos que la componen
*/




$cantantes = ['2pac','Drake','jennifer','Alfredo'];

//BUSCAR DENTRO DE UN ARRAY
$resultado = array_search('jennifer', $cantantes);
var_dump($resultado);
echo $resultado ;

?>
