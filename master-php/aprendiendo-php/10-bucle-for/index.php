<?php
/*
*FOR
for (variable contador, condicion, actualizando contador){
    //Bloque de instrucciones
}

FUNCIONES UTILIZADAS:

$ = Se utiliza para definir funciones
echo = no spermite imprimir por pantalla el resultado de lo programado
p = seutiliza para distribuir el texto en parrafos
hr = Genar una separacion por secciones en el contenido
$_GET = Nos permite ingresar parametros desde la URL o desde formulario  enviados con el 
        metodo GET
isset = Determina si una variable a sido declarada y su valor no es NULO
if  = condicional
else = si no se cumple el if, cumplase el else o sea otro condicional
for = un boque de control que permite repetirla instruccion un numero de veces hasta cumplirce 
Breack = permite salir de la ejecuion de un bucle
*/

$resultado = 0;
for($i = 0; $i <= 100; $i++){
    $resultado += $i;
    echo "<p>$resultado<p/>";

}
echo "El resultado es : $resultado";


//EJEMPLO TABLA DE MULTIPLICAR

echo"<hr/>";
if(isset($_GET['numero'])){
    //cambiar tipo de dato
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

echo "tabla de multiplicar del numero $numero";


for($contador = 1; $contador <= 10; $contador++) {
    

    if($numero == 45) {
        echo "No se puede mostrar esta operacion prohibida";
        break;
    }

    echo "$numero x $contador = ".($numero*$contador). "<br/>";
}
?> 