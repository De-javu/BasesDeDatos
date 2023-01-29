<?php
//////////////////////////////////////////////////////////////////////////////
/* EJEMPLO # 3:

FUNCIONES UTILIZADAS:

function = Conjunto de instrucciones agrupdas bajo un nombre completo, pueden utilizarce 
           unicamente invocando a la funcion tantas veces como se desee
false = es un dato booleano, que se evalua pued ser true(9verdadero) p false (false)
$ =  Se utiliza para definir una variable 
if = condicional 
echo = Nos permiete imprimir por pantalla 
h1 = La utilizamos como una etiqueta de titulo de la familia tipo 1 de HTML
br = No spermiete saltar entre lineas
return = Si es llamdo desde una funcion, la sentencia return inmediatamente termina la
        ejecucion de la funcion actual, devulve su argumento como el valor de la llamada 
        a la funcion.
true = es un dato booleano, que se evalua puede ser true(verdadero) o false (falso)

*/
function calculadora($numero1, $numero2, $negrita = true ) {

    // Comjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicar = $numero1 * $numero2;
    $dividir = $numero1 / $numero2;

    if($negrita){
         echo "<h1>";
    }
      
    
    echo "Suma: $suma </br>";
    echo "Resta: $resta </br>";
    echo "Multiplicacion : $multiplicar </br>";
    echo "Division: $dividir </br>"; 
     
    if($negrita){
        echo "</h1>";
    }

    echo "<hr/>";
    return true ; 
}

calculadora(50,50);

function devulveElNombre($nombre){
    return"El Nombre es: $nombre";
}

echo devulveElNombre("Victor robles ");



?>
