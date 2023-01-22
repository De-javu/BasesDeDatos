<?php
/*

EJERCICIO # 5: Hacer un programa que muestra todos los numero entre dos numero
que nos lleguen por la URL($_GET)
*/

if(isset($_GET['numero1']) && isset($_GET['numero2'])) {


    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

echo "Ingrese Dos numero en la URL, para realizar su consecutivo <br/> ";

if($numero1 < $numero2) {
    for($numero1 = $numero1; $numero1 <= $numero2; $numero1++) {

        if($numero1%2 != 0) {
            echo "<h4>$numero1, es impar</h4>";
        } else {
            echo "<h4>$numero1, es par </h4>";
        }

        //echo $numero1 .'<br/>'; 

}


}else { echo "El numero uno debe ser menor al numero 2";

}

}else {
    echo "Los parametros GET no existen ";
 }
?>