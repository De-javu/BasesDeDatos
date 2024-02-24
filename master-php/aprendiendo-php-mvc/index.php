<h1>Bienvenidos a mi web con MVC</h1>
<?php
// 1) carga el controlador
require_once 'autoload.php';

// 2) Verificacion del parametros conroller en la URL
if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';
}else{
    echo 'La pagina que b usca no existe';
    exit();
}

// 3) Verificacion de la existencia de la clase controller 
if (isset($nombre_controlador) && class_exists($nombre_controlador)) {
      $controlador = new $nombre_controlador();
    
// 4)verificacion del parametro action en la URL, y si la calse controlador existe
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        echo "la pagina que buscas no existe ";
    }
} else {
    echo "la pagina que buscas no existe ";

}


// DICCIOANRIO DE FUNCIONES UTILIZADAS PARA ESTA PRACTICA 
/*
h1 = Se enacarga de asignar un tamaño de letra para el titulo
requiere_once = Se encarga de imcluir ficheros externos una unica vez
if = Se utiliza como condicional, si se cumple se ejecutara alguna accion 
isset = Se encarga de validar si una variable due declara y si su vaor no es nulo 
$_GET = metodo get se engar de pasar la infomacio por la url
&& = Son operacionales que indican si cumple esta funcio y esta fncio  haga alfo Es uan AND
class_exists = Se utiliza para validar si una clase fue definida.
method_exists = Se utiliza para validar si un metodo esta definido en un clase o un objeto
else = Se utiliza com condicional cual el if no se cumple, ejecutando alguna accion 
echo = Se utiliza para imprir por pantalla 


NOTA: Este fragmento de codigo se encarga de validar la ruta de consulta por medio de la url
      realizando unas seris de validaciones.
      1) carga de los archivos a utilizar por medio del autoload
      2) Verificacion de  de que secarge el parametro controller en la url, de ser asi
         este se encarga de crear una instancia.
      3) Este fragmento de codigo se encarga de verificar si la clase  controladora existe
         de ser asi crea una nueva instancia.
      4) Se verifica si se ha establecido el parametro action en la URL de ser asi, si es 
         asi llama al metodo de la clase controladora, de lo contrario muestra el mensaje
         error.   

*/
