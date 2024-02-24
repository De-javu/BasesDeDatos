<?php

function autocargar($classname){
    include 'controllers/' .$classname . '.php';
}

spl_autoload_register('autocargar');


//DICCIONARIO DE FUNCIONES UTILIZADAS EN ESTA PRACTICA 

/*
function = Se encarga de crear funciones las cuales seran llamada  en orden lo que grantiza
           un codigo mas limpio  
include = Se encarga de incluir un ruta de fichero la cual se desee la cantidda de veces que
          se deseeutilizar
spl_autoload-registrer = Es un asistente que se encarga de cargar las calases automaticante
                         por medio de u include o un requiere automaticamnete cargada

NOTA: Este fichro se encarga de hacer auto carga las clases desde el directorio Controller,
      donde por medio de el metodo spl_autoload_register, se pasa el parametyro cargar
      que feu asignad un una fuction pasando la variable ]$classsname el cual buscara y ppondra la
      extencion .php y traera automaticamente los ficheros desde otros partesd el programa automaticamente
      sin necesidad de estar realizando inclusiones cada vez que necesitamos algo de otros ficheros


*/

?>

