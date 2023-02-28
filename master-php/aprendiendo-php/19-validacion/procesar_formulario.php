<!-- 
FUNCIONES UTILIZADAS


$ =  SE utiliza para declarar una variablle 
! = Operador de negacion
empty = Nos permite validar si una variable esta vacia.
$_POST = SE utliza para mantener los datois que se reciben ocultos 
&& = Compara dos condicines, si las dos son verdadero devulve un true
****************************************VALIDAR NOMBRE************************************
if = Condicional 
! = Operador de negacion 
is_string = Permite comprobar si una variable es de tipo string 
|| = Cumplace una de las dos condiciones devulve verdadero
preg_match = Se Utiliza para buscar un patron, si lo encuentra devuelve
             un true de lo contrario sera false 
is_int = Se utiliza para probar si una variable es de tipo int
filter_var =  Se utiliza imponer un fitro de validacion 
FILTER_VALIDATE_INT = Se utuiliza para validar que sea un  valosr numerico 
FILTER_VALIDATE_EMAIL = Se utuiliza para validar que se un valor email
strlen = Devulve el numero de bit en vez de el nuero de caracteres 
header = Se utiliza para re dirigir automaticamente a otra pagina, enviando como argumento 
         la cadena location.
         
-->




<?php
$error = 'faltan_valores';

if(!empty($_POST['nombre']) && 
   !empty($_POST['apellidos']) &&
   !empty($_POST['edad']) && 
   !empty($_POST['email']) && 
   !empty($_POST['pass'])){
    $error = 'ok';

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = (int) $_POST['edad'];
$email = $_POST['email'];
$pass = $_POST['pass'];



//validar el nombre 

if(!is_string($nombre) || preg_match("/[0-9]/", $nombre)){

    $error = 'nombre';
}

if(!is_string($apellidos) || preg_match("/[0-9]/", $apellidos)){

    $error = 'apellidos';
    

    }

if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){

        $error = 'edad';
}

if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){

    $error = 'email';
}

if(empty($pass) || strlen($pass)<5){

    $error = 'password';

}

var_dump($_POST);
var_dump($error);

}else {
    $error = 'faltan_valores';
    
}
if ($error != 'ok'){
    header("Location:index.php?error=$error");
} 

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formulario</title>
</head>
<body>
    <h1>VALIDACION DE DATOS CORRECTAMENTE </h1>
    <?php if($error == 'ok'): ?>
        <p><?=$nombre?></p>
        <p><?=$apellidos?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>

    <?php endif;     ?>
     
</body>
</html>