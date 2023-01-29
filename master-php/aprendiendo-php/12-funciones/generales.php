<?php

/*
FUNCIONES UTILIZADAS:
$ = Se utiliza para definir una variable
echo = NOs permite imprimir por pantall 
gettype = Se utliza para determinar si una variables es de un tipo o de otro
br = Permite realizar saltos entre lines
is_string = Comprueba si una variable es de tipo string o no.
hr = Genrea una separacion entre secciones del contenido
!is_float = Determina si el tiepo de variable es un un float
isset = Permite evaluar si la variable fue declara y que el valor no sea nulo
trim = Elimina espacios en blanco al inicio y al final de una cadena 
unset = Se utiliza para eliminar una o varias variables
empty = Se utiliza para determinar si una variable esta vacia
trim = Quita espacios al inicio y al final de un cadena 
strlen = Se utiliza para obtener la longitud de un cadena y devulve el dato en numero 
strpos = Devulve la posicion de la primera concidencia de la palabra o caracter buscado en
         una cadena de texto
str_replace = Se utiliza para buscar y remplazar cadena y caracteres dentro de in string
strtolower = convierte a miniscula 
strtoupper = convierte a mayuscula 
*/

// Otras funciones generales predefinidas

$nombre = "Andres Pardo";

echo gettype($nombre); // Esta funcion nos permite ver de que tipo es


echo "<br>";

if(is_string($nombre)){
    echo "Esa variable es un string";
}

echo "<br>";

if(!is_float($nombre)){
    echo "La variable nombre no es un  numero con decimales";
}

// Comprobar si existe una variable
echo "<hr/>";

if(isset($nombre)){
    echo "La variable existe";
}else {
    echo "La varaible no existe";
}

// Limpiar espacios 
echo "<br/>";
$frase = "                mi contenido";
echo (trim($frase));

// Eliminar variables / indice 

echo "<br/>";
$year = 2020;
unset($year);

// comprobar un variable vacia 

echo "<hr/>";

$texto = 23;

if(empty(trim($texto))){
    echo "La variable texto esta vacia";

}else{
    echo "La variable texto TIENE CONTENIDO ";
}

echo "<hr/>";
// CONTAR CARACTERISTICAS DE UN STRING
$cadena = "12345";
echo strlen($cadena);

echo "<hr/>";

// Encontrar un caracter
$frase = "La vida es bella";
echo strpos($frase, "L");

echo "<hr/>";

// REMPLAZAR PALABRAS DE UN STRING
$frase = str_replace("vida","moto",$frase);
echo $frase;

//MAyusculas y minusculas
echo strtolower($frase);
echo ("<hr/>");
echo strtoupper($frase);
?>

