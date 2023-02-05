<?php
/*
Ejercicio # 4: Crear un script en PHP que tenga 4 variables, una de tipo array,
otra de tipo string, otra int y otra booleana y que imprima un mensaje 
segun el tipo de variable que sea.

FUNCIONES UTILIZADAS:

$ = Se utiliza para definir una variable
array = se utuliza para definir datos de una variable con varios  objetos 
string = Es una serie de caracteres
true = verdadero
var_dump = Permiete ver el contenido de un avariable, tamaño, tipo, dentreo de un array
           nos permiete ver los objetos que lo componen.
gettype = Nos permiete comprabar el tipo de variable.
br = Nos permiete realizar saltos de lineas.

*/

$variable1 = array(2,3,5,6,);
$variable2 = "string";
$variable3 = 55;
$variable4  = true ; 


var_dump($variable2);

echo gettype($variable4)."<br/>";
echo gettype($variable1)."<br/>";
echo gettype($variable3)."<br/>";;
echo gettype($variable2)."<br/>";;

?>