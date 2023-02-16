<!-- 
    
DOCTYPE = Se informa al navegador que version de html se uso para desarrollar el documento
lang = Se utilizar para espesificar el idioma del texto que tiene el elemento
head = Es donde se ponde la informacion de un documento en html y los metadatos 
meta charset="UTF-8 = Codifica los caracteres mas comunes en la red 
title = Se utiliza para definir el titulo que lleva las pagina web 
body = Se utiliza para definir el cuero del documento.
h1 = Se utiliza para poner titulos
if = se utiliza como un condicinal
isset = se utiliza para definir si la variable ya fue declarada o es nulo su valor
GET = lleva los datos de forma visible al clinete por medio de la url, por tal 
      Razon los datos los puede ver cualquiera.
echo = Nos permite imprimir por pantalla
form method = Es el metodo por el cual se reciben los datos
              desde la url que envia el usuario, para ser despachados a un servidor web. 
POST = Se utiliza para enviar los datos de forma oculta los cuales no pueden ser vidibles
       es adecuado para formulario de datos.
action = indica la pagina a la cual se envial los datos del formulario
label form = Es una etiquta la cual esta enlazada a un formulario el laber permiete 
             dar un titulo al campo que se va llenar 
input type = Es un campo de entrada el cual con el metodo type espesificara su funcion
required = Se utiliza para que el input del formulario se obligatorio.
pattern = Nos proporcion una validacion estra en los campos input de nuestro formulario
br = Nos permiete genrar saltos de line
submt = Se utiliza para crear el boton con el cual se enviaran los datos del formulario
value =  Es el memetodo de envio.


quedamos en validacion falta generar la base del restante de la informacion.

-->




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
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