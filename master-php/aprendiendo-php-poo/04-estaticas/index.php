<?php

require_once 'configuracion.php';

Configuracion::setColor("blue");
Configuracion::setEntorno("localhost");
Configuracion::setNewsletter("true");

echo Configuracion::$color . '<br/>';
echo Configuracion::$entorno . '<br/>';
echo Configuracion::$newsletter . '<br/>';


// *****   DICCIOANRIO DE ELEMNTOS UTILIZADOS EN ESTA PRACTICA  *************

/*
require_once = Se utiliza para incluir el fichero una unica vez 
set = Se utiliza para acceder a los metods estaticos de la clases
br = Se utiliza realizar salto de linea 

*/


?>