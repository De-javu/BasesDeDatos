<?php

// En este fichero de nuestro programa vamos a realizar toda la logica para poder guardar 
// las entradas que los usuarios desea registrar. 
// iniciamos evaluando la la variable $_POST esta definida o si su valor es nulo
if (isset($_POST)) {

    //Conexion a la base de datos
    require_once 'includes/conexion.php';
  
// En esta parte del codigo evaluamos la la variable $_POST con el parametro titulo 
// primero validamos si la variable fue declara, si la condicon se cumple, por
// medio de un operador ternario se evalua mysqli_real_escape_string que no escapen los datos 
// antes de que ingresen a la base de datos, se pasa la $db, la variable , si se cumple se 
// pasa el registro al sql de lo contrario devovera false
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    $usuario = $_SESSION['usuario']['id'];

   
    // Validacion
    // en esta parte se utiliza un arreglo donde se almacenaran los errores que se identifiquen
    // y no permitan el ingreso de los datos a la base de datos
    $errores = array();

    
 

//  En este fragmento del codigo se utiliza el condicional if para evaluar si la variable 
//  creadas en la parte superior realizaron su evalucion y si estan  vacias 
//  si se cumpla la condicion se ejecutara la varible de errores con un comuicado
    if (empty($titulo)) {
        $errores['titulo'] = 'El titulo no es valido';
    }
   

    if (empty($descripcion)) {
        $errores['descripcion'] = 'La descripcion no es valida';
    }
   

    if (empty($categoria) && !is_numeric($categoria)) {
        $errores['categoria'] = 'La categoria  no es valida';
    }

    
    // Se crea un condicional contador para evaluar los errores de cer cero el progrma 
    // ejecuta una nueva consulta para evaluar el parametro $_GET si tiene el parametro editar 
    // si se cumple el parametro editar , se guardara en las variable $entrada_id 
    // luego se compara si la variable $usuario_id es = a la $_SESSION con los parametros [usraio] [id]
    // si secumplen estes condiciones se ejecutara el ingreso la base de datos actualizando. 
    // si no se cumple la condicon los datos ingresaran como una nueva insercion a la base de datos 
    // Se crea una consulta a la base de datos y se guarda en la variable $guardar.
    // se direciona por medio del header a la pagina index.php 
    if(count($errores) == 0){
        if(isset($_GET['editar'])){
            $entrada_id = $_GET['editar'];
            $usuario_id =$_SESSION['usuario']['id'];
            $sql = "UPDATE  entradas SET titulo='$titulo', descripcion='$descripcion', categoria_id=$categoria 
            WHERE id = $entrada_id AND usuario_id = $usuario_id ";
        }else{
            $sql = "INSERT INTO entradas VALUES(null, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
        }
             
    
        $guardar = mysqli_query($db, $sql);

        header("location: index.php");

// De no cumplir con el primer condiconal que es el contador 
// se ejecuta el array de especial $_SESSION $errores
// Se evaluara el si la variable  $_GET con el parametro editar fue declara o es nulo 
// // si es verdadero se ejecutar una rederrecion a la pagina por medio de header  editar-entrada.php
// si es falso se ejecutar redirecio por el metodo header crear-entrada .php    
    }else{
        $_SESSION["errores_entrada"] = $errores;
        if(isset($_GET['editar'])){
            header("location: editar-entrada.php?id=".$_GET['editar']);

        }else{
            header("location: crear-entradas.php");
        }
       


    }

}
?>

<!-- 
FUNCIONES UTILIZADAS

********************************Conexion a la base de datos******************************

if (isset($_POST)) = Se utiliza para validar que si estan llgando los datso enviados.
require_once = Se utiliza para incluir los ficheros una unica vez.

$ = Se utiliza para definir una variable
isset = Se utliza para validar que la variable esta declarada y no este nula
$_POST = Es el metodo de envio 
mysqli_real_escape_string = Escapa a los caracteres especiales para usarse en sql
false =  Se utiliza para indicar que un valos es falso
? =
int =  SE utiliza para definir un valos entero en una variable
$_SESSION = Se utiliza como un array especial que almacena las variables de session

*******************************************Validacion**********************************

array = Se utiliza como un elemento o varaible especial que permiete almacenar multiples 
        elementos en una sola variable.

if = Se utiliza como condicinal, si se cumple realiazra algo
empty = Se utiliza para valiadra si una variable esta basia
$ = Se utiliza para definir una variable 
&& = Es un operador logico que devilve true si las dos condiciones se cumplen 
! = Es un operador logico que se utiliza para 
is_numeric = Se utiliza para evaluar si el argumento se puede interpretar como un numero
count =
INSERT INTO entradas = Se utiliza para intertar los datos en la base de datos  
VALUES =  Los datos que se insertaran.
ysqli_query = Se utiliza para realizar la consulta a la base de datos.
else =  Se utiliza cuando el if no se cumple, entonces el else se ervaluara
header = Se utiliza para rtedirirgir automaticamente a otra pagiana o fichero
-->

<!-- ****************************************** CODIGO **************************************** -->

<?php
if (isset($_POST)) {
    //Conexion a la base de datos
    require_once 'includes/conexion.php';
  
    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    $usuario = $_SESSION['usuario']['id'];
   
    // Validacion
    $errores = array();
 


    if (empty($titulo)) {
        $errores['titulo'] = 'El titulo no es valido';
    }
   

    if (empty($descripcion)) {
        $errores['descripcion'] = 'La descripcion no es valida';
    }
   

    if (empty($categoria) && !is_numeric($categoria)) {
        $errores['categoria'] = 'La categoria  no es valida';
    }

    
    if(count($errores) == 0){
        if(isset($_GET['editar'])){
            $entrada_id = $_GET['editar'];
            $usuario_id =$_SESSION['usuario']['id'];
            $sql = "UPDATE  entradas SET titulo='$titulo', descripcion='$descripcion', categoria_id=$categoria 
            WHERE id = $entrada_id AND usuario_id = $usuario_id ";
        }else{
            $sql = "INSERT INTO entradas VALUES(null, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
        }
             
    
        $guardar = mysqli_query($db, $sql);

        header("location: index.php");

    
    }else{
        $_SESSION["errores_entrada"] = $errores;
        if(isset($_GET['editar'])){
            header("location: editar-entrada.php?id=".$_GET['editar']);

        }else{
            header("location: crear-entradas.php");
        }
       


    }

}
?>