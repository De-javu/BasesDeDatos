<?php
/*COMDICONALES
Permietn por medio del codigo asignar una funcion si se cumple la conndicion haga algo,
o si no se cumple realice otra funcion

ejemplo
 if(condicion ){
    intruccion a ejecutar
 }else{
    Otras instrucciones
 }
*/
/*
OPERADORES DE COMPARACION 
==    IGUAL 
===   IDENTICO
!=    DIFERENTE
<>    FIFERENTE 
!==   NO IDENTICO
<     MENOR QUE 
>     MAYOR QUE 
<=    MENOR IGUAL QUE 
>=    MAYOR IGUAL QUE 

************************************

OPERADORES LOGICOS
&& AND TRADUCE  =Y
|| OR  TRADUCE  =O   ............. SE SACA CON ALT 124
! NOT TRASDUCE  =NO
AND,OR 

*/ 

// EJEMPLO #1

$color = "rojo";

if($color == "amarillo") {
    echo "El color es rojo";
} else {
    echo "El color no es rojo";
}  

echo "<br>";

//EJEMPLO # 2

$AÑO = 2022;
if($AÑO != 2022) {
    echo 'Este no es el año 2020';
} else{
   echo 'Este año es el 2022';
}

echo "<br>";

//EJEMPLO
$nombre = "Andres Pardo";
$ciudad = "Bogota";
$edad = 25;
$mayoria_edad = 18;
$pais = "Colombia";


if($edad >= $mayoria_edad){
    echo "$nombre es mayor de edad";
    echo " tiene $edad años ";

    if($pais == "Colombia"){

      echo " es de la ciuadad de $ciudad";
    } else{
        echo "No es Colombiano";
    }
   
}else{
    echo "$nombre es nemor de edad";
    echo " tiene $edad años ";
}

// Elsefi, nos permite simplificar y no poner tantos else if uno dentro de otro 
//EJEMPLO # 4

echo "<hr>";

$dia = 2;

if($dia == 1){
    echo" Es lunes";
}elseif($dia == 2){
    echo" Es Martes";
}elseif($dia == 3){
    echo" El dia es Miercoles";
}elseif ($dia == 4) {
    echo " El dia es Juves";
}elseif($dia == 5){
   echo "Es Viernes";
}elseif($dia == 6){
    echo "Es sabado";
}elseif($dia == 7){
    echo "Es Domingo";
}

echo "<hr>";

//Ejemplo con la estrucutra switch 

$dia = 15;
switch ($dia){
    case 1:
        echo"Lunes";
        break;
    case 2:
        echo"Martes";
        break;
    case 3:
        echo"Miercoles";
        break;    
    case 4:
        echo"Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sabado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
    echo"Este valor no corresponde a ningun dia de la semana , recuerda marcar del 1 al 7";
}

//EJEMPLO # 5

echo "<Hr>";
$edad1 = 18;
$edad2 =64;
$edad_de_trabajo = 18;

if($edad_de_trabajo >= $edad1 && $edad_de_trabajo <= $edad2){
  echo" Esta en edad de trabajar";

}else {
    echo " No cumple la edad para trabajar";
}

//EJEMPLO # 6
//APLICACION  DEL OPERADOR || QUE TRADUCE  O 

echo "<br>";

$$pais = "Colombia";
if($pais == "Mexico" || $pais == "Colombia" || $pais == "España"){
    echo" En este pais se habla español";
}else{
    echo"No se habla español";
}

//OPERADOR GOTO
// funciona para saltar las lineas de codigo que q  ueremos poner entre el goto y las linea que queremos que se ejecute
// la marca puede tener el nombre que se desee.
//EJEMPLO
goto Marca;

echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";

Marca:
echo "<h3>Me salte 4 marcas</h3>";
?>