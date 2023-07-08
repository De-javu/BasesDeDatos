<!-- En esta pagina nos vamos a encargara de editar las entradas que se ingresaron anteriormnete como primera medida
vamos hacer llamdo de los requiere_onces que ya contiene configurada la pagina como los son redireecion , conexion, helpers -->

<?php require_once 'includes/redireccion.php';?>
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<!--********************************************************************************************************************-->

<?php
//******************************************************************************************************************* */
//vamos a poner el la variable $id la captura que se realizara por medio del metodo GET en la url para el id
$id =$_GET['id'];
//******************************************************************************************************************* */


//***********************************************************************************************************************/
// realizamos un funcion la cual realizara una consulta a la base de datos se llama conseguir entrada
$entrada_actual = conseguirEntrada($db, $id);
// creamos un if como condicion que evalua si la variables fue declara o su valor s nulo, si no esta definida el codigo se
//ejecutara
if(!isset($entrada_actual['id'])){
    header("location: index.php");
}
?>
<!-- Luego volvemos a llamar las paginas que ya estan diseñadas y con la informacion cargada "cabecera, lateral"-->
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php'; ?>


<!-- CAJA PRINCIPAL -->
<!--En esta parte del codigo realizamos el ingreso a la pagina principal para ledir los parametros de entrada y el
formulario de cargue asi podemos editar los campos que se deseen -->

<div id="principal">
    <h1>Editar Entradas</h1>
    <p>
        Edita tu entrada <?=$entrada_actual['titulo']?>

    </p>
    <br />
    <!-- El formulario con el link de redireccion, se captura el  la variable y el id que se enviaran por el methodo post
    se solicita el titulo 
    se ingresa el dato tipo texto que solicita el campo de entrada y el titulo por medio de la varaible $entrada_actua
    Despues ponemos en un codigo php donde se evalua si la seecion fue asignada o esta definida de lo contrario traera la funcion errores-->
    <form action="guardar-entrada.php?editar=<?=$entrada_actual['id']?>" method="POST">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" value="<?=$entrada_actual['titulo']?>"/>
        <?php echo isset($_SESSION['errores_entrada'])
                ? mostrarErrores($_SESSION['errores_entrada'], 'titulo') : '';
            ?>

    <!-- En esta parte del codigo se solicita ingresar la descripcion, la entrada se realizara por un textarea
         Se utiliza un fragmento de codigo php que evaluara si la variable $_SESSION fue declara o es nula, de lo contrario
        el codigo nos trae la funcion mostrar errores. -->
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" ><?=$entrada_actual['descripcion']?></textarea>
        <?php echo isset($_SESSION['errores_entrada'])
                ? mostrarErrores($_SESSION['errores_entrada'], 'descripcion') : '';
            ?>

     <!-- En esta parte del codigo se solicita ingresar a categoria, la entrada se realizar por seleccion
         Se utiliza un fragmento de codigo php que evaluara si la variable $_SESSION fue declara o es nula, de lo contrario
        el codigo nos trae la funcion mostrar errores. -->

        <label for="categoria">Categoria</label>
        <select name="categoria">
        <?php echo isset($_SESSION['errores_entrada'])
                ? mostrarErrores($_SESSION['errores_entrada'], 'categoria') : '';
            ?>
<!-- En este fragmento del codigo  se utiliza php para crear una funcion conseguir entrada y se pasa la base de datos
se crea un condicional if para que evalue si la variable $categoria fue declkara o su vaor es nulo de ser asi se ejecutara
el ciclo while mientras &categoria se igaul al arreeglo asociativi que se pasara por --mysqli_fetch_assoc 
luego se crea la funcion optin por html y e pasa cpor cogigo php la insercion del parametro con el nombre que se desea y la catgoria con si id
para que se selec ciones como opcion multiple en la pagina  -->
            <?php
            $categorias = conseguirCategorias($db);
            if (!empty($categorias)):
                while ($categoria = mysqli_fetch_assoc($categorias)):

                    ?>
                    <option value="<?=$categoria['id']?>" <?=($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected="selected"' : '' ?>>    
                    <?=$categoria['nombre']?>

                    </option>

                    <?php
                endwhile;
            endif;
            ?>


        </select>




<!-- //funcion para guardar  -->
        <input type="submit"  value="Guardar" />


    </form>
    
    <!-- funsion para borrarErrores -->
    <?php borrarErrores(); ?>

</div>

<!-- se tra la pagina del pie final  -->
<?php require_once 'includes/pie.php' ?>


<!-- **************************************************FUNSIONES UTILIZADAS************************************************************ -->

<!-- 
require_once = Se utiliza para indicar que se incorporan los fichero a esta pagina solo una vez
$_GET['id'] = = Se utiliza para indicar que se captura id con el metodo get de url
$entrada_actual = conseguirEntrada($db, $id) = Se utuliza para indicar que se llamara la funcion que esta declarada en 
                  la carpeta helpers y es la encragada de la base de datos y hacer la consulta 
if= Se utiliza para indicar que se evaluara un cosndicional si se cumple se ejecutara la logica que esta en el codigo
! =  Se utiliza como signo de negacion
isset = Se utiliza para validar si el variable fue declara o si su valor es nulo
header = Se encarga de redireccionar a la pagina que se desea 
div = Se utiliza para poner un elemento dentro del html
id =Se utiliza para indicar que se aplicara estilos a un elemnto en espesifico con el simbolo #
h1 = Se utiliza para los titulos 
p = Se utiliza para crear parrafos de texto
br = Se utiliza para crear saltos de lineas
form action= Se utiliza para indicar a donde ira los datos que se capturen por medio del formulario
method="POST" = Se utiliza para indicar que metodo se utilizara para enviar los datos al formulario 
label for= Se utiliza para solicitar el los datos con los que sera llenado el formulario
input type= se utiliza para poner los datos del formulario
echo = Se utiliza para imptimir por pantalla 
$_SESSION = Se utiliza como un arra especial que contiene el inicio de session 
textarea = Se utiliza para poner gra cantidad de texto en el formulario 
select = Se utiliza para seleccionar un aopcion dentro de una lista desplegable
empty =  Se utuiliza para determnar si una vsariable esta basia 
while = Se utiliza como ciclo while el cual se ejecuatara mientras se cumpla la condicion 
mysqli_fetch_assoc = Se utiliza como un array asociativo que permiete rfealizar la consulta a la ba se de datos y devolver
                     los valores en una fila, ya dependera que valores se desean imprimir.
option value= Se encarga de seleccionar la opcioj dodne se encargarade envair el valor bajoel efecto value
selected="selected = Se utiliza para indicar que una opcion debe estar ´preseleccionada cuando se cargue la pagina 
endwhile = Se utiliza para cerrar el ciclo whilw
endifsubmit = Se utiliza para cerrar el cilco if
value =  si es para el boton indica que se realizara el envio por este medio
 -->