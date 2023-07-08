<?php
/* En este codigo se desea realizar la busqueda dentro del blog que se creo, creando una vista muy facil de utilizar
 donde pondremos las palabra clave a buscar y el la conficugracion que se creo nos va traer todo lo que contenga
 ********************************************************************************************************************/

 /* Para iniciar utilizamos una cindicional if la cual vamos a evaluar si el no esta definida, la cual se recibe por el
 metodo POST y se le pasa el parametro busquerda se ser verdadera se redirecionara a la pagina principal index.php*/
if(!isset($_POST['busqueda'])){
    
    header("location: index.php");
}
/***********************************************************************************************************************/
/* Se realiza la inlucion de las paginas ya creadas que tienen la cinfuguracion predeterminada como lo es la cabecera
el lateral los cuales vamos a cargar y a utilizar por el metod requiere_once*/
?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>
<!-- **************************************************************************************************************** -->

<!-- *****************************************************************************************************************
En eta parte del codigo entramos al html y creamos el campo del div principal un titilo el cual esta concatenado para 
que nos retorne los datos de la busqueda en el formulario.-->


<div id="principal">
   

    <h1>Busqueda: <?=$_POST['busqueda']?></h1>
<!--******************************************************************************************************************-->
 <!-- En esta poarte del codigo se crea una variable entradas la cual contiene la funcion creada conseguirEntradas
que recibe los parametros de la base de datos , los valores nulos que no aplican para esta consulta y por ultimo el metodo
POST con la busqueda -->

    <?php
   $entradas = conseguirEntradas($db, null, null, $_POST['busqueda']);
//******************************************************************************************************************** */

// Se indica una funcion if la cual va evaluar si los parametros estan definidos o si son  nulos y si el numero de filas del
// resultado en la variable entradas es mayor igual a 1 , de cumplirce se ejecutarla el ciclo while
    if (!empty($entradas) && mysqli_num_rows($entradas) >=1 ):
//*********************************************************************************************************************** */

// En este punto utilizamos una estrucutra de control while que se utiliza para recorrer todas las filas del conjunto entradas
// la cual se le asignara una variable $entrada y sera igualada al array asociativo donde se podra acceder a los campos 
// a un array associativo que trae una consulta de la base de datos por la variable $entradas y puede acceder a los valore de 
// de los campos  de entrada id, titulo, fecha, categoria 
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
endif = SE utiliza para el cierre del if-->

<!--*****************************************************CODIGO*********************************************************-->

<?php
if(!isset($_POST['busqueda'])){
    
    header("location: index.php");
}
?>

<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<div id="principal">
 
    <h1>Busqueda: <?=$_POST['busqueda']?></h1>
 
    <?php
   $entradas = conseguirEntradas($db, null, null, $_POST['busqueda']);

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
