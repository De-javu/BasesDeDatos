<?php

/*

FUNCIONES UTILIZADAS:

COPY = Se utiliza ara copiar de una ubicacion a otra
or die = 
rename
unlink

*/
//Copiar archivo
//copy('fichero_texto.txt', 'fichero_copiado.txt') or die("ERROR AL COPIAR");

//Renombrar
//rename('fichero_copiado.txt', 'archivito_recopiadito.txt');

//Eliminar
unlink('archivito_recopiadito.txt') or die ('Error al borrar');