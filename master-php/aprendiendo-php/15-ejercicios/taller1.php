<?php

/*
Ejercicio # 1:
Hacwe un peograma con PHP que tenga un array con 8 numeros enteros 
y que haga los siguinete:
_ Recorrerlo
_ Ordenarlo y mostrarlo
_ Mostrar su longitud 
_ Buscar algun elemento.


FUNCIONES UTILIZADAS:

funtion = Es un conjunto de instrucciones agrupadas bajo un nombre concreto y que 
          puede utilizarse solamente invocando a la funcion tanta veces como se desee.
mostrararray = ES el nombre qu le dimos a la funcion 
$ =  la utilizamos para definir una variable
foreach = Se utiliza para recorrer un arreglo
br = se utiliza para los saltos de linea 
return = Devuelve el control del programa al  modulo que lo envoca 
array = array = Nos permite definir multiples datos en una variable 
echo = Nos permiete imprimir por pantalla
sort = se utiuliza para organizar el array de amnera acsendente
count = permiete contar los elementos de array 
isset = Determina si un avraible fue declarada o su valor es nulo 
array_search = Nos permite buscar un valor dentro de un array 
empty = Determina si una variable esta vacia 
if = condicional
! = Se utiliza para la negacion
else =  en caso de que no se cumpla el if, se ejecuta el else

*/

//FUNCIONES
function mostrarArray($numero){
    $resultado = "";
    foreach ($numero as $valor) {
        $resultado.= $valor."<br/>";
    }
    return $resultado;

}

//CREAR ARRAY
$numero = array(5,6,11,88,20,21,56,24,60,32,99,2,100,25,20);

//RECORRER Y MOSTRAR
echo "<h1>Recorrer y Mostrar </h1>";
 echo mostrarArray($numero);

 //ORDENAR Y MOSTRAR
 echo "<h1>Ordenar y Mostrar</h1>";
 sort($numero);

 echo mostrarArray($numero);

 //MOSTRAR SU LONGITUD
 echo "<h1>Numero total de elementos</h1>";
 echo count($numero);

//BUSCAR EN EL ARRAY    

if(isset($_GET['encontrar'])){
  $buscar = $_GET['encontrar'];

echo "<h1>Bucar en el array el numero $buscar</h1>";

$search = array_search($buscar, $numero);

if(!empty($search)){
  echo"<h1>El numero buscado existe en el array, en el indice: $search </h1>";

}else {
    echo "No existe numero buscado";

   }
}

?>
