<!--

FUNCIONES UTILIZADAS:
$ = Se utiliza para definir una variable
mysqli_connect = Intenta abrir una conexion al servidor MySQL que se esta ejecutando 
                en equipo_afitrion el cual puede sser el nombre de un equipo 
                o una derecion ip 
mysqli_query = Combina la ejecucion de sentencias y el almacenamiento de buffer
               de conjuntos de resultados.
SET NAME utf8 = Esta funcion indica que el diccionarios de palabras y caracteres seran
                tomas desde la utf8, que permiete al navegador completar Ñ



-->


<?php

// CONEXION

$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'blog_master';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);
mysqli_query($db, "SET NAME 'utf8'");





?>