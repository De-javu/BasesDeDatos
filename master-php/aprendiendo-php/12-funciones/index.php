<?php
/*
FUNCIONES: Una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto
y que puede utilizarse solamente invocando a la funcion tanta veces como se desee.

funtion nombreDeMiFuncion($parametro) {

FUNCIONES UTLIZADAS:

funtion = una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto
          y que puede utilizarse solamente invocando a la funcion tanta veces como se desee.
echo = No spermite imprimir por pantalla
$ = la utilizamos para definr variables
h3 = permite crear texto como tittulos en este caso categoria 3
hr = Nos permite realizar en la pantalla de impresion una visualizacion separada y mas ordenada 
for = permite repetir un bloque de instrucciones las veces que sea necesario.
$GET_ = Nos permite ingresar parametros desde la URL o desde formulario  enviados con el 
        metodo GET
isset = Determina si una variable a sido declarada y su valor no es NULO
tabla = Es ub conjunto de celdas 
if = condicional cumle o no cumple
else = condicional que entra a ser evaluado si id no se ejecuta
br = salto de linea
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


