<?php
/*
Ejercicio # 4: Crear un script en PHP que tenga 4 variables, una de tipo array,
otra de tipo string, otra int y otra booleana y que imprima un mensaje 
segun el tipo de variable que sea.

FUNCIONS UTILIZADAS:

$ =  Se utiliza para definir una variable
array = Se utiliza para definir vaarios datos dentro de una variable
if = Es un condicional
is_array = No permite comprobar si la variable es un array.
echo = Nos prmiete imprimir por pantalla
is_string = Se utiliza para comprobar si una ariable es de tipo string
is_integer = Nos permite validar si la variable esde tipo numero
is_bool = valida si la variable es de dato bolleano.
*/

$variable1 = array(2,3,5,6,);
$variable2 = "string";
$variable3 = 55;
$variable4  = true ; 

if(is_array($variable1)){
    echo "<h1>El array es un array</h1>";
}

if(is_string($variable2)){
    echo "<h1>string</h1>";
}

if(is_integer($variable3)){
    echo "<h1>El numero</h1>";
}

if(is_bool($variable4)){
    echo "<h1>EL boleano es verdadero</h1>";
}