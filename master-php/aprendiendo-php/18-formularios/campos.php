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
enctype  =  Se utiliza para codificar los datos en el navegador
label for = Permite brindar un orden visula al formulario esta asociado con un control llamado
            for llamdo el control de eqtiqueta.
input type = Representa un campo de dato tipado que permiete a los usurauios editar su valor
             su valor se representa por el atributo type, ya que es capas de proveer muchos campos
submit = El boton que envia los datos del formulario al servidor
value = Se utliza el atributo  para definir el valor enviado por el formulario
button = Es una version espesificada del elemento input, en el que se creaun boton el cual 
         se puede hacer click sin ningun valor por defecto.
checked = Es un valor booleanos que indica si el control debe estar maracado o
          seleccionado por el usuraio al cargar la pagina.
color = Proporciona un elemento de interfaz de usuarios que permite a los usuarios
        espesificar un color
type = Determina el tipo de entrada que se va a utilizar, ejemplo text, email, search, password 
       y ahi muchos mas.
date = Crea un campo de entrada que le permiete al usuraio introdcucir una fecha
email = Se utiliza para que el usuario peda editar ingresar o edutar una fecha
file = Selecion una lista de un rchivo o mas para subirlo al servidor.
multiple = Indica que se pueden utilizar valores muktiples, dependiendo input type que
           se vaya aplicar , para este ejemplo fue file y permite subier varios archivos
number = Se utiliz para permitir  al usuario ingresar un nmero , rechaza las entradas 
         que no sean numericas.
paasword = Proporcion un metodo para que el usuario pueda infresar la contraseña de forma segura
radio = Nos proporciona una forma de entradas donde tenemos varias opciones pero
        pero solo se nos permite seleccionar una.
p = Se utiliza para distribuir un campo de texto enforma de parrafo
url = se utiliza para indicar la direccion de un web una url absoluta
textarea = Nos permite crear un cuadro de texto en la web donde podemos
           escribir texto  sin formto espesifico de informacion.
select = Se utiliza para representar un control que muestra un menu de opciones, las opciones
         dentro del menu son representadas por el elemento option.
option = Se utiliza para representar un item dentro de un select 
br = Se utiliza para realizar saltos de line
submit = Se utiliza para crear un boton el cual se encarga de enviar la informacion cuando
          el usuario tebga llenos los campos necesarios.

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

    <label for="boton ">Boton: </label>
    <p><input type="button" name ="boton" value="Click"></p>

    <label for="sexo">Sexo: </label>
    <p>
        Hombre <input type="checkbox" name ="sexo" value="hombre"/>
        Mujer <input type="checkbox" name ="sexo" value="mujer" checked="checked"/>

    </p>

    <label for="color">Color: </label>
    <p><input type="color" name ="color"></p>

    <label for="fecha">Fecha: </label>
    <p><input type="date" name ="fecha"></p>

    <label for="correo">Email: </label>
    <p><input type="email" name ="correo"></p>

    <label for="archivo">Archivo: </label>
    <p><input type="file" name ="archivo" multiple="multiple" /></p>


    <label for="numero">Numero: </label>
    <p><input type="number" name ="numero" /></p>


    <label for="pass">Contraseña: </label>
    <p><input type="password" name ="pass"></p>

    <label for="continente">Continente: </label>
    <p>
        America del sur <input type="radio" name ="continente" value="America del sur"/>
        Europa <input type="radio" name ="continente" value="Europa"/>
        asia <input type="radio" name ="continente" value="Asia"/>
    </p>

      
    <label for="web">pagina web: </label>
    <p><input type="url" name ="web"></p>
<p> <textarea></textarea> <br/></p>
     

     PELICULAS:
     <select name="peliculas">
        <option>"Spiderman"</option>
        <option>"Batman"</option>
        <option>"Jumangi"</option>
        <option>"Dragom ball super"</option>
        


     </select>
      <br/>
    <input type="submit"  value="Enviar" /> 

    </form>
    
</body>
</html>