<?php
require_once 'config/database.php';
class ModeloBase{

    public $db;

    public function __construct(){
        $this->db = database::conectar();
    }


    public function conseguirTodos($tabla){
        $query = $this->db->query("SELECT * FROM $tabla ORDER BY id DESC");
        return $query;
    }
}


// DICCIONARIO DE FUNCINES UTLIZADAS PARA ESTA PRACTICA

/*
class= Es la plantilla que se utiliza para crear los metodos y traibutos que se utilizaran 
public = indica que la functin se puede accerder desde cual quier parte del programa 
require_once = Se utiliza para incorporar fichero que ya tiene una logica de funcionalidad
               y se hace una unica vez.
___constructor = Se encarga de inicializar las proíedades de un objeto justo despues de su creacion 
$this-> = Se utiliza paraacceder a los metos actiales de una clase
::conectar = es el opradoir quue permiete acceder a un metodo estatico o contantes en una clase
query = Se encarga de realizar las cosnultas  la base de datos

SELECT = Selecciona todas las columnas de un tabla 
FROM = Espesifica la tabla de cual se selccionara los datos 
ORDER BY = Se utiliza para espesificar el orden en los datos que retorna
DECS = Se utiliza para indicar que los datos seran de desendentes, tambien pueden ser asendentes

NOTA: En este fichero le pasamos la ruta de la conecion a la base de datos por medio de
      un requiere_once, luego creamos la clase que se incluira en los demas fichero para
      la conexion , utilizamos una function __contructor para que automaticamnete se conecte con 
      la base de datos acda vez que se crea un objeto por si necesita datos de ella.
     
      tam,bien tenemos otra funcion la cual se encarga de realizar una consulta a la base
      de datis y retorna un resuiltado , que serea llamado desde otro fichero para procesar 
      y enmtregar el resultado a la vista




*/

?>