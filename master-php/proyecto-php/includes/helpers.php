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


-->


<?php

function mostrarErrores($errores, $campo){
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)){
        $alerta = "<div class= 'alerta alerta-error'>".$errores[$campo]."</div>";
    }
        
    return $alerta;
}

function borrarErrores(){

    $borrado = false;
    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        $borrado = ($_SESSION['errores']);
    }
    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        ($_SESSION['completado']);
    }

    return $borrado;
} 
?>