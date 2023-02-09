<?php

/*
FUNCIONES UTILIZADAS:

session_start = Se utiliza para crear una seccion, basada en el el identificador 
                que se pasa por GET o POST
echo =  Nos permiete imprimir por pantalla
*/

session_start();

echo $_SESSION['variable_persistente'];

?>