<!-- En este fragmento del codigo vamos realizara la vissualizacion y el recorrido de las categorias -->
<!-- Lo primero que realizamos es llamar los ficjerops donde ya tenemos las configuraciones
como la conexion a la base de datos y los helers de consulta  -->
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php

// Luego creamos una variable $categoria_actuales la cual le pasamos la consulta que se programo
// en la funcion conseguirCategoria le pasamos como parametro la variable $bd $_GET con id 
// si la funcion no fue declarada no redireciona ala pagina index
$categoria_actual = conseguirCategoria($db, $_GET['id']);
if (!isset($categoria_actual['id'])) {
    header("location: index.php");
}
?>
<!-- En este fragmento del codigo llamamos a los includes cabecera y lateral   -->
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!-- en esta parte en la caja de html se visualiza el tutulo de la catregoria dode estamos parados -->

<div id="principal">

    <h1>Entradas de
        <?= $categoria_actual['nombre'] ?>
    </h1>

    <?php
// se crtea una variable $entradas la cual recibe la funciion a la base de datos
    $entradas = conseguirEntradas($db, null, $_GET['id']);

// Se crea un condicional donde se evalua si la varibale $entrada no esta vacia y si
// el numero de filas es mayor a 1 
// de cumplirce estas condicionales pasara a un ciclo while donde $entradas sera operada como 
// un array asociativo y guardado en la $entrada
// dentro del ciclo while se listaran los datos asociativos segun se deseen motrar 
// $entrada['id'], $entrada['titulo'], $entrada ['categoria'], $entrada ['fecha'], $entrada ['descripcion']
    if (!empty($entradas) && mysqli_num_rows($entradas) >= 1):
        while ($entrada = mysqli_fetch_assoc($entradas)):
            ?>
            <article class="entrada">

                <a href="entrada.php?id=<?= $entrada['id'] ?>">
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
<!-- Mensaje de alerta si no se encuntran alertas en esta categoeria -->
    <div class="alerta">No hay entrada en esta categoria</div>
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
endif = SE utiliza para el cierre del if.

<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
$categoria_actual = conseguirCategoria($db, $_GET['id']);
if (!isset($categoria_actual['id'])) {
    header("location: index.php");
}
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<div id="principal">

    <h1>Entradas de
        <?= $categoria_actual['nombre'] ?>
    </h1>

    <?php
    $entradas = conseguirEntradas($db, null, $_GET['id']);

    if (!empty($entradas) && mysqli_num_rows($entradas) >= 1):
        while ($entrada = mysqli_fetch_assoc($entradas)):
            ?>
            <article class="entrada">

                <a href="entrada.php?id=<?= $entrada['id'] ?>">
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
    <div class="alerta">No hay entrada en esta categoria</div>
    <?php endif; ?>
</div>
<?php require_once 'includes/pie.php' ?>