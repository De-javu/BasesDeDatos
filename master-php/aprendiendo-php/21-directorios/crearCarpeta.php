<?php

/*
FUNCIONES UTILIZADAS:

if = Esta funcion se utiliza como condicional
! = Es un operador de negacion 
is_dir = Se utiliza para comprobar si el archivo es un directorio
mkdir = Creacion de un direcorio 
0777 =  Esto significa el acceso mas amplio posible 
or =  evaluador Se cumple una de las dos fucnciones
die = Esta funcio imprime un mensaje y arroja el script
else = Es uncondciona donde le if inicial no se cumple, se trabajara sobre else
echo = permiete imprimir por pantalla
opendir = Permite abrir un mensaje del directorio
readdir = Permite leer un directorio
&& = SE utiliza como un condicional que evalua dos funciones las cuales debe ser verdaderas
     para que se ejecuten

*/


if (!is_dir('mi_carpeta')) {

    mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta');

} else {
    echo "Y existe la carpeta";
}

//para eliminar carpeta
//rmdir('mi_carpeta'); 

echo "<hr> <h1>Contenido de carpeta </h1>";
if ($gestor = opendir('./mi_carpeta')) {
    while (false !== ($archivo = readdir($gestor))) {
        if ($archivo != '.' && $archivo != '..') {
            echo $archivo . "</br>";
        }
    }
}
?>