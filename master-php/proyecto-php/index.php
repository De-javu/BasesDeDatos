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

<?php
session_start();
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
require_once 'includes/helpers.php'; ?>
?>






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