<?php

/*
Ejercicio # 4 Recojer dos numeros por la URL (Parametros GET) y realizar todas las operaciones
basicas de una calculadora (SUMA, RESTA, MULTIPLICACION y DIVISION), 
de esos dos numero.
*/

// EL GET = nos permite tomar datos de la URL, luego se crea las variables para guardarlos alli.
if(isset($_GET['numero1']) && isset($_GET['numero2'])) {

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "SUMA: ".($numero1 + $numero2)."<br/>";
    echo "RESTA: ".($numero1 - $numero2)."<br/>";
    echo "MULTIPLICACION: ".($numero1 * $numero2)."<br/>";
    echo "DIVISION: ".($numero1 / $numero2)."<br/>";

} else {
    echo "Introduce los valores correctamnete en la URL";
}

?>