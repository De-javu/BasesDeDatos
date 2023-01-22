<?php
/*
FUNCIONES: Una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto
y que puede utilizarse solamente invocando a la funcion tanta veces como se desee.

funtion nombreDeMiFuncion($parametro) {

}
*/

//EJEMPLO # 1

function muestraNombre() {
    echo "Andres pardo <br/>";
    echo "Camilo pardo <br/>";
    echo "Carlos pardo <br/>";
    echo "Hulck pardo <br/>";
    echo "<hr/>";
}
// invocar funcion 

muestraNombre();

//EJEMPLO # 2

function tabla ($numero) {
    echo "<h3>Tabla de multiplicar de numero : $numero</h3>";

    for ($i = 1; $i <= 10; $i++) {
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br/>";
    } 
}

// invocamos la funcion desde la url

if(isset($_GET['numero'])){
    tabla($_GET['numero']);
    
}else{
    echo "No tenemos datso para realizar la multiplicacion";
}




 
?>


