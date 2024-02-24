<?php
require_once 'modeloBase.php';
class Nota extends ModeloBase
{
    public $usuario_id;
    public $titulo;
    public $descripcion;


    public function __construct() {
        parent::__construct();
    }



    function getusuario_id()
    {
        return $this->usuario_id;
    }
    function getTitulo  ()
    {
        return $this->titulo;
    }
    function getDescripcion ()
    {
        return $this->descripcion;
    }
    function setUsuario_id($usuario_id)
    {
        $this->usuario_id = $usuario_id;
    }
    function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function guardar(){

        $sql = "INSERT INTO notas(usuario_id, titulo, descripcion, fecha)
                VALUES ({$this->usuario_id}, '{$this->titulo}', 
                '{$this->descripcion}', CURDATE());";
                   

               $guardado = $this->db->query($sql);
               
               return $guardado;
       }
    }
// DICCIONARIO DE FUNCINES UTLIZADAS PARA ESTA PRACTICA
/*
 Require_once =Se utiliza para incorporar ficheros externos una unica vez
 class = Se utilza como plantilla para crear  metodos y atributos que se utilizaran 
 extens = Indica que se heredara desde una clase padre 
 public = indica que la funcion se podra accerder desde cualquier parte del programa 
 __cosntruct = Es un metod magico qe se encarga de inicialiozar la clase una vez creada 
 parent::__construct = Se utiliza para llamara las propiedades del costructor de una
                       clase padre, que se van a utilizar junto al costructor de la clase
                       hija, grantizando que la propirdades padre tambie se iniciaran.
getter = Se utiliza para optener el  valor de una propiedad
setter = Se utliza para establecer el valor de una propiedad
return = Se encarga de devilver al resultado de una function 
$this-> = Se utiliza para aceder apropiedades y metos del objeto actual
INSERT INTO = Se utiliza para indicar que se insertaraan nuevos registros en una base de datso
VALUES = Se utiliza para espesioficar los valores que vana asociados a los campos en el la 
          tabla que se va a insertar.
CURDATE = Se utiliza para solicitar la fecha 
query = Se utiliza para interactuar con la base datos 

NOTA: En este fichero nos encargamos de crear una clase la cual hereda los parametrois de
      la la clase modelobase,php que tiene la conexio a la base de datos aca los que hacemos 
      es crear uncostrcutor el cual cargara los objetos de la clase padre para crearlos
      creamos los metos y objetos en esta platilla y al final ponemos una funtion que nos
      permita gardar la informacion recopilada por este fichero la cual como siempre pasar 
      por el metodo control  y sera enviado al metod vsita para la cidualizacion de usraio  final  



*/
    




?>