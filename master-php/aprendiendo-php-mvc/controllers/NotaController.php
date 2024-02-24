<?php
class NotaController
{
        public function listar()
    {
        // Modelo
        require_once 'models/nota.php';

        // Logica de la accion controlador
        $nota = new Nota();
        $notas = $nota->conseguirTodos('notas');

        require_once 'views/nota/listar.php';
    
    }
    public function crear()
    {
        require_once 'models/nota.php';

        $nota = new Nota(); 
        $nota->setUsuario_id(1);
        $nota->setTitulo("Noata desde PHP MVC");
        $nota->setDescripcion("Descripcion de m nota");
        $guardar = $nota->guardar();

        header("Location: index.php?controller=Nota&action=listar");
    }

    public function borra()
    {

    }
}

// DICCIONARIO DE FUNCINES UTLIZADAS PARA ESTA PRACTICA

/*
class= Es la plantilla que se utiliza para crear los metodos y traibutos que se utilizaran 
public = indica que la functin se puede accerder desde cual quier parte del programa 
require_once = Se utiliza para incorporar fichero que ya tiene una logica de funcionalidad
               y se hace una unica vez.
new = Se utiliza para instanciar una clase y de esta forma volverla un objeto 
-> = Este es el oprador de objetos, se utiliza para acceder a las propirdades de y metodos 
     de un objeto.
set = Se utiliza para establecer el valor de una propriedad
header = Se utiliza para redireccionar al usaurio a la ruta que se desea .

NOTA: Este fichero del programa es el controlador el que se encarga de procesar y generar la logica
       para realizar la solicitud al modelo la cual retorna la solictud y esta se filtra con el
       controlador es enviada a la vista para que el usuario final pueda visualizar
       
      Tenemos una clase la cual incluye por medio del requiere_once el fichero del modelo 
      que contiene los dato slos cuales se desean procesar, se instancia la clase para tratarla 
      como un objeto, y luego se ingresa a la funtion la cual contiene la logica de consulta 
      en el fichero del modelo y se pasa la tabla por parametro de donde se extrae la informacion
      por ultimo nuevamente se llama el fichero de la vista por medio de un requiere_once
      lo cual se encargara de llamar la vista para que el usuario final pueda ver la informacion       
*/










?>