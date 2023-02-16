
<!--
FUNCIONES UTILIZADAS:

DOCTYPE = Se iinforma al navegadoir que version de html se uso para desarrollar el documento
lang = Se utilizar para espesificar el idioma del texto que tiene el elemento
head = Es donde se ponde la informacion de un documento en html y los metadatos 
meta charset="UTF-8 = Codifica los caracteres mas comunes en la red 
title = Se utiliza para definir el titulo que lleva las pagina web 
body = Se utiliza para definir el cuero del documento 
header = contiene el encabezado de una seccion del documento 
id = Se utiliza com un identificador unico 
div =  SE utiliza para definir una divicion, En las que se permite adjuntar varios
       elementos de un bloque. 
a href = Se utiliza para crear enlaces externos e internos dentro de un docuemnto html
nav = SE utiliza para definir una seccion de un docuemnto que contiene enlaces  de navegacion
ul = Se utliza para crear listas no ordenadas
li = Se utiliza para representar un u  item de dentro de una lista se ordena o desrdenada
div id = Se utliza para agrupar un bloque conidentidad, listo para empezar aplicar estilo
aside = Se utiliza como contenedro levemente relevante para el documento.
class = ES un atributo global que  permiete a css y java scrip sellcionar para aplicar diseño
h3 = Se utiliza para poner titulos
form action = Define la aubicacion de la URL donde se enviaran los datos que el formulario
              ha recojido cuando se valiada.
method = Define el  metodp por el cual envia los datos datos(GET_ o POST)
enctype  =  Se utiliza para cidificar los datos en el nacegador
label for = Permite brindar un orden visula al formulario esta asociado con un control llamado
            for llamdo el control de eqtiqueta.
input type = Representa un campo de dato tipado que permiete a los usurauios editar su valor
             su valor sse representa por el atributo type, ya que es capas de provver muchos campos
submit = El boton que envia los datos del formulario al servidor
value = Se utliza el atributo  para definir el valor enviado por el formulario

-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>FORMULARIO PHP Y HTML</title>
</head>
<body>
    <h1>Formulario</h1>

    <form action="" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre: </label>
    <p><input type="text" name ="nombre "></p>

    
    <label for="apellido">Apellido: </label>
    <p><input type="text" name ="apellido"></p>
    <input type="submit"  value="Enviar" /> 

    </form>
    
</body>
</html>