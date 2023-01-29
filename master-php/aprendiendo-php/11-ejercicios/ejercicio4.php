<?php

/*
Ejercicio # 4 Recojer dos numeros por la URL (Parametros GET) y realizar todas las operaciones
basicas de una calculadora (SUMA, RESTA, MULTIPLICACION y DIVISION), 
de esos dos numero.

FUNCIONES UTILIZADAS:

$ = Nos permiete declarar las variables
isset =Determina si una variable a sido declarada y su valor no es NULO
$_GET = Nos permite ingresar parametros desde la URL o desde formulario  enviados con el 
        metodo GET
&& = solicita evaluar una condicion primero, si esta no se cumple no evalauara el 
     resto de la operacion.
echo = permiete imprimir por pantalla
br = Nos permite realizar salto de lineas
if = condicional
else = si no se cumple la condicion if, entoces cumplace la condicion del else
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
    echo "Introduce los valores correctamente en la URL";
}

?>