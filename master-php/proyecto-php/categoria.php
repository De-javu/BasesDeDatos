
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<?php

$categoria_actual = conseguirCategoria($db, $_GET['id']);
if(!isset($categoria_actual['id'])){
    header("location: index.php");
}
?>

<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<div id="principal">
   

    <h1>Entradas de <?=$categoria_actual['nombre']?></h1>

    <?php
    $entradas = conseguirEntradas($db, null, $_GET['id']);

    if (!empty($entradas) && mysqli_num_rows($entradas) >=1 ):
        while($entrada = mysqli_fetch_assoc($entradas)):
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
    else:
    ?>
        <div class = "alerta">No hay entrada en esta categoria</div>
        <?php endif; ?>



</div>



<?php require_once 'includes/pie.php' ?>


<!-- 
FUNCIONES UTILIZADAS:

require_once 'includes/conexion.php
require_once 'includes/helpers.php

$ = Se utiliza para declarar una variable
conseguirCategoria = Se utlizapara acceder a la funcion creada en el fichero 
if = Se utiliza como condicional, si se cumple se ejecutara.
! = Se utiliza como operador de negacion
isset = Determina si una variable esta definina o es nula 
header = Se utiliza para indicar la ruta del  scrip a donde se desea ir 
div = Se utiliza para devidir y contener elementos dentro del html
h1 = Se utiliza para indicar titulos de tipo 1
empty = Se utiliza para validar si la varaible esta basia 
&& = operadores logicos tipo AND, si las dos condicines se cumple devuelev true de lo contrario false
mysqli_num_rows = Devulve el numero de filas de un resultado
while = Se utiliza para ejecutar un ciclo de funciones hasta q se cumpla una condicion determinada
mysqli_fetch_assoc = Se encarga de devolver un arraey asociativo
article = Es un contenedor de bloques de contenido independiete del sitio web
a href= Se utiliza para indicar una url
h2 = Se utiliza para indicar titulos de tipo 2
span = Se utiliza para agrupar elemntos  lineas de texto y dar un estilo 
p = Se utiliza para poner parrafo en la web
substr = Se encarga de traer las cadenas de texto
endwhile = Se utiliza para cerrar el ciclo while
else = Se utiliza como condicional cuando el el if no se cumple
div = Se utiliza para coo conetnedor de elemntos dentro de un elemento en html
endif = SE utiliza para el cierre del if
