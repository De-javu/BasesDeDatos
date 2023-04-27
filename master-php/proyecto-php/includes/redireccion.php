<!-- 
FUNCIONES UTULIZADAS:

if = Se utiliza como condicional y sumple hace algo en espesifico
! = Es un 
isset =  Se utiliza para valiadar si la varible esta declarada o es nula
$_SESSIO = Es un array especial, que guarda la conexion entre las diferentes paginas, sin 
           necesiadad ¿de estar valiadando el id ebn acda una de ellas.
session_start() = Renida la seccion automaticamnete para cada pagina 
header =  Se encarga de redireccionar a la pagina que se desee.
 -->

<?php

if(!isset($_SESSION)){
    session_start();
}


if(!isset($_SESSION['usuario'])) {
    header("location: index.php");
}
