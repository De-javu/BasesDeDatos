<?php
// En esta parte del codigo lo primero que vamos hacer es llamar la conexion por parte del 
// requiere_once y se trabajara en el costado izquierdo de nuestro programa donde tendremos
// el registro de usuarios el ingreso al login 
require_once 'includes/conexion.php'; ?>

<!-- ****************************************************************************************** -->
<!-- BARRA LATERAL  -->
<!-- Utilizamos la etiquet asede para crear nuestro espacio de formulario al costado de la pagina
oficial que estamos tegiendo alineado a ello ponemos el valor de id para los estilos css. -->
<aside id="sidebar">

<!-- ******************************************************************************************* -->
<!-- En este parte utilizamos un div para la creacion del bloque por el cual se realizara
la busqueda en nuestra pagina web -->
<div id="buscador" class="bloque">

<!-- ***************************************************************************************** -->

<!-- Titulo de del tipo h3 para el bloque -->
        <h3>Buscar</h3> 

<!-- ***************************************************************************************** -->

   <!-- Creacion del formulario con el metodo form, el cual redireciona ala pagina que tiene 
   la logica de busqueda buscar.php se hace por el metodo de envio POST
   Se solicita una entrada tipo text con nombre budcar
   se solita un segunda entrada con un boton de busqueda que envia por medio del value que 
   oermietira que se realice la busqueda de los caracteres enviados -->
        <form action="buscar.php" method="POST">       
            <input type="text" name="busqueda"/>
            <input type="submit" value="Buscar" />
        </form>
    </div>

<!-- ****************************************************************************************** -->

   <!-- En esta parte del codigo se evalua una condicion, para conocer si la variables $_SESSION
   fue declara o su valor es nulo, si la condicion se cumpla se ejecutara el codigo
   el cual indica por medio de un bloque que el usuario esta logeado correctamente
   adicional por medio de una etiqueta h3  y con codigo php le solicitamos a la variable
   $_SESSION la cual es una varaible especial que recoje la informacion de ingreso a la 
   pagina web, solicitamos el usuario y el nombre concatenado el apellido, el cual no lo mostrara 
   el programa en el bloque de logion indicando el usuario logeado cuando este ingrese los
   datos correctamente  -->

    <?php if (isset($_SESSION['usuario'])): ?>
        <div id="usuario-logueado" class="bloque">
            <h3>Bienvenido,
                <?=$_SESSION['usuario']['nombre'].'  '.$_SESSION['usuario']['apellidos']; ?>
            </h3>

<!-- ****************************************************************************************** -->
        
<!-- Una vez validado y logeado el usuario con el codigo anterior unicamente al usuario que se 
identifico cerrectamnete  le permiete visualizar esta serie de botones que ejecutan acciones
que ya estan definidas en acda uno de sus ficheros
uno nos direcciona por medio de la etiqueta a  -->
            <!--botones-->
            <a href="crear-entradas.php" class="boton boton-verde">Crear entradas</a> <br/>
            <a href="crear-categorias.php" class="boton boton-plata">Crear categorias</a> <br/>
            <a href="mis-datos.php" class="boton boton-naranja">Mis datos</a>  <br/>
            <a href="cerrar.php" class="boton boton-rojo">Cerrar sesion</a> <br/>

<!-- ************************************************************************************** -->

        </div>
    <?php endif; ?>

 <!-- En esta parte del codigo se realiza la validacion si la variable $_SESSION no fue declarada
 de ser asi se ejecutara el codigo de bloque de logion y arrojara la alerta de error en login 
 de esta forma se valiada que no esta logeado o los datos ingresados no fueron correctos
Esta fragmento del codigo es muy importante por que por emdio de esta validaion permite ver 
aceder algunas cosas cuando esta logeado y cuando no los esta permiete ver otras.  -->
    <?php if(!isset($_SESSION['usuario'])): ?>
    <div id="login" class="bloque">


        <h3>IDENTIFICACION</h3>

        <?php if(isset($_SESSION['error_login'])): ?>
        <div class="alerta alerta-error">
            <?=$_SESSION['error_login'];?>
          
<!-- ************************************************************************************** -->
        </div>
    <?php endif; ?>

<!-- En esta parte de codigo se realiza la captura  de los datos con los cuale se identificara
el usuario
se crea un formulario el cual lo direcciona a una pagina login.php, el metodo de envio es
POST, se solicita por medio del label el ingreso de correo y paswword y con un input se 
realiza la captura el cual es enviado por un boton tipo submit y value -->
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" />

            <label for="password">Contraseña</label>
            <input type="password" name="password" />

            <input type="submit" value="Entrar" />
        </form>
    </div>

<!-- ************************************************************************************** -->
<!-- En este fragmento de codigo vamos a realizar las validacions de que la seccion este iniciada
correctamente, para ello realizamos una series de condicionales que si se cumplen se ejecutarn 
los codigos que llevan dentro -->
    <div id="register" class="bloque">

    <!-- Se realiza un condicional para validar si la variable especial $_SESSION esta definidas
    si esta definida y no es nula, entonces se valida el estado de la variable -->
        <?php if (isset($_SESSION['errores'])): ?>
        
        <?php endif; ?>

        <h3>REGISTRATE</h3>

        <!-- MOSTRAR ERRORES -->
    <!-- En este fragmento del codigo se realiaza una condicional la cual indica que si el usuario
    losgro registrarse mostrara un mensaje de completado por medio del div, se evalua la 
    variableespecial $_SESSION['completado'], si esta diefinida y su valor no es nulo.
 En el segundo if se evalua el siguiente condicional elcual indica que si la variable especial
$_SESSION ['errores']['general'] esta definida se ejecutara el mensaje de alerta por medio del div
indicando el error al ingreso  -->
    

        <?php if (isset($_SESSION['completado'])): ?>
            <div class="alerta alerta-exito">
                <?= $_SESSION['completado'] ?>
            </div>
        <?php elseif (isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['errores']['general'] ?>
            </div>
            <?php endif; ?>

<!-- *************************************************************************************
En esta  parte del codigo se realiza el formulario para capturar los datos con los cuales
se realizara el registro de usuario
iniciamos con el metodo form y redireccinamos al fichero registro.php por medio del metodo --botones--
POST
luego solicitamos por medio un label el ingreso de los datos de registro y realizamos la captura
por el metodo correspondiente del input typt 'text', 'email' etc...
luego creamos un fragmento de codigo en php el cual utilizamos  un operador ternario ?:
el cual equivalente a un if-else, que comprueba si la variable $_SESSION['errores'] esta definida,
si esta definida ejecuta la funcion mostrarErrores que fue creada en el fichero de los helpers.
-->
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
<!-- Utilizamos un input el cual permitira crear el boton con el cual se enviara la informacion
que se logro capturar con el formulario anterior.  -->
            <input type="submit" name="submit" value="Registrar" />


        </form>
<!-- Esta es una funcion creada  alogada en la carpeta helpers para los errores  -->
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


<!-- **********************************CODIGO******************************************* -->

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