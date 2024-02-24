<?php
function autocargar_clases($class){
    require_once 'clases/'. $class . '.php';
}

spl_autoload_register('autocargar_clases');

// DICCIONARIO DE FUNCIONES UTILIZADA PARA ESTA PRACTICA 

/*
function autocargar_clases = Esta funcion se crea con el fin de cargar las calses que tenemos

require_onces = Se utiliza para incluir ficheros una unica vez 
spl_autoload_register = permiete cargar las clases automatimanetes sin impirtar el numero de clases

*/


?>