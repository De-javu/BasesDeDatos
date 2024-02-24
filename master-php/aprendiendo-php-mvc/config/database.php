<?php
class database{
    public static function conectar() {
        $conexion = new mysqli("localhost", "root", "", "notas_master");
        $conexion->query("SET NAME 'utf8'");

        return $conexion;
    }
}

// DICCIONARIO DE TERNIMOS UTILIZADOS PARA ESTA PRACTICA 
/*
class = Es la plantillas que se utiliza para la creacion de atributos y metodos 
atributos = alamcena el estado natural de un objeto e ej. coche es colo, marca , modelo
metodo = Define el comportamiento que tedra el objeto  ej, coche, acelera , frena. para
public = indica que se puede acceder desde caulquier parte del programa
static = Indica que el metodo que se utiliza es estatico por l que no es posible instancialo
function = Se utiliza para definiri metodos dentro de un clase pueden ser estaticos o instancia. 
new = Se utiliza para instaciar una clase y convertirla en un objeto 
mysqli = Se encarga de alojar los datos para la conexion a la base de datos
query = Es metod que se utiliza para que interactue con la base de datos , puede trarer informacion de la base
         crear, actualizar, eliminar, se gun sedese aplicar.
return = Se encarga de dovolver el resultado de la funcion.

NOTA: Este fichero del programa se encarga de realizar la conexion a la base de datos, se 
      crea una clase estatica la cual realiza la consulta con los datos de conexion luego se
      realiza la instancia de mysql en el objeto conexion que ejecuta una consulta con 
      los parametros utf8 y por ultimo realiza un return de lo que devulve la conexion.

*/









?>
