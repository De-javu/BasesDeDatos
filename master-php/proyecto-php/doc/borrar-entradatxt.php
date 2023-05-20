<?php
/****************************************************************************************
En esta codigo se deea arelizar la elimienacion de entradas que el usuaio a ingresaso
para ello se utiliza el siguiente codigo:
se utiliza para trarer la conecion configuarada de la base de datos por medio de requiere:once
******************************************************************************************/
require_once 'includes/conexion.php';

/**************************************************************************************
 * Se realiza una condicion por metodo if el cual evaluara dos variables si las dos
   condiciones son verdadero el codigo dentro se desarrollara :
 * la primera condicion es evaluar si la variable fue declara  $_SESSION con el parametro 'usuario'.
 * la segunda condicional es evaluar si la variable  $_GET con el parametro 'id' fue declarada
   para las dos condiciones se utiliza la funcion isset y el operador AND (&&).
 */

if(isset($_SESSION['usuario']) && isset($_GET['id'])){  
/**************************************************************************************
 * Al cunplirce las condiciones entra se ejecuta el codigo dentro el if
   Se declaran las variables $entrada_id y se sigualan con el parametro $_GET que se recibe
   Se declara la variable $usuario_id se asigna la variabe que trae la $_SESSION*/ 
  $entrada_id = $_GET['id'];
    $usuario_id = $_SESSION['usuario']['id'];
/***************************************************************************************
 * SE realiza una consulta a la base de datos:
  se crea la vaariable $sql que es la encargada de almacenar la consulta 
  En las consulta se solicita el metodo Eliminar de la tabla entrada cuando usuario_id sea
  la variable creada $usuario_id que es la encargada de almacenar la $_SESSION y se debe
  cumplica otra condicin adicional por el metodo AND es id recibido por metodo $_GET corresponde 
  al id que se pasa por url , de esta forma se garantiza que el usuario logueado es el mismo
  que creo la entrada y se avilitaran los botones de eliminar y editar
*/
  $sql = "DELETE FROM entradas
            WHERE usuario_id = $usuario_id
            AND id = $entrada_id ";

/*Se utiuliza la funcion  mysqli_query y se pasan los parametros de la $db, base de datos
   y los parametros de $sql, que es la consulta sql que se realizo. 
*/
    $borrar = mysqli_query($db, $sql);



}
/*Por ulio si las condiciones porpuetas por el if no se cumplen no se ejecutara el
  codigo dentro y este saltara al corchete indicando por el metodo header que se
  redireccionara a la index.php que es la pagina principal de nuestro ptoyecto */
  header("location: index.php");

//****************************************************************************************
//*****************************FUNCIONES UTILIZADAS**************************************
/*
require_once = Se encarga de incluir un archivo dentro de otro archivo, se carga una unica vez 
if = Se utiliza para evaluar condiciones, si se cumple la condicon se ejecuta el codigo, de 
     lo contrario saldra delif y el programa seguira su curso
isset = Se utiliza para valiaddar si una variables fue declarada o si su valor s nulo 
$_SESSION = Es un array especial que contiene el usuario que este logeado 
&& =  Se utiliza como oprador AND se deben cumplir las dos condicones para que se
      ejecute el codigo 
$_GET = Se utiliza para pasar variables o datos por la URL 
$ = Se utiliza para declarar  variables
$sql = Fue la varoable que se creo para almacenar la consulta sql que se realizo
DELETE = Se utiliza para eliminar uno o vario parametros de una tabla de sql 
FROM = Se utiliza para espesificar la tabla la cual sera intervenida
WHERE = Se utiliza como condiciona si se cumpe se jecutara un accion en la tabla 
AND = Se utiliza operador ADN precedido por un WHERE indicando que se solicita
      que cumpla con las dos condicones
mysqli_query = Es el metodo por el cual se conecta a la base de datso 
header = SE encarga de redirecionar al archivo que se le indique 

//**************************************CODIGO******************************************* */





require_once 'includes/conexion.php';

if(isset($_SESSION['usuario']) && isset($_GET['id'])){
    $entrada_id = $_GET['id'];
    $usuario_id = $_SESSION['usuario']['id'];

    $sql = "DELETE FROM entradas
            WHERE usuario_id = $usuario_id
            AND id = $entrada_id ";

    $borrar = mysqli_query($db, $sql);



}
header("location: index.php");
