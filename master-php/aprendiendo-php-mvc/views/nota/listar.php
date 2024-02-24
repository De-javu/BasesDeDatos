<?php
if ($notas) {
    while ($nota = $notas->fetch_object()): ?>
        <?= $nota->titulo ?> -
        <?= $nota->fecha ?></br>
    <?php endwhile;

} else {
    echo "Error: La consulta no devolvió ningún resultado.";
}

// DICCIONARIO DE FUNCIONES UTILIZADAS PÁRA ESTA PRACTICA 
/*
if = Se utiliza como condicional, si se cumple ejecutara el codigo dentro de los corchetes
while = Es bucle repetitivo elcual indica haga mientras la condicion se cumple
fetch_objet = SE encarga de devolver la fila convertida en un objeto en espesifico 
endwhile = indica que se cierra el contenido del codigo del ciclo while.
else = Es un condicinal que se evalua condo el if no se cuemple.

NOTA: Este fichero se encarga de evaluar la varible nota la cual tiene una consulta 
en la base de datos por medio de sql, por medio de fetch_object nos trae la fila de resultados
con el ciclo while el  cual se encarga de listar los atributos que contiene la tabla nota,
como lo son titulo y fecha, si la variable nota no trae informacion de
consulta  el programa enviara desde el else un mensaje indicando que por pantalla erro.
*/

?>