<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png"|| $tipo == "image/pdf" ){

  if(!is_dir('images')){
     mkdir('images', 0777);
  }

  move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
  header("Refresh: 5; URL=index.php");
  echo"<hi>La imagen se subio corectamente, por favor seleciona la proxim iamgen</h1>";

}else{
    // con esta funcion el archivo se refresca y envia a la url que sedesea
    header("Refresh: 5; URL=index.php");
    echo"<hi>Por favor sube una imagen con el formato correcto</h1>";
}



?>