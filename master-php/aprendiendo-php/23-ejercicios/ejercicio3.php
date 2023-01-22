 <?php

 /*
 * Ejercicio #3: Hacer una interfaz de usuario(formulario) con dos inputs y 4 botones 
 * uno para sumar , restar , dividir y multiplicar.
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