<?php

/* Ejercicio # 2: 
1. Una funcion.
2. Validar un  email con filter_Var
3. Recoger variables por GET y validarla.
4. Mostarr el resultado.
FUNCIONES UTILIZADAS:

funtion = Una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto
          y que puede utilizarse solamente invocando a la funcion tanta veces como se desee.
$ = Se utiliza para asignar ua variable
if = Se utiliza como condicional
empty = La utiulizamos para saber si una variable esta vacia.
&& = Se utuliza como condicional indicando q se deben cumpplir las dos instrucciones
filter var = Se utuliza para filtrar y validar por un datos en espesifico
FILTER_VALIDATE_EMAIL = Se utiliza para validad un direccion de correo electronico
return = Devulve el programa hasta el punto dende se emboco
isset = Determina si una variable a sido declarada o su valor es nulo
$_GET = Se utiliza para pasar datos por la url
else = Si no se cumple el if entonces se cumple el else, un condicional
echo = Se utiliza para imprimir por pantalla


*/

function validarEmail($email)
{
    $status = "No valido.";
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status = "valido";
    }

    return $status;
}

if (isset($_GET['email'])) {
    echo validarEmail($_GET["email"]);

} else {
    echo "Pasa por get un email";
}

?>