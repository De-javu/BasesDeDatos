<!-- 
FUNCIONES UTLIZADAS:

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
form action = Define l aubicacion de la URL donde se enviaran los datos que el formulario
              ha recojido cuando se valiada.
method = Define el  metodp por el cual envia los datos datos(GET_ o POST)
label for = Permite brindar un orden visula al formulario essa asociado con un control llamado
            for llamdo el control de eqtiqueta.
input type = Representa u campo de dato tioado que permiete a los usurauios editar su valor
             su valor sse representa por el atributo type, ya que es capas de provver muchos campos
submit = El boton que envia los datos del formulario al servidor
value = Se utliza e atributo  para definir el valor enviado por el formulario
h1 = Nos permiete crear titulos
article= Nos permite dividir dentrod el pagina web, segmentos que son utilizados para,
         articulos , noticias o entradas.
h2 = NO permite definir titulos 
p = se utiliza para crear parrafos 
footer = Es la parte inferior de una pagina web quedentro incluye informacio de intetres
         para la persona que navega en ella.

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
    <title>Blog ANDRES</title>
</head>
<body>

<!-- CABECERA -->
<header id = "cabecera">
    <div id ="logo">
        <a href="index.php">
            BLOG DE VIDEO JUEGOS
        </a>
    </div>

<!-- MENU  -->

<nav id="menu">
    <ul>
        <li>
            <a href="index.php">Inicio</a>
        </li>
        <li>
            <a href="index.php">Categoria 1</a>
        </li>
        <li>
            <a href="index.php">Categoria 2</a>
        </li>
        <li>
            <a href="index.php">Categoria 3</a>
        </li>
        <li>
            <a href="index.php">Categoeria 4</a>
        </li>
        <li>
            <a href="index.php">sobre nosotos</a>
        </li>
        <li>
            <a href="index.php">Contacto</a>
        </li>
    </ul>

</nav>
    
</header>

<div id="contenedor">

<!-- BARRA LATERAL  -->

<aside id="sidebar">
    <div id="login" class="bloque">
        <h3>IDENTIFICAION</h3>
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name ="email"/>

            <label for="password">Contraseña</label>
            <input type="password" name ="password"/>
        

            <input type="submit" value="Entrar" />


        </form>
    </div>

    <div id="registrer" class="bloque">
        <h3>REGISTRATE</h3>
        <form action="registro.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name ="nombre"/>
        

            <label for="apellidos">Apellidos</label>
            <input type="text" name ="apellidos"/>
        

            <label for="email">Email</label>
            <input type="email" name ="email"/>
            

            <label for="password">Contraseña</label>
            <input type="password" name ="password"/>
            

            <input type="submit" value="Registrar" />


        </form>
    </div>
</aside>

<!-- CAJA PRINCIPAL -->

<div id="Principal">
    <h1>Ultimas entradas</h1>

    <article class= "entradas">
        <h2>Titulo de mi entrada</h2>
        <p>
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
        cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una
        galería de textos y los mezcló de tal manera que logró hacer un libro de textos 
        especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno 
        en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado 
        en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de 
        Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus 
        PageMaker, el cual incluye versiones de Lorem Ipsum.
        </p>

    </article>

    <article class= "entradas">
        <h2>Titulo de mi entrada</h2>
        <p>
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
        cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una
        galería de textos y los mezcló de tal manera que logró hacer un libro de textos 
        especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno 
        en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado 
        en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de 
        Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus 
        PageMaker, el cual incluye versiones de Lorem Ipsum.
        </p>

    </article>

    <article class= "entradas">
        <h2>Titulo de mi entrada</h2>
        <p>
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
        cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una
        galería de textos y los mezcló de tal manera que logró hacer un libro de textos 
        especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno 
        en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado 
        en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de 
        Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus 
        PageMaker, el cual incluye versiones de Lorem Ipsum.
        </p>

    </article>

    <article class= "entradas">
        <h2>Titulo de mi entrada</h2>
        <p>
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
        cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una
        galería de textos y los mezcló de tal manera que logró hacer un libro de textos 
        especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno 
        en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado 
        en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de 
        Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus 
        PageMaker, el cual incluye versiones de Lorem Ipsum.
        </p>

    </article>
    
    </div>
</div>

<!-- PIE DE PAGINA  -->

<footer id="pie">
    <p>
        Desarrollado por ANDRES PARDO &copy; 2023
    </p>

</footer>

    
</body>
</html>