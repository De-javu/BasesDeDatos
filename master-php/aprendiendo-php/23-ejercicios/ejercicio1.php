<?php

/*
Ejercicio 1. Crear una sesion que aumente su valor en uno i dismunuya en uno
en funcion de si el parametro get counter este a uno o a ceros.


FUNCIONES UTILIZADAS:
session_start = Cre una secion o renuda la actual basada en un identificador de sesion
                pasado mediante una peticion GET o POST
if = Se utiliza como un condicional 
! = Se utiliza como opradir de de negacion 
isset = Se utilaza para determinar si una variable a sido declarada o si su valor es null
$_SESIION = Es un array especial utilizado para guardar informacion, que un usuario hace 
            durante su visita a un sitio web o aplicacion.
&& = Se utiliza para definir dos condiciones las cuales con una que falle ya no continua el programas
h1 = Se utiliza para definir utitulo en la pagina de tipo  1
a href = Se utiliza para crear el impervinculo de una pagina a otra
br = Se utiliza para dar saltos de linea.

*/

session_start();
if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}

if(isset($_GET['counter']) && $_GET['counter']==1){
    $_SESSION['numero']++;

}
    if(isset($_GET['counter']) && $_GET['counter']==0){
        $_SESSION['numero']--;

}

?>

<h1>El valor de la sesion numero es: <?=$_SESSION['numero']?></h1>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a><br/>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a>
 