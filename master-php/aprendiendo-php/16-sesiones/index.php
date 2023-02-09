<?php
/*
 * Sesion: Alamcenar y persisitir datos del usuraio mientras que navega en un sitio
 * web hasta que cierre sesion o cierra la navegacion.
 * 
 * 
 * FUNCIONES UTILIZADAS:
 * session_star = Se utiliza para crear una seccion, basada en el el identificador 
 *                que se pasa por GET o POST
 * $ =  se utiliza para definir una variable
 * echo = Nos permite imprimir por pantalla
 * br = nos permite realizar saltos de line
 */

//Inicia seccion 
session_start();

// Variable local
$variable_normal = "Soy una cadena de texto";

//Varible de sesion
$_SESSION['variable_persistente'] = "HOLA SOY UNA SESION ACTIVA";

echo $variable_normal."</br>";
echo $_SESSION['variable_persistente'];

?>