<?php
//  validamos si los datos enviados por metodo POST estas definidos y si la variable no es nula 
if (isset($_POST)) {

// No encargamos de incluir la conecion a la base de datos por este metodo
require_once 'includes/conexion.php';

//INICIAR SECCION
//validamos si la sesios no esta difinida, de ser asi iniciamos la session por el metodo session_star
if(!isset($_SESSION)){
    session_start();

}

//RECOGE LOS VALORES DEL FORMULARIOS DE REGISTRO DE ACTULIZACION
$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
$apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;



//ARRAY DE ERRORES
$errores = array();

//VALIDAR LOS DATOS ANTES DE GUARDARLOS EN LA BASE DE DATOS

// en esta parte nos encargamos de validar los datos crfeamos diferentes filtros para cada campo de esta forma se protege 
// nuestra base de datos 
//VALIDAR NOMBRE
if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
    $nombre_validado = true;
} else {
    $nombre_validado = false;
    $errores['nombre'] = "El nombre no es valido";

}

//VALIDAR APELLIDO
if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
    $apellidos_validado = true;
} else {
    $apellidos_validado = false;
    $errores['apellidos'] = "Los apellidos no son validos";

}

//VALIDAR EL EMAIL
if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_validado = true;
} else {
    $email_validado = false;
    $errores['email'] = "El email no es validos";

}




$guardar_usuario = false;

if (count($errores) == 0) {
    $usuario = $_SESSION['usuario'];
    $guardar_usuario = true;

    //COMPROBAR SI EL EMAIL YA EXISTE
// con esta funcion validamos si el email ya esta registrando en la base de datos 
// validando la conexio de usuario de esta forma  se valida que el email es el mismo que el del usuario y el no esta vacio
// se procedera a la cosnulta para actuañlizar los datos   
    $sql = "SELECT id, email 
    FROM usuarios
    WHERE email = '$email'";
    $isset_email = mysqli_query($db, $sql);
    $isset_user = mysqli_fetch_assoc($isset_email);




   if($isset_user['id'] == $usuario['id'] || empty($isset_user)) { 
    
    // ACTUALIZAR USUARIO EN LA TABLA USUARIO DE LA BBDD

    // // Esta es la funcion que realiza toda la actualizacion de la base de datos  se crea la conssulta de actualizacion
    // si el id de suario es igual a id de session se crea la consulta gardara los datos en la session 
    // mostrara un mensaje de datos completos si no se tiene problema
    // de lo contrario mostrara la lerta de errro

    $usuario = $_SESSION['usuario'];

    $sql = "UPDATE usuarios SET
    nombre = '$nombre',
    apellidos = '$apellidos',
    email = '$email'
    WHERE id = " . $usuario['id'];
    $guardar = mysqli_query($db, $sql);

    if($guardar)
    $_SESSION['usuario']['nombre'] = $nombre;
    $_SESSION['usuario']['apellidos'] = $apellidos;
    $_SESSION['usuario']['email'] = $email;


        $_SESSION['completado'] = "Tus datos se han actualizado con exito";

    } else{
        $_SESSION['errores']['general'] = "Fallo al guardar al actulizar tus datos !!";
    }

   }else{
    $_SESSION['errores']['general'] = "El usuario ya existe !!";
    
   }

  
}else{
    $_SESSION['errores'] = $errores;
}

// Redirecciona por ultimo a la pagina q se desea

header('location: mis-datos.php');


?>

<!-- 
FUNCIONES UTILIZADAS:

****************************************RECIBIR DATOS*************************************
if = Se utiliza como condicional se es verdadero se ejecta una isntrucccion
isset = Se utiliza para valiadar si una variable fue declara y si su valor es nulo
$_POST = Es el metodo  de envio por el cual viajan los datos entre
require_once = Se utiliza para realizar la inserccion de ficheros una unica vez 

****************************************INICIAR SECCION***********************************

if = Se utiliza como condicional, si es verdadero se ejecutara una instruccion
! = Se utiliza como operador logico de negacion
isset = Se utiliza para valiadda si una variable fue declara y si su valor es nulo
$_SESSION = Se utiliza como array especial el cual permiete guaradar los datos se session
            entre los ficheros que se manejen
session_start = Se utiliza para crear o iniciar la session basda en un identificador de session

*************RECOGE LOS VALORES DEL FORMULARIOS DE REGISTRO DE ACTULIZACION***************

$ = Se utiliza para asiganar una variable
isset = S e utiliza para valiadar, si una variable ya fue asignada y si es nula
$_POST = Se utiliza como metodo de envio
mysqli_real_escape_string = Permiete escapar los caracteres en una cadena para el uso en sql 
false = Se utiliza para indicar que lago es falso
trim = Se utiliza para eliminara espacios o caracteres en blanco al inicio o final de 
       una cadena en ambos lados 

***************************************ARRAY DE ERRORES***********************************

$ = Se utiliza para definir una variable
array = Se utiliza para almacenar mas de un valor dentro de una  sola variable  

***************************************VALIDAR NOMBRES************************************

if =  Se utiliza como condicional , si su valor es true este se ejecutara
! = Se utiliza como operador de negacion
empty = Se utiliza para validar si una variable esta basia 
&& = Se utiliza como oprador AND de condicion, se deben cumplir las dos funciones para que el
     programa siga su ejecucion.
is_numeric = Se encarga de evaluar si el argumento se puede evaluar como un numero
preg_match = Se utiliza para para buscar o comprar cadenas mediantes expresiones regulares
true = Se utiliza para inndicar que algo es verdadero
else = Es un codicional e cual se utiliza caundo la condicion if no se cumple, se ejecuta
       la funcion else 
