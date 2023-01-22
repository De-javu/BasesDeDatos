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
$edad = $_POST['edad'];
$email = $_POST['email'];
$pass = $_POST['pass'];



//validar el nombre 

if(!is_string($nombre) || !preg_match("/[a-zA-Z]+/", $nombre)){

    $error = 'nombre';
}

if(!is_string($apellidos) || !preg_match("/[a-zA-Z]+/", $apellidos)){

    $error = 'apellidos';
    

    }

if(!is_int($edad) || filter_var($edad, FILTER_VALIDATE_INT)){

        $error = 'edad';
}

if(!is_string($email) || filter_var($email, FILTER_VALIDATE_EMAIL)){

    $error = 'email';
}

if(empty($pass) || strlen($pass)<5){

    $error = 'password';

}

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