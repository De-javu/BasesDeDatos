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


-->


<?php require_once 'conexion.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    <title>BLOG ANDRES</title>
</head>

<body>




    <!-- CABECERA -->
    <header id="cabecera">
        <div id="logo">
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