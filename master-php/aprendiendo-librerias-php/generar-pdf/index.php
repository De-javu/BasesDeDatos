<?php

require '../vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

// Recoger la vista a imprimir

ob_start();
require_once 'pdf_generar.php';
$html = ob_get_clean();

$html2pdf->writeHTML($html);
$html2pdf->Output('pdf_generado.pdf');

// DICCIONARIO DE FUNCIONES UTULIZADAS PARA ESTA PRACTICA
/*
requiere = Se utiliza para incluir un fichero 
use Spipu\Html2Pdf\Html2Pdf = Se utiliza para importar la clase  Html2Pdf utilizando 
    el nombre corto y no todo el nombre, se ancarga de crear un pdf 
new = Se utilñiza para crea una isntancia de la calse y convertirla en un objeto
ob_start() = Se utiliza para controlar la salida por que abreel buffer antes  de salir
requiere_onces = Se encarga de incluir el ficheri una unica vez 
ob_get_clean() = Se utiliza para obtener el el contenido el buffer de salida y luego
                 lo limpia, de tal forma se imprimira el contenido de la variable 
writeHTML = Se encarga de escribir el codigo html cuando se utiliza la libreria de pdf
Output = para esta funcion hacer parte de la libreria que se encargara de enviralo
         disponible para que el usuraio final lo pueda ver desde el navegador.

NOTA: Este fichero se encarga de llamar la clase de la libreria HTML2pdf instalada para
      generar pdf, se crea un obketo de la calse se pone dentro de dos funciones el reqiuere 
      del fichero que contiene todo el formulario a mostrar para  que sea cargado al buffer y
      luego sea cerrado mostrando la varible que se escribio con la informacio u por utilo
      brindado la salida al vabegador.


*/

?>

