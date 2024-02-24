<?php
require_once 'clases.php';

$persona = new Persona();
var_dump($persona);

$informatico = new Informatico();
$informatico->setAltura(1.90);

var_dump($informatico);

$tecnico = new TecnicoRedes();
var_dump($tecnico);


//******************* DICCIONARIO DE FUNCIONES UTILIZADAS ************* 
/*
    requiere_once = Se utiliza para incluir un fichero una inica vez en el fichero actual
    new = Se utiliza para crear una instancia de una clase (que es lo mismo que crear 
           un objeto a partir de un a clase) 
    set = Se utiliza el metodo magico para asiaganra valores a una variable en una  clase
          o fuera de ella. 
    var_dump()= Se utiliza para ver la informacio  que lleva una variable o las
                estrucuturas de informacion 

*/


?>