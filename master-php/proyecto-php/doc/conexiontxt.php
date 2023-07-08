<!--
En este fichero la idea es realizar la conecion a la base de datos unicamente
se realizan los ajustes necesarios.
-->

<?php
// Iniciar la sesion
// En esta primera parte utilizamos un if para valiadar que la seccion no esta iniciada de
// de no estarlo se utiliza la funcion sesion_start para inicarlo.
if(!isset($_SESSION)){
    session_start();
   }
//**************************************************************************************/   

// CONEXION
//Se crea una variable para capturar cada uno de los campos que solicita la base de datos para crear la conexion
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'blog_master';

//Despues se crea la funcion mysqli_connet en la cual se captura con la varible que contiene
// los datos de la base de datos que anterirmente se capturaron.
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

// En estte fragmento decodigo realizamos una coslta a la base de datos la cual le pasamos 
// los datos de la bade de tado $db y le pasamos una funcion especial la cula nos realizara
// una codificacion que servira para que se interprete la n Ñ y bastante de los parametros latinos 
mysqli_query($db, "SET NAMES 'utf8'");

?>

<!--

FUNCIONES UTILIZADAS:

*****************************************CONEXION******************************************

localhost = Esta es la ubicacion de la nuestro sitio web para conexion con la base de datso
root = Es el nombre adminstrador de la base de datos en php MYadmin
$password = En este punto iria la calve de ingreso para neutra base de datos,
            se puede dejar vacio tambien.
blog_master = ESte el el nombre de la base de datos donde se alojaran los datos recopilasdos
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

 session_start = Se encarga de crear una secion o de reanudar la actual basada en identificador
                 GET o POST 

-->

<!--************************************CODIGO**************************************** -->

<?php
// Iniciar la sesion
if(!isset($_SESSION)){
    session_start();
   }

// CONEXION

$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'blog_master';
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);
mysqli_query($db, "SET NAMES 'utf8'");

?>