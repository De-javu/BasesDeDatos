<h1>Listado de usuarios</h1>
<?php while($usuario = $todos_los_usuarios->fetch_object()):?>
    <?=$usuario->email?> - <?=$usuario->fecha?> <br/>
    <?php endwhile; ?>
    
<!-- DICCIONARIO DE FUNCIONES UTILIZADAS EN LA PRACTICA 
h1 = Se utiliza para poner titulos de gran tamaño 
while = Es un ciclo de control el cual se ejecutara siempre y cuando la condicion se verdadera 
fetch_object = Se encarga de realizar la consulta en la base de datos y trae los objetos
                que se ecnuentren en la tabla de la cunsula listandolos en atributos 
endwhilw = Se encarga de cerrar el cliclo.

NOTA: Este fichero s encarga de realizar una consulta a la base de datos en la tabla todos_los_usuarios
      el cual listara por medio del ciclo while y  fetch_objet los objetos que contenga la tabla
    y listara uno a uno los atribututos que contiene la tabla en este caso emial y fecha 








-->