<?php

/* 
FUNCIONES UTILIZADAS:


**********************************RECOJER VALORES DEL FORMULARIO**************************
if = Se utiliza como condicional, si se cumple se ejecuta si no, busca el else
isset = Se utiliza para determinar si la variable esta dfinida o es null
$_POST = Envia los datos de forma oculta de un pagina aa otra 
$ = Se utiliza para definir un variable
false = Se utiliza para validae si un valor falso o verdadero

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

****************************************






*/
if (isset($_POST)) {

    //RECOGELOS VALORES DEL FORMULARIOS DE REGISTRO
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;


    //ARRAY DE ERRORES
    $errores = array();
    
    //VALIDAR LOS DATOS ANTES DE GUARDARLOS EN LA BASE DE DATOS

    //VALIDAR NOMBRE
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre es valido";

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
        $errores['email'] = "el email no son validos";

    }

     //VALIDAR EL PASSWORD
     if (!empty($password)) {
        $password_validado = true;
    } else {
        $password_validado = false;
        $errores['password'] = " La contraseña esta vacia ";
    }


    $guardar_usuario = false;

    if(count($errores) == 0){
        $guardar_usuario = true;

    }
     

}


?>