false = Se utiliza pra indicar que algo es falso.

*****************************************VALIDAR APELLIDO*********************************

if = Se utiliza como condicional , si este se cumple se ejecutara algo
! = Es un operador logico de negacion
empty = Se utiliza para determinar si una  variable esta vacia 
&& = Son operadores logicos que funcionan como una compuerta AND, para que se cumpla 
      las dos operaciones deben ser verdaderas
is_numeric = Se utiliza para evaliuar si un argumento se puede evaluar como numero
preg_match = Se utiliza para buscar o o comparar cadenas mediante expreciones regulares
true = Se utiliza para indicar que algo es verdadero
else = Se utiliza como condiciona, que se evaluara al no cumplirce el condicional if
false = Se utiliza como perardor logico de negacion

******************************************VALIDAR EL EMAIL********************************

if = Se utuliza como condiconal, si se cumple se ejecutara
! = Es un operador logico de negacion
empty = Se utiliza para determinar si una variable esta vacia 
&& = Operador logico que funciona como una compuerta AND, se deben cumplir las dos condicones
filter_var = Se encarga de filtrar una variable segun el filtro que se aplique
FILTER_VALIDATE_EMAIL = Se encarga de validar una direccion de correo
true = Se utiliza para validar que algo es verdadero
else = SE uttiliza cuando el condicional if, no se cumple entonces e evaluara el condicional else
false = Se utiliza para indicar qie algo es falso 
count = Se utuliza para contar ewl numero de elementos en eun array 


*******************************COMPROBAR SI EL EMAIL YA EXISTE***************************

$ =  SDe utiliza para declarar una variable
SELECT = Se utuliza para indicar que realizara una consulta a las columnas indicadas
FROM = se indica cuales filas seran consultadas
WHERE = Es un condicional en las consultas 
mysqli_query = Se encarga de realizar la consulta a la base de datos 
mysqli_fetch_assoc = optine los resultados del array asociativo.
if = Es uncondicinal que sis e cumple se relaizara determinada tarea
|| = oprador logico se evalua y el valor es veraddero si al meno una exprecion es verdaera OR
empty = Se encarga de evaluar siu una variable esta basia

******************ACTUALIZAR USUARIO EN LA TABLA USUARIO DE LA BBDD**********************

$_SESSION =  Es un array especial utilizado para guardaar informacion en los requiere
             entre las session.
$ = Se utiliza para declarar una variable
UPDATE usuarios = Es la funcion que se creo en el helper y nos permite actualizar usuario
SET = Especifica las columnas que se deben actualizar y calcula nuevos valores
WHERE = Se utiliza como un condicinal, si se cumple se ejecutara la accion 
mysqli_query = Devulve la referencia de registros recuperados 
if =  Se utiliza como condicinal si este se cumple se ejecutara una accion 
else =  Se evaluara en caso de que el condicional if no se cumpla.
header = Se encarga de redirigirnos a la ruta que se desee

*************************************************  CODIGO COMPLETO  *************************************************-->

<?php

if (isset($_POST)) {

require_once 'includes/conexion.php';

//INICIAR SECCION
if(!isset($_SESSION)){
    session_start();

}

//RECOGE LOS VALORES DEL FORMULARIOS DE REGISTRO DE ACTULIZACION
$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
$apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;



//ARRAY DE ERRORES
$errores = array();

//VALIDAR LOS DATOS ANTES DE GUARDARLOS EN LA BASE DE DATOS

//VALIDAR NOMBRE
if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
    $nombre_validado = true;
} else {
    $nombre_validado = false;
    $errores['nombre'] = "El nombre no es valido";

}

//VALIDAR APELLIDO
if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
    $apellidos_validado = true;
} else {
    $apellidos_validado = false;
    $errores['apellidos'] = "Los apellidos no son validos";

}

//VALIDAR EL EMAIL
if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_validado = true;
} else {
    $email_validado = false;
    $errores['email'] = "El email no es validos";

}




$guardar_usuario = false;

if (count($errores) == 0) {
    $usuario = $_SESSION['usuario'];
    $guardar_usuario = true;

    //COMPROBAR SI EL EMAIL YA EXISTE

    $sql = "SELECT id, email 
    FROM usuarios
    WHERE email = '$email'";
    $isset_email = mysqli_query($db, $sql);
    $isset_user = mysqli_fetch_assoc($isset_email);


   if($isset_user['id'] == $usuario['id'] || empty($isset_user)) { 
    
    // ACTUALIZAR USUARIO EN LA TABLA USUARIO DE LA BBDD
    $usuario = $_SESSION['usuario'];

    $sql = "UPDATE usuarios SET
    nombre = '$nombre',
    apellidos = '$apellidos',
    email = '$email'
    WHERE id = " . $usuario['id'];
    $guardar = mysqli_query($db, $sql);

    if($guardar)
    $_SESSION['usuario']['nombre'] = $nombre;
    $_SESSION['usuario']['apellidos'] = $apellidos;
    $_SESSION['usuario']['email'] = $email;


        $_SESSION['completado'] = "Tus datos se han actualizado con exito";

    } else{
        $_SESSION['errores']['general'] = "Fallo al guardar al actulizar tus datos !!";
    }
   }else{
    $_SESSION['errores']['general'] = "El usuario ya existe !!";
    
   }  
}else{
    $_SESSION['errores'] = $errores;
}

header('location: mis-datos.php');


?>