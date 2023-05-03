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
 <h4><?=$entrada_actual['fecha']?></h4>



   
   

    

</div>



<?php require_once 'includes/pie.php' ?>

