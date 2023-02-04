<?php

/*
FUNCIONES UTILIZADAS:
$ =  Se Utiliza para definir variables
mysqli_connect = Se utiliza para realizara abrir conexion de Mysql que se ejecuta en un equpo
                 locala o en u equpo afintrion o u adirrecion ip
localhost = Hace referencia la dispoditivo o computdor que estamos usando en su monemto
root = De termina un arota dasluta con todos los permisos 
phpmysql = Es el nombre de la base de datos que estamos utilizandopara este ejercicio
if =  un condicional 
mysqli_connect_errno = Regresa el ultimo codigo de erro generado por mysqli_connetc
echo = nos permiete imprimir por pantalla
mysqli_query = Por medio de esta funcion se realiza una conslta a la base de datos
SET NAMES 'UTF8 = Permiete que la base de datos interprete el idioma correctamnete y 
                  detecte los tildes y ñ ques e generen en algun momento 
SELECT * FROM notas = se utiliza oara realizaer consultas a la tabla de notas
while =  un ciclo condicional 
mysqli_fetch_assoc = Retorna un array asociativo correspondiente a la fila optenida 
                     o null si no se tienen mas filas a evaluar.
var_dump =  nos permiete ver lo que carga php tamaños , objetos, variables, tipos de dato

*/


// conectar a la base de datos
$conexion = mysqli_connect("localhost", "root","", "phpmysql");

// Comprobar si la conexion se realizo

if(mysqli_connect_errno()){
    echo "La conexio  a la base de datos a fallado:" .mysqli__connect_errno();
}else{
    echo "Conexion realizada exitosa mente!!";
}

// Consulta para codificar la configuracion de caracteres
mysqli_query($conexion, "SET NAMES 'UTF8' ");

//Consultas Select desde PHP

 $query = mysqli_query($conexion, "SELECT * FROM notas");

 
 while($nota = mysqli_fetch_assoc($query)){
      // var_dump($nota);
      echo "<h2>".$nota['titulo'].'<h2/>';
      echo $nota['descripcion'].'<br/>';
 }

 //insertar en la base de datos desde PHP
  $sql = "INSERT INTO notas values(null, 'Notas desde php','Esto es una nota de php','green')";
  $insert = mysqli_query($conexion, $sql);

  echo "<hr/>";
  if($insert){
    echo "DATOS INSERTADOS CORRECTAMENTE";
  }else{
    echo "Error: ". mysqli_error($conexion);
  }






?>