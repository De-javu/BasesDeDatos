<!-- CAJA PRINCIPAL -->
<?php
// Iniciamos arrancando con la session star 
// luego llamamos a los ficheros que ya tenemos listos para visualizar en nuetsra pagina por medio del require_once
session_start();
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
require_once 'includes/helpers.php'; ?>

<div id="principal">

    <h1>Todas entradas</h1>

    <?php
// llamamos la funcion conseguirEntradas quese encarga de realizar la logica de consulta a la base de datos 
    $entradas = conseguirEntradas($db);

// utilizamos un if el cual se encarga de validar si la variable $emtrada no esta vacia, de cumplir la 
// condicion se ejecuta el codigo dentro 
    if (!empty($entradas)):

// creamos un cilco while que se encargara de recorrer las entradas no mostrara por medio de un array asiciativo 
// los parametros que se desean dentro de la entrada, id, titulo, fecha, categoria, descripcion
        while ($entrada = mysqli_fetch_assoc($entradas)):
            ?>
            <article class="entrada">

                <a href="entrada.php?id=<?=$entrada['id']?>">
                    <h2>
                        <?= $entrada['titulo'] ?>
                    </h2>
                    <span class="fecha">
                        <?= $entrada['categoria'] . ' │ ' . $entrada['fecha'] ?>
                    </span>
                    <p>
                        <?= substr($entrada['descripcion'], 0, 180) . "..." ?>
                    </p>
                </a>

            </article>

            <?php
        endwhile;
    endif;
    ?>
</div>
<!-- por ultimo incluimos el pie de lapagina  -->

<?php require_once 'includes/pie.php' ?>


<!-- 
FUNCINES UTILIZADAS

session_start = Se encarga de matener la secion abrirat que se paso por GET O POST
require_once = Se encarga de llamar la fichero una unica vez 
div = Es el encargado de crear las segmentaciones en html
h1 = Se utiliza para los titulos de tipo 1
$ = Se utiliza para declarra variables
conseguirEntradas($db) = Esta funcion se encarga de la logica para consultar y visulizar las entradas
if = Se utiliza como condiconal, si se  cumple realizara una tarea 
! = operador de negacion
empty = SE utyiliza para validar si las variable esta vacia 
while = Se utiliza para que ejecuete una tarea hasta que esta se cumpla.
mysqli_fetch_assoc = Se utiliza  para retornar un array asociativo 
article = Es un contenedor de bloques de contenido
a href = Se utiliza paraindicar una url en la pagina web
h2 = Se utiliza para definir los titulños de tipo 2
span = Se utiliza para agrupar texto en lineas
p = Se utiliza para indicar u parrafo rn la web
substr = Devuleve caracteres del vaor de cadena 
endwhile = Se utiliza para bridar cierre al while de forma corta sin utiliza corchetes
endif = Se utiliza para bridar cierre al if de forma corta sin utlizar corchetes

*************************************************  CODIGO  *************************************************************-->

<!-- CAJA PRINCIPAL -->
<?php

session_start();
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
require_once 'includes/helpers.php'; ?>

<div id="principal">

    <h1>Todas entradas</h1>

    <?php
    $entradas = conseguirEntradas($db);

    if (!empty($entradas)):

        while ($entrada = mysqli_fetch_assoc($entradas)):
            ?>
            <article class="entrada">

                <a href="entrada.php?id=<?=$entrada['id']?>">
                    <h2>
                        <?= $entrada['titulo'] ?>
                    </h2>
                    <span class="fecha">
                        <?= $entrada['categoria'] . ' │ ' . $entrada['fecha'] ?>
                    </span>
                    <p>
                        <?= substr($entrada['descripcion'], 0, 180) . "..." ?>
                    </p>
                </a>

            </article>

            <?php
        endwhile;
    endif;
    ?>
</div>
<?php require_once 'includes/pie.php' ?>