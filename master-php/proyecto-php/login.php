<?php
/*
FINCIONES UTILIZADAS:

*******************************INICIAR LA SECCION Y LA CONEXION****************************

require_once = Se encarga de incluir el fichero solo  una vez si este ya esta incluido 
               esto con el finde optimizar y que no se presente  problemas de definicion 


******************************INICIAR LA SECCION Y LA CONEXION*****************************

******************************RECOGER LOS DATOS DEL FORMULARIO*****************************

if = Se utiliza como condicional
isset = se utiliza para determinar si una variable fue declara o su valor en nulo
$_POST =Se utiuliza como metodo oculto de envio de la informacion recopilada por el formulario

if = Se utiliza para definir si una condicin se cumple, has esto
isset = Se utiliza para saber si la variable fue declarada o su valor es true
$_POST = Se utiliza como metodo de envio oculte de la informacion recopilada por el formulario
trim = Se encarga de eliminar espaciosen blanco al inicio y final de una cadena o tipo de caracteres

***************************************BORRAR ERROR ANTIGUO*******************************

if = Se utiliza como condicional 
isset = Se utiliza para determinar si una variable fue declara o su valor es nulo
$_SESSION = Es un array especial que se encarga de guardar los datos atravez de los require
session_unset = Se utiliza reiniciar las variables de la secciones

*******************CONSULTAS PARA COMPROBAR LA CREDENCIALES  DEL USUARIO *******************

 $= Se utiliza para definir una variable 
 SELECT * FROM usuarios = Se utiliza pra selecionar la tabla de consulta en mysql que tiene
                          los  datos  que vamos a consultar dentro de la tabla donde se almacena
 WHERE =  Es un condicional para acceder a los registros de consulta en el orden deseado
 mysqli_query = Se en carga de realizar la consulta en la base de datos

if = Se encarga de realizar una condicion si esta se cumple realizara una tarea en espesifico
&& = Se encargha de evaluar dos condicones, las dos se deben cumplir
mysqli_num_rows = Se encarga de contar el numero de lineas 
mysqli_fetch_assoc =  Se utiliza para optener un array como asociativo

*******************************COMPROBAR LAS CONTRASEÑAS**************************************

$ = Se utiliza para definir una variable
password_verify = Se utiliza para validar el registro hash con el que se asocio la contraseña
                 al momento del registro

**************UTILIZAR UNA SESION PARA GUARDARA LOS DATOS DEL USUARIO LOGUEADO**********************

$_SESSION = Es un array especila que se encarga de guardar los datos atravex de los requeri 
            de un usuario que hace su visita a una web o aplicacion 
if = Se utiliza como condicional si cumple, realizara la instruccion relacionada 
isset = SE encarga de definir si una variable fue declara o su valor es tru
else =  Se encarga de evaluar una funcion al no cumplirce el if  


***********************SI ALGO FALLA ENVIAR UNA SECCION CON EL FALLO***************************

$_SESSION =  Es un array especila que se encarga de guardar los datos atravex de los requeri 
            de un usuario que hace su visita a una web o aplicacion

*************************************MENSAJE DE ERROR**********************************************

else = Se encarga deevaluar una funcion cuando el if no se cumple 
$_SESSION = Es un array especila que se encarga de guardar los datos atravex de los requeri 
            de un usuario que hace su visita a una web o aplicacion

***********************************REDIRIGIR AL INDEX.PHP*********************************
 
header = Se utiliza para redirigir automaticamente ea otra pagina, en este caso es a location
 
********************************************************************************************

*/
//INICIAR LA SECCION Y LA CONEXION 
require_once 'includes/conexion.php';

//RECOGER LOS DATOS DEL FORMULARIO

if (isset($_POST)) {

    //BORRAR ERROR ANTIGUO

    if (isset($_SESSION['error_login'])) {
        session_unset($_SESSION['error_login']); // ojo
    }

    //RECOJO DATOS DEL FORMULARIO
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    //CONSULTAS PARA COMPROBAR LA CREDENCIALES  DEL USUARIO

    $sql = "SELECT * FROM usuarios WHERE email = '$email' ";
    $login = mysqli_query($db, $sql);

    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);

        //COMPROBAR LAS CONTRASEÑAS
        $verify = password_verify($password, $usuario['password']);

        if ($verify) {
            //UTILIZAR UNA SESION PARA GUARDARA LOS DATOS DEL USUARIO LOGUEADO
            $_SESSION['usuario'] = $usuario;      

        } else {
            // SI ALGO FALLA ENVIAR UNA SECCION CON EL FALLO
            $_SESSION['error_login'] = "login incorrecto!!";
        }

    } else {
        // MENSAJE DE ERROR
        $_SESSION['error_login'] = "Login incorrecto!!";
    }

}

// REDIRIGIR AL INDEX.PHP

header('location:index.php');

?>