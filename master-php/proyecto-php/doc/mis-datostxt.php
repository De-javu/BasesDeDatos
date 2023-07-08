<?php
// En este fichero vamos a realizar una pagina la cual muestra los datos que ya estan registrados en la base de datos 
// los cuales vamos actualizar desde este formulario se enviaran a otro fichero con la consultas de sql update

//Iniciamos llamando las requier que ya estan configiuradois y nos traen las vistas que se desean para el usuario
require_once 'includes/redireccion.php';
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
?>

<!-- CAJA PRINCIPAL -->

<div id="principal">

    <h1>Mis datos</h1>


    <!-- MOSTRAR ERRORES -->

    <!-- Se crea una validacion de la variable $_SESSION['completado'] el cual evalua si este esta declararo o su valor es nulo
    se cumplir con esta sentencia se mostrara en la caja la alrte de exito y se imprimira la variable evaluada  -->
    <?php if (isset($_SESSION['completado'])): ?>
        <div class="alerta alerta-exito">
            <?= $_SESSION['completado'] ?>
        </div>
    <!-- Se evalua de la misma forma que el if anterior mente pero este recoge si tenemos variables de error y las mustra segun sea el caso -->
    <?php elseif (isset($_SESSION['errores']['general'])): ?>
        <div class="alerta alerta-error">
            <?= $_SESSION['errores']['general'] ?>
        </div>
    <?php endif; ?>

<!-- En este fragmento de codigo se realiza el formulario 
iniciamos con la action la cual nos redireccionara a la pagina actualizar-usuario.php con el metodo POST
evaluamos los campos de captura 
para que nos aparezca cargadop los datos que ya tenemos registrados en el formulario utilizamos la funcion value y pasamos
los parametros de la variable $S_SESSION que ya se ecuntra registrada.
por ultimo se evaluan los posibles errores que pueden llegar por la $SESSION que esta logeado de ser asi lo envia a la function
mostrarErroes qye se encargara de mostrar la alerta corresponsiente al error 
Se utilizan estos mismos paso para nombre apellido e email -->
    <form action="actualizar-usuario.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?=$_SESSION['usuario']['nombre'];?>"/>
        <?php echo isset($_SESSION['errores'])
            ? mostrarErrores($_SESSION['errores'], 'nombre') : '';
        ?>


        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos"value="<?=$_SESSION['usuario']['apellidos'];?>"/>
        <?php echo isset($_SESSION['errores'])
            ? mostrarErrores($_SESSION['errores'], 'apellidos') : '';
        ?>

        <label for="email">Email</label>
        <input type="email" name="email" value="<?=$_SESSION['usuario']['email'];?>"/>
        <?php echo isset($_SESSION['errores'])
            ? mostrarErrores($_SESSION['errores'], 'email') : '';
        ?>

<!-- enviaos los datos por medio del boton actualizar  -->

        <input type="submit" name="submit" value="Actualizar" />


    </form>
    <?php borrarErrores(); ?>


</div> <!--fin principal-->




<?php require_once 'includes/pie.php' ?>

<!-- 
FUNCIONES UTILIZADAS: 
requiere = 

************************************CAJA PRINCIPAL***************************************

div =
id =
h1 =
************************************MOSTRAR ERRORES**************************************

if = Se utiliza como un condicional, si se cumple, se ejecuta de lo contrario evalua otra sentencia 
isset = Se utiliza para definir si una varaible fue asignada y su valor no es nulo 
$_SESSION = Es un array estepecial que se utiliza para guardar informacion del usraio mientras
            se realza navegacion en la web
div = Se utiliza como caja en html , el cual lleva dentro unas funciones de vista 
class = Se utiliza dentro de css para aplicar estilos
elseif = Se utliza si las exprecion if fue evaluada como false, aplicamos elseif el cual
         se ejecutara siempre ycuando este sea verdadero a la hora de su ejecucion
endif = Se utiliza para el cierre de la sencia elseif
form action = Se utiliza para poner la url a donde seran enviados los datos recopilados 
method = Es donde se define el metodo por el cual se pasara la informacion en tre ficheros
POST = Es el metodo qu se utiliza para el ebvio de informacion.
label for= Se utuliza para indicar el titulo que llevara el input antes de ser lleno
input type Se utilza para crear la casilla que recoje el dato y el tipo de datos
value = Es el metodo por el cual s envian los datos
echo = Se utiliza para imprimirt por pantalla
mostrarErrores = Fue creado este metodo por nostros para la muestra de errores
borrarErrores = fue creado por nostrso para borrar errores.

*****************************************************CODIGO COMPLETO **************************************************-->

<?php
require_once 'includes/redireccion.php';
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
?>
<!-- CAJA PRINCIPAL -->

<div id="principal">

    <h1>Mis datos</h1>

    <!-- MOSTRAR ERRORES -->

    <?php if (isset($_SESSION['completado'])): ?>
        <div class="alerta alerta-exito">
            <?= $_SESSION['completado'] ?>
        </div>
    <?php elseif (isset($_SESSION['errores']['general'])): ?>
        <div class="alerta alerta-error">
            <?= $_SESSION['errores']['general'] ?>
        </div>
    <?php endif; ?>

    <form action="actualizar-usuario.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?=$_SESSION['usuario']['nombre'];?>"/>
        <?php echo isset($_SESSION['errores'])
            ? mostrarErrores($_SESSION['errores'], 'nombre') : '';
        ?>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos"value="<?=$_SESSION['usuario']['apellidos'];?>"/>
        <?php echo isset($_SESSION['errores'])
            ? mostrarErrores($_SESSION['errores'], 'apellidos') : '';
        ?>

        <label for="email">Email</label>
        <input type="email" name="email" value="<?=$_SESSION['usuario']['email'];?>"/>
        <?php echo isset($_SESSION['errores'])
            ? mostrarErrores($_SESSION['errores'], 'email') : '';
        ?>

        <input type="submit" name="submit" value="Actualizar" />

    </form>
    <?php borrarErrores(); ?>

</div> <!--fin principal-->

<?php require_once 'includes/pie.php' ?>
