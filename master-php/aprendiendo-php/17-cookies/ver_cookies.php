<?php

/*
Para mostrar el valor de las cookies, tengo que usar $_COOKIES, una variable superglobal,
es un array asociativo.

FUNCIONES UTILIZADAS:

if =  Es un condicional
isset = Nos permite validar si la variable fue declarada o su valor es nulo 
$ = se utiliza para definir una variable
else =  condicional que aplica en caso de que el if, no se cumpla
h1 =  se utiliza para titulos tipo 1
a href = Se utliza para indicar la url a donde queremos ir

*/

if (isset($_COOKIE['micookie'])) {
    echo "<h1>".$_COOKIE['micookie']."</h1>";
 }else{
    echo "No existe la cookie";
 }

if (isset($_COOKIE['unyear'])){
    echo "<h1>".$_COOKIE['unyear']."</h1>";
}else{
    echo "No existe la cookie";
}
?>

<a href="borrar_cookies.php">Boarra mis galletas</a>