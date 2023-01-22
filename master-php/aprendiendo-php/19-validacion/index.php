<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- //<meta http-equiv="X-UA-Compatible" content="IE=edge">
    //<meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Validar formulario</title>
</head>
<body>
    <h1>Validar formulario en PHP</h1>

    <?php
    if(isset($_GET['error'])){
        $error = $_GET['error'];
        if($error == 'faltan_valores'){
            echo '<strong style="color:red">Introducir todos los datos en todos los campos </strong>';
        }

        if($error == 'nombre'){
            echo '<strong style="color:red">Introducir el nombre correcto</strong>';
        }

        if($error == 'apellidos'){
            echo '<strong style="color:red">Introducir appelidos correctamente  </strong>';
        }

        if($error == 'edad'){
            echo '<strong style="color:red">Introducir una edad correcta </strong>';
        }
        if($error == 'email'){
            echo '<strong style="color:blue">Escribe el correo correcto</strong>';
        }
        if($error == 'password'){
            echo '<strong style="Color:red">introduce un password </strong>';
        }
    }

    ?> 

   

    <form method="POST" action="procesar_formulario.php">

        <label for="nombre">Nombre</label><br/>
        <input type="text" name="nombre" required="required" pattern="[A-Za-Z]+"><br/>

    
        <label for="apellidos">Apellidos</label><br/>
        <input type="text" name="apellidos" required="required" pattern="[A-Za-Z]+"><br/>

        <label for="edad">Edad</label><br/>
        <input type="number" name="edad"required="required" pattern="[0-9]+"><br/>

        <label for="email">Email</label><br/>
        <input type="email" name="email"required="required"><br/>

        <label for="pass">Contraseña</label><br/>
        <input type="password" name="pass" required="required"><br/>


        <input type="submit" value="Enviar" />


    </form>
</body>
</html> 