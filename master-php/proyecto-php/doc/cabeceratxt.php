<!-- En este fichero se realiza la visualizacion de la parte superior de nuestra pagina 
lo que corresponde a la cabecera y al logo y menu---->

<?php
//lo primero que se realiza es la son los includes por medio de requiere_once para la conexion
//a la base de datos y a la carpeta helper que lleva la logica de consultas y funciones
require_once 'conexion.php'; 
require_once 'includes/helpers.php';?>

<!--
 Se configura el html con los parametros q se desea y este sera el que se incluire en las 
demas vistas de ficheros
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    <title>BLOG ANDRES</title>
</head>

<body>

    <!-- CABECERA -->
 <!-- En esta parte se realiza la seleccion de la cabeceera desdee el html y se asignan los id
 que se pondran ajustar desde los id, logo la ruta y el titulo por medio del elemnto a de url    -->
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">
                BLOG DE VIDEO JUEGOS
            </a>
        </div>

        <!-- MENU  -->
<!-- En esta parte del codigo vamos a crear la seleccion del menu para el cual se utiliza
la etiqueta nav y los elemntos para listar ordenadas  -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
<!-- En esta parte del codigo vamos alistar las categorias que tenemos en nuetsra pagina
para ellos utilizamos codigo php crreamos la $categorias y llamamon la funcion de consulta 
creada el el fichero de helpers
*creamos un condicional eñl cual nos valiada si la variable no $categorias no esta vacia
de cumplirce la condicion utilizamos el metodo while el cuaal recorrera co la funcion mysqli_fetch_assoc
que es un arra asosciativo y nos listara todas las categorias.
despues de ello pasamos el link y pasamo id por url e imprimimos valor id con el nombre  -->
                <?php
                $categorias = conseguirCategorias($db);
                if (!empty($categorias)):
                    while ($categoria = mysqli_fetch_assoc($categorias)):
                        ?>
                        <li>
                            <a href="categoria.php?id=<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></a>
                        </li>
                        <?php
                    endwhile;
                endif;
                ?>

                <li>
                    <a href="index.php">Sobre Nosotros</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>

        </nav>

        <div class="clearfix"></div>

    </header>

    <div id="contenedor">


    <!-- FUNCIONES UTILIZADAS: 

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
clearfix = Permite borra lo elemetos secundarios de un formato de forma automatica.
require_once =  Se utiliza para incluir archivos externos en los scrip, si el codigo
                 ya fue incluido este no lo incluira de nuevo.

*******************************************MENU*******************************************

$= Se utiliza para definir las una variable 
conseguirCategorias($db) = Se utuliza para llamara la funcion que tiene la operaciona aejecuta
while = Se utiliza como un ciclo que se ejecutar hata que sea true
empty = se encarga de evaluar si una variables esta vacia 
mysqli_fetch_assoc = Se utiliza para optener una fila de resultado como array asosciativos
<li> = Se utiliza para listar desordenado 
a href= Se utiliza para crear el un hipervinculo que nos redigira alguna parte
endwhile =  el cierre corto del ciclo while.
-->