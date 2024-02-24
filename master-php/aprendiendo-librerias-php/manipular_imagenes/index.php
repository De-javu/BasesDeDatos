<?php
require_once '../vendor/autoload.php';

$foto_original = 'mifoto.png';
$guardar_en = 'fotomodificada.png';

$thumb = new PHPThumb\GD($foto_original);

//Redimensionar
$thumb->resize(500, 500);

//Recortar
$thumb->crop(250, 250, 120, 120);
$thumb->show();
$thumb->save($guardar_en);


// DICCIONARIO DE FUNCIONES UTILIZADAS EN LA PRACTICA 

/*
requiere_once = Se utuliza para incluir un fichero una unica vez 
thumb = Se utiliza para ayudar a modificar imagenes
-> = Es operador el cual permiete ver los parametros de objeto
new = Se utiliza para instanciar las clases de esta forma volverlas objetos 
resize = Esta funcion se utiliza para cambiar o redimecionar los valores de una imagen original
crop = Esta funcion se utiliza para realizar recortes de diferentes medidadas a una imagen
show = Se encarga de enviar la imagen alnavegador 
save = Es unmetood de la libreria para guardar.

NOTA: Se realiza la practica en la cual se llama un clase expecial para modificacio de imagnes
      tanto dimeciones como nombre de archivo
*/