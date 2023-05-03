<!-- 
DOCTYPE = No indic la version de ht,ml que se esta usando
html lang = Nos permite configurar el idioma de la pagina web
head = En esta parte van las confuguraciones que se utilizaran en el web 
meta http-equiv = Se utiliza para codificar informacion adicional en nuestro sitio web
"UTF-8" = Nos permite un lenguje universal el cual reconocera tildes y las ñ.
meta name = Se utiliza para aportar infotmacion sobre el documento. 
title = Se utiliza para poner el titulo que nuestra pagina web tendr en su pestaña
body = En esta parte va el cuerpo de nuestra pagina.
h1 = Se utiliza para definir los titulos de tipo h1 los mas grandes
form = Se utiliza para indicar que se utilizara un formulario.
action = Se utiliza para definir la url a donde iran los datos que captur el formulario.
method = Hace referencia al metodo de capturade los datos sea GET o POST
POST = El mentodo de captura de los datos ingresados, los cuales no se mostraran por url
input = Entrada de un tiepo de datos al formulario 
type = Espesifica el tipo de dato que va a recojer el input
file = Indica que se subieran al formulrio archivos
name = El nombre el archivo que se vaya subir 
submit = Se utiliza para crear el boton, que se encarga de enviar los datos al servidor.
value = Es el metodo de envio de los datos del formulario

********************************************php******************************************
$ = Se utiliza para definir variables
opendir = Se utiliza para abrir un directorio
if = se utilza como una condicion, si se cumeple has esto.
while = Se utuliza como un ciclo de instrucciones que se ejecutaran hasta q este evalue como true
readdir = Se utiliza para leer un directorio
! = Es un operador que se utiliza como negacion.
&& = Se utiliza para evaluar dos condiciones si una nose cunple el programa no valida nada 
echo =  Se utiliza para imprimir por pantalla
img src = Contiene la ruta de imagenes que quieres poner en la pagina web
width =  Permite estabelcer la altura de visualizacion de la imgen. 
br = Permiete hacer un salto de lines  
endif = Se utiliza para cerrar el if con : para simplificar las llaves
endwhile = Se utiliza para dimplificsr lsd llaves, se cierra con :

 -->



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivos en php</title>
</head>
<body>
    <h1>Subir archivos con php</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" />
        <input type="submit" value="Enviar"/>


    </form>

    <!-- Esatas son las linesas de codigo para presentar las imagenes
    desde la web, para este caso  -->
      <h1>Listado de imagenes</h1>    
    <?php
          $gestor = opendir('./images');

          if($gestor):
            while(($image = readdir($gestor)) !== false):
                if($image != '.' && $image != '..'):
                    echo "<img src='images/$image' width='200px'/><br/>";
                endif;
            endwhile;

        endif;
    ?>

</body>
</html>
0