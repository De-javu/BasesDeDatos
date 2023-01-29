<?php

/*
FUNCIONES UTILIZADAS:

$ = Se utiliza para defirnir varables dentro de php
array = Es una estrcutura de datos que permiete almacenar multiples elemnetos 
        en una sola variable.
for = se utliza para repetri un bloque de isntricciones determinada veces 
foreach = Es un bluche especial que permiete que permiete recorrer estrucutras que
          contienen varios elemnetos (matrces, recursos u objetos) si preucupacion del
         numero de elementos.
li = Se utiliza para crear item dentro d ela lista 
ul = se utiliza para definir listas no ordenadas
         
*/

/*ARRAYS 
Una array es una coleccion o un conjunto de datos/valores, bajo un unico nombre.
Para acceder a esos valores podemos usar un indice numerico a alfanumerico. 
*/

// Se pueden definir los arrays de estas dos formas y las dos sonn correctas 
//EJEMPLO # 1
$peliculas = "Batman";
$peliculas = array('Batman', 'Spiderman', 'thor', 'hulk', 'iron man');

//var_dump($peliculas[1]);
echo $peliculas[3];
echo "<hr/>";

//EJEMPLO # 2
$cantantes = ['feid','piso 21','Nincky jam','bless'];
//var_dump($cantantes);
echo $cantantes[0];

// ARRAY ASOCOATIVOS

$personas = array(
    'nombre' => 'Andres',
    'apellidos' => 'Pardo',
    'Web' => 'victor roblesweb.es' 

);

echo $personas['apellidos'];
echo $personas['nombre'];

// Recorre el array con un ciclo for

echo "<h1>Listado de peliculas</h1>";
echo "<ul>";

for($i = 0; $i < count($peliculas); $i++){
   echo "<li>".$peliculas[$i]."</li>";
}

echo "</ul>";

//Recorrer con FOREACH los arrasys
echo "<hr/>";


echo "<h1>Listado de Cantantes</h1>";

echo "<ul>";

foreach ($cantantes as $cantantes){
    echo "<li>". $cantantes."</li>";

   echo "</ul>";
}




?>
