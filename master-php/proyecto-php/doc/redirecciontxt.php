<?php
// Para este fichero utilizamos un if el cual va a validara si si la variable $_SESSION no
// esta declarada la cual evalua si ya tenemos una seccion realizada, de ser asi entrara al 
// y  a session_star creara la variable $_SESSION con los datos del login
if(!isset($_SESSION)){
    session_start();
}

// En esta linea de codigo el condicional evalua si la $_SESSION tiene un usuario el cual llama a 
// a la hora de logion de no ser asi redirecciona a la pagina inicial para que el usuario
// se logue o se registre, de esta forma protege que no ingrese apaginas no autorizadas.
if(!isset($_SESSION['usuario'])) {
    header("location: index.php");
}

?>
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

 <!-- ********************************* CODIGO ******************************************-->

 <?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['usuario'])) {
    header("location: index.php");
}
?>