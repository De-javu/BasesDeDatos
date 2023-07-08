<?php

// utilizamos la funcion session_star, la cual permite iniciar una nuva session o reanudar
// la session exitente, prmitiedo que los valores almacendaso en la variable $_SESSION 
// sean accesibles despues.
session_start();

// utilizamos un condicinal if que evalua si la variable $_SESSION fue declara y que su
// valor no es nulo, se ejecutara el codigo, en este caso un session_destroy que se utiliza
// para destruir tooda la informacion asocciada a una session pero no destruye ninguna variable global 
if(isset($_SESSION['usuario'])) ;{
  session_destroy();
}

// Si la funcion no entra al if utilizamos la funcion header la cual redirecciona
// a la pagina que se desea
header("location: index.php");
?>


<!-- FUNCIONES UTILIZADAS:

session_start =
if = Se utiliza como condicinal si cum´le la condicio se ejecuta una accion 
isset = Se utiliza para determinara si una varaible fue declarada o su valor es nulo
$_SESSION = Se utiliza como array especial que permite guardar los datos atravez de require
session_destroy
header = Se encarga de redireccionar la pagina a otras padinas -->

<?php
session_start();

if(isset($_SESSION['usuario'])) ;{
  session_destroy();
}

header("location: index.php");
?>
