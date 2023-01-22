<?php

/*
EJERCICIO # 6:
Mostrar en pantalla  una tabla HTML con las tablas de multiplicar del 1 al 10.
*/

echo "<table border='1'> <tr>"; // inicio de la tabla 
echo "<tr>"; // inicio fin 1 de celdas 
 for($cabeceras = 1; $cabeceras <= 10; $cabeceras++){  // con este bucle realizamos las tablas
     echo "<td>Tabla del $cabeceras</td>";
 }
 echo "</tr>"; // cierre fila 1 de celdas 
 echo "tr"; // inicio fila 2 de celdas
 for ($i = 1; $i <= 10; $i++){  //  con este bucle ponemos el conetnido dentro de las tablas 
    echo "<td>";
    for ($x = 1; $x <= 10; $x++){
        echo "$i x $x = ".($i*$x)."</br>";
    }
    echo "</td>";
 }
 
 echo "</tr>"; // cierre fila dos 
echo "</table>"; // fin de la tabla 
 

?>