 <?php
/*
*Variables locales: Son las que se definen dentro de una funcion  y no puede ser 
*Usadas fuera de la funcion, solo estan disponibles dentro. s no ser que realicemos
*un return

*
Variables Globales: Son las que se declaran fuera de una funcion y estan disponibles
 */

 //Variable global
 $frase = "Ni los genios son tan egenios, ni los mediocres tan mediocres";
 echo $frase;

 function holaMundo() {
    global $frase;
    echo "<h1>$frase</h1>";
 }
  holaMundo();


  // Funciones variables

   

 ?>