<?php
/*
FUNCIONES UTILIZADAS;

if = Se utiliza como condicinal, encaso de cumplirce ejecutara unas intrucciones 
isset = se utiliza para determinar si una variable esta definida o su valor es nulo
_POST = Metodo de cactura de datos recojidos por url, pero no visibles
&& = Evalua los dos operadores si los dos se cumple ejecutra unas intrucciones especificas
echo = Nos permiete imprimir por pantalla
h1 = SE utiliza para poner un titulo de ti 1 en nuetro WEB
*/ 
if(isset($_POST['titulo']) && isset($_POST['descripcion'])) {
    echo "<h1>".$_POST['titulo']."</h1>";
    echo '<h1>'.$_POST['descripcion'].'</h1>';
}


?>