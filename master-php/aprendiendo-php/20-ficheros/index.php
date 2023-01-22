<?php


// abrir archivo
$archivo = fopen("fichero_texto.txt","a+");


//Leer contenido
while(!feof($archivo)){

$contenido = fgets($archivo);
echo $contenido."<br/>";
}

// Escribir
fwrite($archivo,  "*** Soy un texto metio desde PHP***");

// Cerrar archivo
fclose($archivo);
