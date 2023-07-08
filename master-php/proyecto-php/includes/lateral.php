
<?php
require_once 'includes/conexion.php'; ?>


<!-- BARRA LATERAL  -->
<aside id="sidebar">

<div id="buscador" class="bloque">


        <h3>Buscar</h3>

   
        <form action="buscar.php" method="POST">       
            <input type="text" name="busqueda"/>
            <input type="submit" value="Buscar" />
        </form>
    </div>


    <?php if (isset($_SESSION['usuario'])): ?>
        <div id="usuario-logueado" class="bloque">
            <h3>Bienvenido,
                <?=$_SESSION['usuario']['nombre'].'  '.$_SESSION['usuario']['apellidos']; ?>
            </h3>
        

            <!--botones-->
            <a href="crear-entradas.php" class="boton boton-verde">Crear entradas</a> <br/>
            <a href="crear-categorias.php" class="boton boton-plata">Crear categorias</a> <br/>
            <a href="mis-datos.php" class="boton boton-naranja">Mis datos</a>  <br/>
            <a href="cerrar.php" class="boton boton-rojo">Cerrar sesion</a> <br/>

       

        </div>
    <?php endif; ?>

     <?php if(!isset($_SESSION['usuario'])): ?>
    <div id="login" class="bloque">


        <h3>IDENTIFICACION</h3>

        <?php if (isset($_SESSION['error_login'])): ?>
        <div class="alerta alerta-error">
            <?=$_SESSION['error_login'];?>
          

        </div>
    <?php endif; ?>
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" />

            <label for="password">Contraseña</label>
            <input type="password" name="password" />

            <input type="submit" value="Entrar" />
        </form>
    </div>

    <div id="register" class="bloque">

        <?php if (isset($_SESSION['errores'])): ?>
        
        <?php endif; ?>
        <h3>REGISTRATE</h3>

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


        <form action="registro.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" />
            <?php echo isset($_SESSION['errores'])
                ? mostrarErrores($_SESSION['errores'], 'nombre') : '';
            ?>


            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" />
            <?php echo isset($_SESSION['errores'])
                ? mostrarErrores($_SESSION['errores'], 'apellidos') : '';
            ?>


            <label for="email">Email</label>
            <input type="email" name="email" />
            <?php echo isset($_SESSION['errores'])
                ? mostrarErrores($_SESSION['errores'], 'email') : '';
            ?>


            <label for="password">Contraseña</label>
            <input type="password" name="password" />
            <?php echo isset($_SESSION['errores'])
                ? mostrarErrores($_SESSION['errores'], 'password') : '';
            ?>


            <input type="submit" name="submit" value="Registrar" />


        </form>
        <?php borrarErrores(); ?>
       
    </div>
    <?php endif; ?>
</aside>


<!--
FUNCIONES UTILIZADAS:

aside = Se utiliza como contenedor levemente relevante para el documento.
class = Es un atributo global que  permiete a css y java scrip sellcionar para aplicar diseño
h3 = Se utiliza para poner titulos
clearfix = Es la forma en qu un elemento borra automaticamnete sus elementos secundarios. no necesitas 
           agrgar marcas adicionales.
form action = Define l aubicacion de la URL donde se enviaran los datos que el formulario
              ha recojido cuando se valiada.
method = Define el  metodp por el cual envia los datos datos(GET_ o POST)
label for = Permite brindar un orden visula al formulario esta asociado con un control 
            llamado for llamdo el control de etiqueta.
input type = Representa un campo de dato tipado que permiete a los usurauios editar su valor
             su valor sse representa por el atributo type, ya que es capas de provver muchos campos
submit = El boton que envia los datos del formulario al servidor
value = Se utliza el atributo  para definir el valor enviado por el formulario
require_once =  Se utiliza para incluir archivos externos en los scrip, si el codigo
                 ya fue incluido este no lo incluira de nuevo
clearfix = Esta funcion permiete borrar automaticamente sus elementos secundarios

*************************************codigo php********************************************

echo =  Se utiliza para imprimir por pantalla 
if = Se utiliza como condicional, evalua si se cumple ejecuta unas tareas determinadas
isset = SE utuliza para definir si una variavle fue declara o si su valor es null
$_SESSION = SE utuliza como array especial que recoje los datois requere de una
            pagina web o aplicacion 
endif = Se utiliza para simplificar los corchtes en una if, de esta forma hace el
        codigo mas limpio y corto 

require_once 
elseif

**************************************BARRA LATERAL*************************************

 if = Se utiliza como condicional 
 isset = Se utiliza para validar si la variable esta declarada o el valor es null
 $_SESSION = Se utuliza como array especial que recoje los datois requere de una
            pagina web o aplicacion 
div = Cuerpo principal de html
id= = Se utiliza para identificar un solo elemnto
class= Se utiliza  para agrupar mas de una elemento
h3 =  Se utiliza para poner titulos tipo 3
var_dump = Se utiliza para conocer informacion del tamaño y tipo de datos de la variable
endif= se utiliza para cerrar el if de forma corta 
a href= Se utiliza para poner los link a donde nos queremos direccionar
-->