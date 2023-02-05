<?php

/*
EJERCICIO # 2: Escribier un programa con PHP que añada valores a un array mientras
que su longitud
sea menor a 120 y luego mostrarlo en pantalla.

FUNCIONES UTILIZADAS:

$ = Se utiliza para definir un variable
array = Es una estrucutura de datos que se utiliza para definir varios elementos
        en una sola variable.
for = Se utilizara para que ejecute una serie de tareas las veces que sea necesario
array_push = Se utiliza pa insertar mas elementos al final de un array
var_dump = Nos permiete tamaño, valor de las variables en el caso de los array la estrucutura
        que lo componen



*/ 
$valor = array();

for($i = 0; $i< 180; $i++){
     $an= array_push($valor,'elemento-'.$i);

}

for($an = 0; $an<=$an; $an++){

    echo "<p>$an<p/>";

}

var_dump($valor);















?>