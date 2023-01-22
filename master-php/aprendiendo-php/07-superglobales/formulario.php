<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO EN PHP</title>
</head>
<body>
    <H1>FOMULARIO EN PHP</H1>

    <!-- // Se crea el formulario y se indica la pagina que va recibior los datos. -->
    <!-- GET: nos permite enviar los datos, ero los deja visibles en ela url 
    POST: Permite realizar la misma funcion de enviar datos, pero en este caso los oculta,
    haciendo que no sean visibes en la url brindando mayor proteccion  -->
    <form method="POST" action="recibir.php">
        <label for="nombre">Nombre</label>
        <input type = "text" name="nombre"/>

       
        <label for="apellido">Apellido</label>
        <input type = "text" name="apellido"/>

        <!-- Con esta funcion nos encargamos de crear el boton que enviara los datos -->
        <input type="submit" value="Enviar"/>


    </form>
</body>
</html>