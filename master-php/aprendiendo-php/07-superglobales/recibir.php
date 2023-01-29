
<?php

/* 
FUNCIONES UTILIZADAS :
var_dump() = proporciona informacion sobre el tipo de variable y  en el caso
             de array y objeto, de los elementos que la componen.

*/

// ESTE ES EL METODO GET
// // Con esta funcio puedo ver los datos que envie al al llenar el formulario

// echo $_GET['nombre'].'<br>';


// echo $_GET['apellido'];

// //Esta funcion nos permiete ver los datos que llegan desde la sistaccios del programa 
// var_dump($_GET);

//******************************************************************************** */
// Este es el metodo POST

echo $_POST['nombre'].'<br>';


echo $_POST['apellido'];

//Esta funcion nos permiete ver los datos que llegan desde la sistaccios del programa 
var_dump($_POST);

?>