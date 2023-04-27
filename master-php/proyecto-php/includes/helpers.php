<!--

function = Se utiliza para crear funciones espesificas las cuales pueden ser llamadas desde otras
            paginas si necesidad de escribir mas codigo o repitindo los mismo, solo envocamos
$ = Se utiliza para declarar una variable
if = Se utliza como condicional, si se cumple debe hacer algo en espesifico 
isset = Evalua si la variable fue declarada  
&& = Se utiliza para evaluar dos parametro si cumple los dos al programa seguira 
! = Se utiliza como oprador de negacion 
empty = Se utiliza para determinara si la variable esta basia.
div class = Se utiliza para indicar un bloque de contenido os ecion de la pagina 
return = Retorna hata la funcion inicial 
$_SESSION = Se utiliza como un array especial para guardar los request que utiliza un usuario
            al ingresar a un aplicativo o pagina web.
null = Repreenta una variable sin valor 
SELECT = Se utiliza para indicar que se utlizaran los datos de una tabla en nuestra base de datos
FROM = Se utiliza para espesificar sobre ue tabla se trabajara
ORDER BY = = Se utiliza para ordenar los resultados de una columa segun sea la consulta
ASC = Se utiliza para indicar que el orden a utulizar es de forma ascendente
mysqli_query = Se utiliza para realizar la consulta a la base de datos que se desea
array = Se utiliza para guardar varias varibles varibles en un solo valor 
mysqli_num_rows = Se utuliza para contasr el numero de lineas de un resultado


*********************************function mostrarErrores***********************************

*********************************function borrarErrores*************************************


*********************************function conseguirCategorias*******************************


*********************************function conseguirUltimasEntradas*************************

Esta funcion permiete realizar la consulta de las utimas 4 ebtradas registradas
en nuestra bases de datos, mostrando el resultado en la enytrada principal del index.
$=
SELECT = Se utiliza para espesificar los nombres de los campos que contienen los datos que
         que se desea usar en una consulta.
FROM = Espesifica las tablas o consultas que contienen los datos  que se usaran en la
       clausula SELECT 
INNER JOIN = Se utiliza para consultar dos o mas tablas en una base de datos
ORDER BY = Ordena los registros  resultantes de una consulta por un campo o campos espesificos
           en orden ascendente o desendente.
 DESC = pra ordenar de forma desendente
  LIMIT 4 = Se utiliza para limitar la cantidad de campos a mostrar para esta consulta 
mysqli_query = Esta funcion permiete realizar la consultas a la ase de datos  
array = Se utiliza  para asignar multiples elemntos en una variable. 
if =SE utiliza com condicional
mysqli_num_rows = Se encarga de devolver el numero de filas de un conjunto.
    

-->


<?php

function mostrarErrores($errores, $campo)
{
    $alerta = '';
    if (isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class= 'alerta alerta-error'>" . $errores[$campo] . "</div>";
    }

    return $alerta;
}

function borrarErrores()
{

    $borrado = false;

    if (isset($_SESSION['errores'])) {
        $_SESSION['errores'] = null;
        $borrado = true;
    }

    if (isset($_SESSION['errores_entrada'])) {
        $_SESSION['errores_entrada'] = null;
        $borrado = true;

    }

    if (isset($_SESSION['completado'])) {
        $_SESSION['completado'] = null;
        $borrado = true;
    }

    return $borrado;
}

function conseguirCategorias($conexion)
{
    $sql = "SELECT * FROM categorias ORDER BY id ASC;";
    $categorias = mysqli_query($conexion, $sql);

    $resultado = array();
    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $resultado = $categorias;

    }
    return $resultado;
}

function conseguirEntrada($conexion, $id ){

}
function conseguirCategoria($conexion, $id)
{
    $sql = "SELECT * FROM categorias 
    WHERE id = $id";
    $categorias = mysqli_query($conexion, $sql);

    $resultado = array();
    if ($categorias && mysqli_num_rows($categorias) >= 1) {
        $resultado = mysqli_fetch_assoc($categorias);

    }
    return $resultado;
}

function conseguirEntradas($conexion, $limit = null, $categoria = null)
{
    $sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e 
    INNER JOIN categorias c 
    ON e.categoria_id = c.id "; 
    

    if(!empty($categoria)){ 
        $sql .= " WHERE e.categoria_id = $categoria
        ORDER BY e.id DESC ";
         
     }

     



    if ($limit) {
        $sql = " LIMIT 4 ";
    }



    $entradas = mysqli_query($conexion, $sql);

    $resultado = array();
    if ($entradas && mysqli_num_rows($entradas) >= 1) {
        $resultado = $entradas;
    }
    return $entradas;
}


?>