<?php

/*
Crear un array con el contenido dela tabla:
ACCION       AVENTURA     DEPORTES
GTA          ASSASINS     FIFA 19
COD          CRASH        PES 19
PUGB         PRINCE OF    MOTO GP 19
             PERSISA     

Cada fila debe ir en un ficher separado(includes).             

* /*/

$tabla = array (
    "ACCION" => array("GTA 5","Call of Duty","PUGB"),
    "AVENTURA" => array("Assasins Creed", "Crash Bansicoot", "Prince of persia"),
    "DEPORTES" => array("Fifa 19","PES 19","Moto G 19"),
);

$categorias = array_keys($tabla);

?>

<table border="1">
   <?php require_once 'ejercicio5/encabezado.php';?>
   <?php require_once 'ejercicio5/primera.php';?>
   <?php require_once 'ejercicio5/segunda.php';?>
   <?php require_once 'ejercicio5/tercera.php';?>

    

</table>