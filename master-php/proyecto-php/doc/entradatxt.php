<?php
// // Este codigo tiene como tarea mostrar las entradas que se han realizado y 
//    esten alojadas en la base de datos.
// **********************************************#1*******************************************
// #para ello lo primero que hacemos en llamar a los ficheros de codigo que ya tenemos 
//     estructurados como lo es la conexion a la base de datos y el archivo helpers.
//     que es donde realizamos la logica para la consulta.
?> 
     <?php require_once 'includes/conexion.php'; ?>                                                    
     <?php require_once 'includes/helpers.php'; ?>  

<!-- // ****************************************************************************************** -->
<!-- // # Se Crea una variable la cual nos va permitir guardar el dato que recogemos por el metodo

$_GET[id]; -->

<?php 
$id =$_GET['id'];


// *****************************************************************************************
// #para envocar la funcion  conseguirEntrada le pasamos (la variable $db = base de datos)      
//  le pasamos la variable ($id = que en este caso nos pasa un id  por url metodo GET).

$entrada_actual = conseguirEntrada($db, $id);

// *****************************************************************************************
// #Se crea un condicional con el metodo if que evaluara si las funciones no estan declaradas,
//  de ser veradero nos redigira a la pagina principal index.php.

if(!isset($entrada_actual['id'])){
    header("location: index.php");
}     
// ******************************************************************************************

// # ahora se hace llamado de los ficheros cabecera y lateral que nos permitira ver el entorno
//     de los que ya tenemos programado previamente en los ficheros.
?>
    <?php require_once 'includes/cabecera.php'; ?>   <!--= Se utiiza para traer conexion con
                                                programado en la cabecera-->
    <?php require_once 'includes/lateral.php'; ?>   <!--= Se utiliza para traer conexion con 
                                                 //porgramado en el lateral -->
  <!-- **************************************************************************************** -->


<!-- # llamamos la caja div con id principal que ya contiene los estilos. -->
     <div id="principal"> 
<!-- 
*****************************************************************************************

 #creamos un h1 dentro ponemos  codigo php llamamos la variable $entrada_actual y 
     solicitamos que nos traiga el titulo. -->
     <h1><?=$entrada_actual['titulo']?></h1>
    
