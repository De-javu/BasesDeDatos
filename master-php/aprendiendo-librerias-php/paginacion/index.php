<?php

require_once '../vendor/autoload.php';

// 1) conexion db
$conexion = new mysqli("localhost","root","","notas_master");
$conexion->query("SET NAME 'utf8'");

// 2) Consultar para contar elementos totales a paginar
$consulta= $conexion->query("SELECT * FROM notas");
$numero_elementos = $consulta->num_rows;
$numero_elementos_pagina = 2;

// 3) hacer la paginacion
$pagination = new Zebra_Pagination();

// 4) Numero total de elementos a paginar
$pagination->records($numero_elementos);

// 5)Numero de elementos por pagina
$pagination->records_per_page($numero_elementos_pagina);

// 6)Muestra pagina actual
$page = $pagination->get_page();
 
// 7) Se configura el inico d el paginacion y se crea la condulta a la base de datos
$empieza_aqui = (($page - 1)* $numero_elementos_pagina);
$sql = "SELECT * FROM notas LIMIT $empieza_aqui, $numero_elementos_pagina";
$notas = $conexion->query($sql);

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';

// 8) Se crea un cilclo el cual recorrera y sacara los datos que se solicita 
while ($nota = $notas->fetch_object()) {
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h1>{$nota->descripcion}</h1>";
}

$pagination->render();


// DICCIONARIO DE FUNCIONES UTILIZADAS PARA ESTA PRACTICA 
/*
requiere_onces = Se utiliza para indicar que se incluiran ficheros una unica vez 
new = Se utiliza para instancial una calse y volverla un objeto
-> = Es un operardor que permite acceder a la propieda de un objeto
query = Se encarga de realizar la consulta a la base de datos
SELECT * FROM = Es la consulta puntual a la base de datos indicando que se consulta
records = Se encarga de contar 
records_per_page = Se utiliza para paginacion de resultados, define la variable de resultados
get_page = Es una funccion que se encarga de cargar la paginacion  
echo = Se encarga de imprimir por pantalla
while = Es un ciclo que se ejecutara siempre y cuando la condicion sea verdadera
fetch_object = Se utiliza para obtener  el cinjunto de resultados de la consulta solicitada 
h1 = Es un titulo tipo grande dentreo de los titulos.

NOTA: En este fichero nos encargamos de realizara la ligica para crear la paginacion:
      1) Creamos la conexion a la base de datso
      2) Realizamos una consulta para contar el total de elementos a paginar
      3) LLamamos la funcion para la paginacion por medio de un aistancia convertimos en
         un objeto la libreria que se descargo y trae ya todos los parametris de paginacion
      4) Por medio de la function records se logra determinar pasando  la lavraible que 
         contine el nuero de elementos para conocer como sera la paginacion.
      5) Se configura para que la cantidad de elementos por pagina que se desea.
      6) Nos indica por medio de la funcion get_page, la pgina en la que estamos
         latulemete desde la URL
      7) Se crea una varible conn la logica de inico la cual se encarga de restar el valor 
         y nos muestra en la pantalla los valores como los interepetan los humanos ya que la
         maquina siempre arranca desde cero, se arealiza la consulta con esta limitantes la cual 
         se encarga de mostrar los datos que contiene la tabala segun lo fijamos en las configuraciones
         anteriores
      8) Se crea un cilclo el cual recorrera y sacara los datos que se solicita con la funcion 
         fecth_object y mostrara los valores concultados a la tabla listos para mostrar por pantalla


*/


?>

