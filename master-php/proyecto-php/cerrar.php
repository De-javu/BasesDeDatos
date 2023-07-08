<?php
session_start();

if(isset($_SESSION['usuario'])) ;{
  session_destroy();
}

header("location: index.php");

?>

<!-- 
FUNCIONES UTILIZADAS:

session_start =
if = Se utiliza como condicinal si cum´le la condicio se ejecuta una accion 
isset = Se utiliza para determinara si una varaible fue declarada o su valor es nulo
$_SESSION = Se utiliza como array especial que permite guardar los datos atravez de require
session_destroy
header = Se encarga de redireccionar la pagina a otras padinas
-->