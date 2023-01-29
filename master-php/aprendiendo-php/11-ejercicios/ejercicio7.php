<?php
/*

EJERCICIO # 5: Hacer un programa que muestra todos los numero entre dos numero
que nos lleguen por la URL($_GET)

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
for = Permite repetir un bloque de instrucciones las veces que sea necesario
else = si no se cumple la condicion if, entoces cumplace la condicion del else
H4 = Permite crer u  cabezado, como lo son los titulo este es uno de nivel 4
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