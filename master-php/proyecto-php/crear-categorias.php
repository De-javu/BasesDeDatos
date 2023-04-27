<!-- 
FUNCIONES UTULIZADAS:

requiere_onces = Se encarga de incluir el fichero que necesitamos solo una vez, pero si ya
                 esta incluido este no se volvera a incluiur.
div = Se utiliza para crear sessiones agrupadas y contenidos 
id = Se utiliza para definir un  identificador unico, elñ cual no debe repetirce
    el cual se utilizara para aplicar estilos en el css 
h1 = Se utiliza la definir titutlo de tio 1
p = Se utiliza para poner texcto en forma de parrafo dentro d el pagina web
br = Se utiliza para dra un salto de linea y separar algo 
form = Son utilizados para el inicio en la creacion de los formularios.
action = Se utiliza para definir la ruta a la cual se enviaran los datos recopilados
method = Es el metodo por cual se tratatran los datos recopilados para su envio 
label = Es la etiquera q se usara en la la casilla para rellenar 
input = Es el campo de llenado acorde a la etiqueta
type = Es el metodo del campo que se captura 
class = Se utiliza como un indicador general para todas las clses ya definidas
valeu = Elñ metodo de envio d ela informacion.
-->


<?php
require_once 'includes/redireccion.php';
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
?>
<!-- CAJA PRINCIPAL -->

<div id="principal">
    <h1>Cear categorias</h1>
    <p>
        Añade nuevas categorias al blog para que los usuraios peudan usarlas
        al crear entradas.
    </p>
    <br/>
<form action="guardar-categoria.php" method="POST">
    <label for="nombre">Nombre de la categoria: </label>
    <input type="text" name= "nombre"/>

    <input type ="submit" class='boton' value="Guardar"/>


</form>

</div>
<?php require_once 'includes/pie.php';?>