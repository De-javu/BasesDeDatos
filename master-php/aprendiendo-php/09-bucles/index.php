<?php
/* Bucle WHILE
Estrucutura de control que itera o repiete la ejecucion de una serie de instrucciones
tantas veces como sea necesario, en base a una condicion.

while(condicion){
    bloque de isntrucciones
    otra instruccion
}
*/

$numero = 0;
while($numero <= 1000){
    echo"$numero, ";
    $numero++;

}
// EJEMPLO
echo"<hr/>";
if(isset($_GET['numero'])){
    //cambiar tipo de dato
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

echo "tabla de multiplicar del numero $numero";

$contador = 1;
while($contador <= 10) {
    echo "$numero x $contador = ".($numero*$contador). "<br/>";
    $contador++;
}
    
echo "<hr/>";

/**
 * DO WHILE
 * do {
 *      bloque de instrucciones
 *    }while(condiciones);
 **/

 $edad = 16;
 $contador = 1;
 do {
    echo "Tiene acceso al local privado $contador <br/>";
    $contador++;
 }while($edad >= 18 && $contador <= 10);

?>