<?php

/*
FUNCIONES UTILIZADAS:

if = Se utiliza como condicional, si secumple ejecuta unas funciones espesificas
$ =  Se utiliza para definir variables
unset = Nos permite eleminar variables 
setcookie = Esta ufncion la utilizamos para definir una cookie y posterior mente eliminarla
time = Parametro para definir timpo, la hora actual
header = Es utilizado para enviar encabezados htpp sin formatos

*/


if($_COOKIE ['micookies']){
    unset($_COOKIE['micookie']);
    setcookie('micookie', '',time()-100);
}

header('Location:ver_cookies.php');




?>