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
    <!-- 
    FUNCIONES UTILIZADAS:
    form = Se  utiliza para seleccion enviar informacion a una  web o servidor 
    method = Define con que metodo se envian los datos (GET O POST)
    action = Aca se define la ubicacion de la URL donde se envian los datos del formulario
    label for = El campo de la eqtiqueta para la cual se hace el titulo 
    input text = la entrada de un formuario y el tipo de dato
    input type = Representa la entrada de un campo texto
    submint = Es el boyon de enviar los datos al formulario del servidor
    value = para definir el valor predeterminado al cargar la pagina y el nombre del boton 
    p = Se utliza para distribuir el texto en parrafos
    GET= Nos permite enviar los datos, ero los deja visibles en ela url 
    POST =Permite realizar la misma funcion de enviar datos, pero en este caso los oculta,
    haciendo que no sean visibes en la url brindando mayor proteccion  -->
    <form method="POST" action="recibir.php">
        <P>
        <label for="nombre">Nombre</label>
        <input type = "text" name="nombre"/>
        </P>

        <P>
        <label for="apellido">Apellido</label>
        <input type = "text" name="apellido"/>
        </P>

        <!-- Con esta funcion nos encargamos de crear el boton que enviara los datos -->
        <input type="submit" value="Enviar ya "/>


    </form>
</body>
</html>