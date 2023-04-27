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
        $sql = "INSERT INTO entradas VALUES(null, $usuario, $categoria, '$titulo', '$descripcion', CURDATE());";
     
    
        $guardar = mysqli_query($db, $sql);

        header("location: index.php");

    
    }else{
        $_SESSION["errores_entrada"] = $errores;
        header("location: crear-entradas.php");


    }

}




?>