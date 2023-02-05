<?php
/*
EJERCICIO 3. programa  que compruebe si una variable esta vacia y si esta vacia,
rellenarla con texto en minuscula y mostrarlo en mayuscula y negrita.

FUNCIONES UTILIZADAS:

$ = Se utiliza para definir variables
if = Se utliza para determinar un condiconal 
empty = Determiona si una variable esta vacia 
strtoupper = Esta funcion pone el texto como mayuscula  
echo = nos permite imprimir por pantalla
else = condicional si no se cumple el if, se cumple el else 
strong = 


/*/

$variable = " contenido copado";

//var_dump($variable);

if  (empty($variable))
{
    $variable = "Hola soy el relleno de la variable";
    $variableMayuscula = strtoupper($variable); // Esta funcion hace el texto en mayuscula 

    echo "<strong>$variableMayuscula</strong>";
} else {
    echo "contenido de la Variable ".$variable;
}


?>
