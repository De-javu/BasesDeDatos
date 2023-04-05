<?php

/* 
FUNCIONES UTILIZADAS:

***********************************CONEXION A LA BASE DE DATOS****************************
if = Se utiliza como condicional, si se cumple ejecutara una tarea en espesifico
isset = Se utiliza para validadr que las variable esta definida.
$_POST =  Se utiliza para definir el metodo por e cual se pasan los datos a la base ded datos
require_once =  Se utiuliza ´para incluir el fichero donde esta elcodigo que se desea ejecutar
                durante la ejecucion del programa
session_start = Crea una seccion o rreanuda la actual basada en en identificador se session
                pasado mediante un metodo GET, POST , COOKIE.

**********************************RECOJER VALORES DEL FORMULARIO**************************

if = Se utiliza como condicional, si se cumple se ejecuta si no, busca el else
isset = Se utiliza para determinar si la variable esta dfinida o es null
$_POST = Envia los datos de forma oculta de un pagina aa otra 
$ = Se utiliza para definir un variable
false = Se utiliza para validae si un valor falso o verdadero
mysqli_real_escape_string = Escapa caracteres especiales en un string para su uso en una
                            sentencia SQL.

trim = Elimina espacio en blanco (u otro tipo de caracteres)
       del inicio y el final de la cadena

***********************************ARRAY DE ERRORES****************************************

$ = Se utuliza paradefinir una variable
array() = Se utiliza para definir multiples variables en una sola variable.

*******************VALIDAR LOS DATOS ANTES DE GUARDARLOS EN LA BASE DE DATOS***************

*****************************************VALIDAR NOMBRE************************************

if = Se utiliza para defiir un condicional, si se cumple hace algo,
    de lo contrario evalua else
empty = Determina si un a variable esta vacia.
! =  Operardor ennegacion  
$ =  Se utiliza para definir una variable 
&& = Se utiliza para validad dos condicionales a la vez
is_numeric = Se utiliza para validar si un dato de un formulario es numero o no
preg_match = Devulve verdadero el patron que se busca en la cadena de texto.
else = condicional que se ejecuta cuando el condicional if. 
false = Se utiliza para validar  false o verdadero.

***************************************VALIDAR APELLIDO*************************************

if = Se utiliza para defiir un condicional, si se cumple hace algo,
de lo contrario evalua else
empty = Determina si un a variable esta vacia 
! =  Operardor ennegacion 
$ =  Se utiliza para definir una variable 
&& = Se utiliza para validad dos condicionales a la vez
is_numeric = Se utiliza para validar si un dato de un formulario es numero o no
preg_match = Devulve verdadero el patron que se busca en la cadena de texto.
else = condicional que se ejecuta cuando el condicional if. 
false = Se utiliza para validar  false o verdadero.

******************************************VALIDAR EMAIL***********************************

if = condicional que se evalua si. se cumple ejecunta unas isntrucciones
! =  Operardor ennegacion 
empty = valiada si una variable esta vacia  
&& = Se utuiza para valiadar dos condicines a la vez las cuales se deben cumplir 
filter_var = Se utiliza para filtrar por una  variable 
FILTER_VALIDATE_EMAIL = Esta funcion permiete valiadar que lo que se pado es un correo
else = Se evalua si el if no se cumple.

****************************************VALIDAR EL PASSWORD*******************************
if = Condicional que se evalua si, se cumple. 
! = Esta instruccion.
empty = Permiete validar un variable.
else = condicional que se ejecuta si el if no se cumple.

*******************INSERTAR USUARIO EN LA TABLA USUARIO DE LA BBDD*************************

sesion star = Crea una sesion o reanuda la actual basada en un identificador ásado por el metodo 
GET o POST o que se pasa mediante un cookies.
else = Se utiliza como condicinal en caso de que o cumpla el if evaluara else para 
       ejecutar un procesos 
$_SESSION = Es un array especualizado para guardar informacion atraves de los request que
            que un usuraio hace durante una visita a un sitio web o aplicacion.
header = Es usado para redirigir automaticamente a otra pagina, enviando la cadena location 
         seguda de la direccion absoluta de la pagina que queremos dirigir.
INSERT INTO = Se utiliza para agregar datos a la tabla de la base de datos espesificada
usuarios = nombre de la tabla de la base de datos la cula usaremos
VALUES = Genera el aviso a mysql , que los datos acontinuacion seran insertaos a la base de datos
CURDATE = Fija la fecha actual en la insercion de la base de datos
mysqli_query = Nos permite realizar consulta a la base de datos. 

****************************************CIFRAR LA CONTRASEÑA*********************************

password_hash = Se utuliza para cifrar la contraseña usando un hash de unico sentido
$ = Se utiliza para asignar variables
PASSWORD_BCRYPT = Se utiliza para sifrar la contraseña creando sioempre un ancho de 60
cost = Se utliza para determinar el algoritmo que bera utilizarce.
*/

//conexion a la base de datos


if (isset($_POST)) {

    require_once 'includes/conexion.php';

    //INICIAR SECCION
    if(!isset($_SESSION)){
        session_start();
    
    }
    

    
    //RECOGE LOS VALORES DEL FORMULARIOS DE REGISTRO
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;


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

    //VALIDAR EL PASSWORD
    if (!empty($password)) {
        $password_validado = true;
    } else {
        $password_validado = false;
        $errores['password'] = " La contraseña esta vacia ";
    }


    $guardar_usuario = false;

    if (count($errores) == 0) {
        $guardar_usuario = true;


        //  CIFRAR LA CONTRASEÑA  

        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        // INSERTAR USUARIO EN LA TABLA USUARIO DE LA BBDD

        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE()) ;";
        $guardar = mysqli_query($db, $sql);




        if ($guardar) {
            $_SESSION['completado'] = "El registro completado con exito";

        } else {
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario!!";
        }
    }else{
        $_SESSION['errores'] = $errores;
    }

}

header('location: index.php');


?>