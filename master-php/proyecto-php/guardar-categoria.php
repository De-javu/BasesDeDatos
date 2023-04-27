<!-- 
FUNCIONES UTILIZADAS:


if =  Se utiliza como condicional, si se cumple ejecutara una accion.
isset = Se encarga de de validar si la variable ya fue declarada o es de un valor nulo
$_POST = es el metodo por el cuial se pasa la informacion del fomulario 
requiere_once = Se encarga de cargar el fichero solo una vez
mysqli_real_escape_string = Se utiliza para que los valores especiales, no tenga opcion
                            de ingresar a la base de datos y consultar erradamente 
false = Se utiliza para indicar unnvalor false
array = Se utiliza para almacena en una variable mucho valores sin necesidad 
        de crear mas variables.
! = operador logico de negacion 
empty = Se utiliza para determinar si una variable esta basia 
$ = Se utilizapara declarar una variable
&& =  Operardor logico que evalua entre dos opciones y si se cumple una permiete
      que se ejecute el programa. 
is_numeric = Evalua si el argumento se puede interpretar como numero
preg_match = Se encarga de buscar cadenas mediantes expreciones regulares.
true = Se utuliza para indicar que un valor es verdadero
else = Se utiliza cuando el if no cumple la condicon, en ese momento se entra a evaluar 
        el else.
count = Se utiliza para conatar el numero de elementos que tenemos dentro del array 
INSERT INTO = Se encarga de agragar datos a la bases de datos.
VALUES =  Hacer referencia a los campos que se agrgaran al formuario 
NULL = Es el valor de auto incremento  que se utilizara para el id en la base de datos 
mysqli_query = Se utiliza para indicar que se realizara una  consulta a la base de datos
header =  Se utiliza para redireccionara al fichero q se desee dentro de nuestra app.

-->




<?php
if(isset($_POST)){
    //Conexion a la base de datos
    require_once 'includes/conexion.php';

    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
     
    
    //ARRAY DE ERRORES
    $errores = array();

    // Validar los datos antes de guardarlos en la base de datos. 
    // Validar campo nombre. 

    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_valido =  true;
    }else{
        $nombre_valido = false;
        $errores['nombre'] = "El nombre no es valido";
    }

    if(count($errores) == 0){
        $sql = " INSERT INTO categorias VALUES(NULL, '$nombre')";
        $guardar = mysqli_query($db, $sql);

    }
   
 
}
   header("location: index.php")





?>