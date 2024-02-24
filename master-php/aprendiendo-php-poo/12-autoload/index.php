<?php

require_once 'autoload.php';

$usuario = new Usuario();
echo $usuario->nombre;
echo "<br>";
echo $usuario->email;


$categoria = new Categoria();
echo "<br/>".$categoria->nombre;
echo "<br/>".$categoria->descripcion;

// DICCIONARIO DE FUNCIONES UTILIZADA PARA ESTA PRACTICA 

/*
requiere_once = Se utiliza para incluir fichero una nica vez 
new = Se utiliza para instanciar una clas y volverla un objero para su facil acceo
echo = Se utiliza para imprimier por pantalla 
br = Se utiliza para dar el salto de linea y organizar la imprecion en la web 
-> = Se utiliza para aceedr al metod actoal del objeto
*/





?>