<?php
class UsuarioController {
    public function mostrarTodos(){
        require_once 'models/usuario.php';
        $usuario = new Usuario();

        $todos_los_usuarios = $usuario->conseguirTodos('usuarios');
        
        require_once 'views/usuarios/mostrar-todos.php';
    }

    public function crear(){
       require_once 'views/usuarios/crear.php';


    }
}


// DICCIONARIO DE FUNCINES UTLIZADAS PARA ESTA PRACTICA

/*
class= Es la plantilla que se utiliza para crear los metodos y traibutos que se utilizaran 
public = indica que la functin se puede accerder desde cual quier parte del programa 
require_once = Se utiliza para incorporar fichero que ya tiene una logica de funcionalidad
               y se hace una unica vez.
new = Se utiliza para instanciar una clase y de esta forma volverla un objeto 
-> = Este es el oprador de objetos, se utiliza para acceder a las propiedades de y metodos 
     de un objeto.

NOTA: Se crea la clase controlador, se crean unas funciones publicas las cuales
    ejecutarna la logica del programa para este caso lo primero es incluir el requiere_once
    con el fichero de los modelo en especial el fichero usuario el cual tiene la clase creada 
    con los objetos y metodos listos para procesar, una vez incorporado el fichero se 
    procede a crear una instancia de la clase que necesitamos y llammos la funcion que hace la
    consulta en los modelo en sql para que nos traiga la informacion de la tabla que pasamos como
    parametro, esto lo  poneos en una nueva variable la cual va ser llamada desde la vsita 
    para que sea llamada desde la vista volvemos a poner el requere_omce con la ruta del fichero
    el cual se desea presentar al usuario final con la variable que se creo se recojera la
    informacion desde el fichero de vista
?>

