 <?php

 /*
 * Ejercicio #3: Hacer una interfaz de usuario(formulario) con dos inputs y 4 botones 
 * uno para sumar , restar , dividir y multiplicar.
 
 FUNCIONES UTILIZADAS:


*********************************************html******************************************

DOCTYPE = Se utuiliza para espesificar la versio de html que se usar
html lang= = es donde determinamos el lenguaje a utulizar en nuestro sitio web
head =  Es donde se determina todas las configuraciones que el usuario no ve para html
meta charset =  Es el metodo que se utilizara 
"UTF-8"> = Es utilizado como lenguaje universal, que nos permitira utilizar ñ o tildes
meta http-equiv="X-UA-Compatible" content="IE=edge">
meta name="viewport" content="width= , initial-scale=1.0">
title =  Aca se ajusta el titulo que se desea para nuestra pagina
body = Es el cuerpo principal de nuestro html , donde empezara todo
h1 =  SE utiliza para los titulos de tipo h1 lo mas grandes
form = Se utuilioza para inficar que se trabajara en un formulario
action = Define a ubicacion de la url, dende se enviaran los datos que el formulario a recojido
method = SE utuliza para validar de que forma entraran los datos GET p POST
"POST" = Se define que seran datos de tipo POST para el formualrio 
label = Representa una etiqueta para un elemento de una iterfaz
for = Se utuiliza para determinar el elemento de entrada al cual se debe asocial el titulo
br =  Se tliza para realizar saltos de linea 
input type =  Se utliza para indicar el tipo de dato que se podra ingresa
submit = Se utiliza para la creacion del boton que enviara los datos aproceso 
value = Se utiliza para validad los valores enviados


 ********************************************php*****************************************
if = Se utiliza como  condicinal
isset = Se utiuliza para determinar si una varaiable ya fue declarada 
_POST = Se utiliza para definir el motodo por el cual se reciven los datos
&& = Son operadores en este caso funcionancomo condicionales, se deben cumplir los dos 
      o de lo contrario el programa no funcionara
$ =  Se utiliza para declarar una variable
. =  lo utiliza mos para concatenar una operacion 
echo =  SE utiliza para visualizar por panatalla
endif =  Se utuliza para abreviar los {}.

 */ 
$resultado = false;

 if(isset($_POST['n1']) && isset($_POST['n2'])){
   

    if(isset($_POST['Sumar'])){
        $resultado = "El resultado es: ".($_POST['n1'] + $_POST['n2']);
    }

    if(isset($_POST['Restar'])){
        $resultado = "El resultado es: ".($_POST['n1'] - $_POST['n2']);
    }

    if(isset($_POST['Multiplicar'])){
        $resultado = "El resultado es: ".($_POST['n1'] * $_POST['n2']);
    }

    if(isset($_POST['Dividir'])){
        $resultado = "El resultado es: ".($_POST['n1'] / $_POST['n2']);
    }
 }

 ?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Calculadora</title>
 </head>
 <body>
    <h1>Calculadora en PHP</h1>
    <form action="" method="POST">

     <label for="n1">Numero 1</label> <br/>
     <input type="number" name="n1" /><br/><br/>

     <label for="n2">Numero 2</label><br/>
     <input type="number" name="n2" /><br/><br/>
"
     <input type="submit" value="Sumar" name="Sumar"/> 
     <input type="submit" value="Restar" name="Restar"/> 
     <input type="submit" value="Multiplicar" name="Multiplicar"/>
     <input type="submit" value="Dividir" name="Dividir"/>

    </form>

    <?php
      // Resultado
      if($resultado != false):
        echo "  <h2>$resultado</h2>";
      endif;
      
    ?>
  
 </body>
 </html>