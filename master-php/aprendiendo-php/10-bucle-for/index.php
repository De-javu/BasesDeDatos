<?php
/*
*FOR
for (variable contador, condicion, actualizando contador){
    //Bloque de isntrucciones
}

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