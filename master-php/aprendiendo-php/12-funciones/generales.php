<?php
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

