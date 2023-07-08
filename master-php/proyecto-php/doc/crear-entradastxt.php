<?php
// En esta fichero tendremos la logica para crear las entrdas principales a nuestra pagina
// para ellos primer se llama a lo require_onces ¿, que ta contiene parte del codigo 
// Nos permiete traer lo recursos que ya se han programado 
require_once 'includes/redireccion.php';
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
?>
<!-- CAJA PRINCIPAL -->
<!-- utilizamos un parte del codigo en  html donde utilizaremos para indicar el titulo de entrada -->
<div id="principal">
    <h1>Crear Entradas</h1>
    <p>
        Añade nuevas entradas al blog para que los usuraios peudan usarlas
        y disfrutar de su contenido.

    </p>
    <br />
    <!-- En este parte de codigo nos encargamos de realizara el ingreso de datos por medio 
    del formulario capturamso el titulo por medio de metodo post, realñizamos un condicional
    que muestra los errores al cargar la session si los ahi  -->
    <form action="guardar-entrada.php" method="POST">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" />
        <?php echo isset($_SESSION['errores_entrada'])
                ? mostrarErrores($_SESSION['errores_entrada'], 'titulo') : '';
            ?>
<!-- En esta parte utilizamos un formulario e ingresamos una descripcion por medio de un
textarea que permite poner aotaciones -->
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" ></textarea>
        <?php echo isset($_SESSION['errores_entrada'])
                ? mostrarErrores($_SESSION['errores_entrada'], 'descripcion') : '';
            ?>

<!-- 
    Utilizamos un formulario para seleccinar la categoria a la cual pertenece la 
entrada que vamos a crear -->
        <label for="categoria">Categoria</label>
        <select name="categoria">
        <?php echo isset($_SESSION['errores_entrada'])
                ? mostrarErrores($_SESSION['errores_entrada'], 'categoria') : '';
            ?>
<!-- En este frgamento de codigo encontramos un condicinal el cual se encarga de determinar 
si la variable de la consulta aa la base de datos $catgorias no esta vacia
de cumplirce la condicion iniciamos un cilco while para que nos enliste las categorias
nos traiga su valor porel arra asociativo [id], [nombre], lo ponemos en un option por html --
el cual nos permiete realizar una selecion interesante  -->
            <?php
            $categorias = conseguirCategorias($db);
            if (!empty($categorias)):
                while ($categoria = mysqli_fetch_assoc($categorias)):

                    ?>
                    <option value="<?=$categoria['id']?>">
                        <?=$categoria['nombre']?>

                    </option>

                    <?php
                endwhile;
            endif;
            ?>


        </select>




<!-- Boton de envio del formulario para el ingreso de entradas -->
        <input type="submit"  value="Guardar" />


    </form>

    <!-- Envia a la funcion borrra eroores o limpiar la cual ya debe estar en otro fichero -->
    <?php borrarErrores(); ?>

</div>
<?php require_once 'includes/pie.php'; ?>

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
class = Se utiliza como un indicador general para todas las clases ya definidas
valeu = Elñ metodo de envio d ela informacion.
$ = Se utiliza para definir una variable
if = Se utiliza como condicional
! = Operador de negacion
empty = Se utiliza para definir si una variable esta vacia 
while = Se utiliza como un ciclo repetitivo hasta q se cumpla una condicion 
mysqli_fetch_assoc = Se utiliza para optener una fila de array asociativos que representa
                     a la fila obtenida en el conjunto de resultados.
option = SE usa para representar un item dentrode un select 
endwhile = Se utiliza para dra cierre corto al while sin necesidad de corchetes
endif = Se utiliza para dar cierre corto a los if, sin necesidad de los corchetes.

-->