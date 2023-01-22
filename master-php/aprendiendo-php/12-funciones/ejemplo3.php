<?php
//////////////////////////////////////////////////////////////////////////////
/* EJEMPLO # 3:

*/
function calculadora($numero1, $numero2, $negrita = false ) {

    // Comjunto de isntrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicar = $numero1 * $numero2;
    $dividir = $numero1 / $numero2;

    if($negrita){
        echo"<h1/>";
    }
      
    
    echo "Suma: $suma </br>";
    echo "Resta: $resta </br>";
    echo "Multiplicacion : $multiplicar </br>";
    echo "Division: $dividir </br>"; 
     
    if($negrita){
        echo"<h1/>";
    }

    echo "<hr/>";
    return true ; 
}

calculadora(50,30,);

function devulveElNombre($nombre){
    return"El Nombre es: $nombre";
}

echo devulveElNombre("Victor robles ");



?>
