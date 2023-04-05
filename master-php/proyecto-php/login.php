<?php
//RECOGER LOS DATOS DEL FORMULARIO

require_once 'includes/conexion.php';

if (isset($_POST)) {


    if(!isset($_SESSION)){
        session_start();
    
    }

    var_dump($_POST);
       }

        //BORRAR ERROR ANTIGUO

    if (isset($_SESSION['error_login'])) {
        unset($_SESSION['error_login']); // ojo
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

    // REDIRIGIR AL INDEX.PHP

header('location: index.php');

?>


