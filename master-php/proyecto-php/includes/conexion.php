<!--

FUNCIONES UTILIZADAS:
$ = Se utiliza para definir una variable
mysqli_connect = Intenta abrir una conexion al servidor MySQL que se esta ejecutando 
                en equipo_afitrion el cual puede sser el nombre de un equipo 
                o una derecion ip 
mysqli_query = Combina la ejecucion de sentencias y el almacenamiento de buffer
               de conjuntos de resultados.
SET NAME utf8 = Esta funcion indica que el diccionarios de palabras y caracteres seran
                tomas desde la utf8, que permiete al navegador completar 

session_start = Crea una sesion o reanuda la actual basada en un identificador de sesion
                pasado mediante un apeticion GET o POST, o mediante cookies                

******************************************iniciar sesion*******************************


-->


<?php

// CONEXION

$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'blog_master';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);
mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesion
 session_start();



?>