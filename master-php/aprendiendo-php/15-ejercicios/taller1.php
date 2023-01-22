<?php

/*
Ejercicio # 1:
Hacwe un peograma con PHP que tenga un array con 8 numeros enteros 
y que haga los siguinete:
_ Recorrerlo
_ Ordenarlo y mostrarlo
_ Mostrar su longitud 
_ Buscar algun elemento.
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
