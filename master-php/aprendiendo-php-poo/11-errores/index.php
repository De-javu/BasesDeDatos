<?php
//Capturar excepciones, en el codigo susceptible a errores

try{
    if(isset($_GET['id'])){
        echo "<h1>El parametro es : {$_GET['id']}</h1>";

    }else{
        throw new Exception('Falta parametrs por la url');
    }
} catch(Exception $e){
    echo "Ha ahbido un error: " .$e->getMessage();
}

// DICCIONARIO DE FUNCIONES UTILIZADAS PARA ESTA PRACTICA 

/*
try =  Se utiliza para definir un bloque de codigo que puede egenerar erro indesperador,
       de ser asi el bloqye realiza tareas de lectura del archivo, si se presenta la execpcion
       se dirige al bloqye catch que espesifica el codigo y tipo de error 
if = Es uncondicional que si se cumple ejecutara un el codigo que se desee
isset = Se encarga de evaluar su una variable fue definida o si su valor es nulo
$_GET = Es un metodo que permite pasar parametros a la variable por medio de la URL
echo = Se utiliza para imprimir por pantalla 
else = Es un condicinal el cual se evalua si el if no se cumple y eejecura una accion 
throw = Es un palabara clave que se utiliza para capturar excepciones, se apoaya en el metod try 
new = Se utiuliza para crear una isntancia de una clase y volverla un objeto
Exception = Se utiliza para manejar erores
catch = Es la palabra clave que se utiliza para recibier los try, se pueden poner varios catch
        que pueden tener tantas esecciones como se desee. 
getMessage = Es un metodo de Excepcion , que devulve la descripcion del error o el que causo
             el error.

*/
?>