<!-- *******************************************************************************************

   # Creamos un h2 dentro ponemos codigo php, llamamos la variable $entrada_actual y 
     solicitamos que nostraiga la categoria.
     ponemos dentro de un una etiqueta de url, redireccionamos para el fichero ("categoria.php)
     pasamos el  dato por la url solicitamoe igualamos a la variable entrada_actual le pedimos
     que nos traiga la consulta catgoria_id. -->

     <a href="categoria.php?id=<?=$entrada_actual['categoria_id']?>">
     <h2><?=$entrada_actual['categoria']?></h2>
     </a>
    
<!-- *******************************************************************************************
    #Creamos p, ponemos codigo php , llamamos la variable $entrada_actual y solicitamos
    que nos traiga la descripcion. -->

    <p><?=$entrada_actual['descripcion']?></p>

<!-- ****************************************************************************************
     
    #Creamos un h4 dentro ponemos codigo php, llamamos la variable $entrada_actual y 
     solicitamos que nostraiga la fecha.adicional utilizamos el operador or | que en este caso se
    se enargara de separa la fecha de usuario que se esta solictando por medio de array asociativo
    se imprime el valor del titulo y el nombre del usarios dentro de nuestro programa -->

    <h4><?=$entrada_actual['fecha']?> | <?=$entrada_actual['usuario'] ?></h4>
<!-- 
******************************************************************************************
Creamos un if que evaluara dos condiciones
las cuales estan estructuradas por el operador  AND && donde se deben cumplir las dos para
validar que el usuraio logueado es el mismo que creo la entreada.

 En la primera se utiliza la variable superglonal $_SESSION la cual  evaluada por
 un isset para evaluar su valor de usuario este definido.

 La segunda la variable superglobal $_SESSION se evalua si el valor asociado usuraio y id
 son iguales a la variable $entrada_actual por medio del operador de comparacion  ==
 si esta se cumple se mostrara las entradas que a generado el usuario solo al logerce

 por otra parte se añaden dos link con dos botones:
 el primero es para editar entradas
 el segundo es ´para borrar entradas 
 estos botones solo los podra ver el usurio logeado en las entradas creadas por el.

-->
<?php if(isset($_SESSION["usuario"]) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']):?>
<a href="editar-entradas.php" class="boton boton-naranja">Editar entradas</a> <br/>
<a href="borrar-entrada.php" class="boton boton-rojo">Eliminar</a> <br/>
<?php endif; ?>


  <!-- #Por ultimo cerramos la etiqueta div y poenos el fechiero de pie de pagina. -->
   </div>
   <?php require_once 'includes/pie.php' ?>

<!-- ******************************************************************************************
**********************************FUNCIONES UTILIZADAS*****************************************


$ = Se utiliza para definir una variable
$_GET = Es un array asociativo de variables que envia parametros por la url
conseguirEntrada($db, $id) = Esta es el llamado de la funcion con la logica de consulta sql
if = Se utiliza como condicional si se culple ejecuta una tarea si no se cumple ejecutara otra conectamos
! = operador de  negacion, se utiliza para cambiar el estado de alguna funcion
isset = Se encraga de evaluar si una variable fue declara o si su valores nulo
header = Se utiliza para redireccinarnos al ficher que se deees
div = se usa para poner la caja en html ydentro porner los elementos que sedean ver
id="principal" = Es la parte donde veremos reflejados los datos que consultamos
h1 = Se usa para indicar titulo de tipo h1 
$ = Se utiliza para definir una variable
a href = SE utiliza para poner url y redireccinar a una pagina web que se desee
h2 = Se utiliza para poner titulos de tipo 2
p = Se utiliza para poner parrafos 
h4 = Se utiliza para poner titulos de tipo 4 o sea mas pequeños
| = Se utiliza como operador or bit a bit 
$_SESSION["usuario"]) = Se utlliza para validar un array asociativo, para este caso solicta
                        que traiga el usuario asoiado a la session logeado
&& = oprador logico AND se encraga de evaluar dos funciones donde ejecutara si las dos se cumplen 
$_SESSION['usuario']['id'] = Se encarga de evaluar que la session actual esta logeada
                            tantu uraui como id
== Opetadores logicos de igualdad
$entrada_actual['usuario_id']) = Se encarga de evaluar el usuario y el id sean iguales alos de la 
                                entrada actual 
a href = Se utiliza para poner un link de redireccion que nos llevara aotra pagina
boton class= se utiliza para definir los estilos que llevara el boton 
br = Se utiliza para un salto de linea
endif = Se utiliza para cerrar el condicional if 

*************************************************************************************************
*************************************CODIGO************************************************* -->

<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<?php

$id =$_GET['id'];
$entrada_actual = conseguirEntrada($db, $id);
if(!isset($entrada_actual['id'])){
    header("location: index.php");

}
?>

<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<div id="principal">

<h1><?=$entrada_actual['titulo']?></h1>

<a href="categoria.php?id=<?=$entrada_actual['categoria_id']?>">
<h2><?=$entrada_actual['categoria']?></h2>
</a>
 <p><?=$entrada_actual['descripcion']?></p>
 <h4><?=$entrada_actual['fecha']?> | <?=$entrada_actual['usuario'] ?></h4>


 <?php if(isset($_SESSION["usuario"]) && $_SESSION['usuario']['id'] == $entrada_actual['usuario_id']):?>
<a href="editar-entradas.php" class="boton boton-naranja">Editar entradas</a> <br/>
<a href="borrar-entrada.php" class="boton boton-rojo">Eliminar</a> <br/>
<?php endif; ?>

</div>

<?php require_once 'includes/pie.php' ?>