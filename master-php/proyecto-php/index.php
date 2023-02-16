<!-- 
FUNCIONES UTLIZADAS:



h1 = Nos permiete crear titulos
article= Nos permite dividir dentrod el pagina web, segmentos que son utilizados para,
         articulos , noticias o entradas.
h2 = NO permite definir titulos 
p = se utiliza para crear parrafos 

require_once =  Se utiliza para incluir archivos externos en los scrip, si el codigo
                 ya fue incluido este no lo incluira de nuevo.

-->

<?php require_once 'includes/cabecera.php'; ?>

<div id="contenedor">

<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL -->

<div id="principal">
    <h1>Ultimas entradas</h1>

    <article class= "entradas">
        <a href="">
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
        </a>

    </article>

    <article class= "entradas">
        <a href="">
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
        </a>
    </article>

    <article class= "entradas">
        <a href="">
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
        </a>

    </article>

    <article class= "entradas">
        <a href="">
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
        </a>

    </article>
    <div id="ver-todas">
         <a href="">Ver todas las entradas</a>
    </div>
    
    </div>
    
    <div class="clearfix"></div>
</div>

<?php require_once 'includes/pie.php' ?>

    
