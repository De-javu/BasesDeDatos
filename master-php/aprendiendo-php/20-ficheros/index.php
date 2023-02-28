<?php


/*
FUNCIONES UTILIZADAS
$ = Se utiliza para declarar un a variable
fopen = Se utuliza para crear oabrir un archivo q se encuentra en el fichero
while = Un ciclo que se ejecutara hasta q la sentencia se cumpla 
! = Se utiliza cpmp operador de negacion
feof = Devulve true hasta el final del archivo
echo = permiete imprimir por pantalla
fwrite = Permite escribir en el archivo
fclose = cerrar archivos


*/

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
