<?php

// Esta fichero del codigo es la entrada principal llamada index la primer pagina a la que 
// recurre el codigo al memento de ejecutarce
// *Utilizamos inicar la sssion por medio de seesion_start para que inicie o reinicie la session 
//*Tambie utilizamos lo requiere_onces los cuales se encargan de incluir en esta pagina
// lo ficheros que necesitamos para la visualizacion y cinexion con el resto del programa 
session_start();
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
require_once 'includes/helpers.php'; ?>

<!-- CAJA PRINCIPAL -->
<!--
En esta parte del codigo nos paramos en la pagina principal para mostrar las entradas 
*llamamos una funcion conseguirEntradas que es la que realiza la consulta a la base de datos
*luego utilizamos un condicional que evaluara si la la variable $entradas no esta vacia.
*utilizamos un ciclo while que se encargara por medio de la funcion mysqli_fech-assoc de entradas
el cual devolvera un array asociativo con la informacion que contega la $variabe entrada
-->
<div id="principal">

    <h1>Ultimas entradas</h1>
    <?php
    $entradas = conseguirEntradas($db, true);

    if (!empty($entradas)):

        while ($entrada = mysqli_fetch_assoc($entradas)):
            ?>
<!-- En esta fragmento de codigo volvemos a html donde utilizamos un article y un link el cual
nos llevara a  entrada.php y adicional le pasa el id por la url metodo GET se utiliza la 
sintasis abreviada para imprimir  variables $entrada[‘id’], $entrada[‘titulo’], 
$entrada[‘categoria’], $entrada[‘fecha’] y $entrada[‘descripcion’].
*por ultimo utilizamos substr(); el cual se utiliza para cortar la descripcin en 180 carateres -->
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
<!-- En esta parte se encarga redirecionar por medio del boton  -->
    <div id="ver-todas">
        <a href="entradas.php">Ver todas las entradas</a>
    </div>

</div>
<!-- En esta parte se utiliza el requiere_once para icluir la parte derl final  -->
<?php require_once 'includes/pie.php' ?>

<!-- 
FUNCIONES UTLIZADAS:



h1 = Nos permiete crear titulos
article= Nos permite dividir dentrod el pagina web, segmentos que son utilizados para,
         articulos , noticias o entradas.
h2 = NO permite definir titulos 
p = se utiliza para crear parrafos 

require_once =  Se utiliza para incluir archivos externos en los scrip, si el codigo
                 ya fue incluido este no lo incluira de nuevo.

**********************************conseguirUltimasEntradas*********************************

$= Se utiliza para declarar variables
conseguirUltimasEntradas($db) = Se utiliza para llamarar la funcion creada delos helper
if = se utiliza como condicional
! = se utiliza como operador de negacion
empty = Se encarga de evaluar si la variable esta vacia 
while = Se utiliza como una sentencia que realiza una accion hasta que se cumpla
mysqli_fetch_assoc = Devulve un array asociativo que corresponde a la fila recuperada
article = Se utiliza para dar una vista diferente en bog, con espacios
class = Se utiliza para identificar, para mas adelanre imponer los estilos 
a href = Se utiliza para definir la url a donde seredirecciona la pagina
span = Se utiliza para poner texto un poco diefernte al que ya esta
<h2> =  Se utiliza para poner titulos de tipo 2
<p> = Se utiliza para poner en formato parrafo la presentacion de la pagina 
substr = Se utiliza para indicar el valor de la cadena de texto donde se realizara la 
         busqueda y segundo y tercero parametros posicion inicial y final de la cadena 
         a presentar

-->
<!-- ******************************************* CODIGO ***********************************************-->

<?php
session_start();
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
require_once 'includes/helpers.php'; ?>

<!-- CAJA PRINCIPAL -->

<div id="principal">

    <h1>Ultimas entradas</h1>

    <?php
    $entradas = conseguirEntradas($db, true);

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
    <div id="ver-todas">
        <a href="entradas.php">Ver todas las entradas</a>
    </div>
</div>

<?php require_once 'includes/pie.php' ?>
