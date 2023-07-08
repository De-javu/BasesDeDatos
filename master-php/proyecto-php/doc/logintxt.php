<?php
//RECOGER LOS DATOS DEL FORMULARIO
// En este fichero del codigop nos encargamos de pasmar la logica para acreditar
// que el usrio logeado es realmente quien ingreso los datos acordes

// utilizamos la funcion require_once la cual no permite incluir la informacion 
// a la base de datos
require_once 'includes/conexion.php';

// utilizamos un if como condicional para evaluar si el metodo $_POST fue declarado
// y su valor no es nulo,
if (isset($_POST)) {

// utilizamos de nuevo un if para validar que la variable $_SESSION no fue declara
// y su valor es nulo, de cumplirce se ejecuta la fucnion que permietria 
// el inicio de session o su reanudacion
    if(!isset($_SESSION)){
        session_start();
    
    }

    var_dump($_POST);
       }

        //BORRAR ERROR ANTIGUO
// Se utiliza un codicinal el caal evalua si la variable $_SESSION es declara y si pasa
// un parametro de error en el login, de ser asi se ejecuta la funcion unset que se encarga
// de eliminar y resetear la variable y no muetra el eroro si ya esta logeado. 

    if (isset($_SESSION['error_login'])) {
        unset($_SESSION['error_login']); // ojo
    }

     //RECOJO DATOS DEL FORMULARIO
    //  Utilizamos la funcion trim para elminar los espacio que pueden llegar por parte de
    //  la cactura del correo que pasa por medio del metodo $_POST y lo ponemos en una 
    //  varible $email de igual forma que la $password
     $email = trim($_POST['email']);
     $password = $_POST['password'];

      //CONSULTAS PARA COMPROBAR LA CREDENCIALES  DEL USUARIO
// Realizamos la consulta a la base de datos y solicitamos el usuario ponemos un condicinal 
// donde email del la consulta debe ser igual al imail de la base de datos por mdio del where 
//  capturamos la funcion que devulve en las 
// dos variables $sql y la otra $login
// En este caso, la condición es que $login sea verdadero y que mysqli_num_rows($login) sea 
// igual a 1. La primera parte verifica que la consulta se haya realizado correctamente y 
// que no haya errores. La segunda parte cuenta el número de filas que devuelve la consulta y
// lo compara con 1. Esto sirve para asegurarse de que solo hay un usuario con ese email en
//  la base de datos.
// se ejecuta la funcion mysqli_fetch_assoc que funciona como un arraya asociativo de la variable 
// login que se paso y se aloja en la variable $usuario

    $sql = "SELECT * FROM usuarios WHERE email = '$email' ";
    $login = mysqli_query($db, $sql);

    if ($login && mysqli_num_rows($login) == 1) {
        $usuario = mysqli_fetch_assoc($login);

        //COMPROBAR LAS CONTRASEÑAS
// En esta parte del codigo validamos que la contraseña se correcta utilizamos la funcion 
// password_verify pasamos la variables de $password que es la que introduce el usuario
//  y la varible $usuario con su valor de array asiciativo que contine la contraseña almacenada 
//  en la base de datos de concidir y cumplircen las dos contraseñas se valida el usuario.
// se utiliza un condicional si la variable contraseña paso el filtro anterior ejecutara la function 
// $_SESSION para guardar los datos del usrio logeado
// de los contario indicara que el login es incorrecto
        $verify = password_verify($password, $usuario['password']);

        if ($verify) {
            //UTILIZAR UNA SESION PARA GUARDARA LOS DATOS DEL USUARIO LOGUEADO
            $_SESSION['usuario'] = $usuario;

        } else {
            // SI ALGO FALLA ENVIAR UNA SECCION CON EL FALLO
            $_SESSION['error_login'] = "login incorrecto!!";
        }

    } else {
        // MENSAJE DE ERROR
        $_SESSION['error_login'] = "Login incorrecto!!";
    }

    // REDIRIGIR AL INDEX.PHP
// por ultimo redireccionamos a la pagina de inicial de index por medio header
header('location: index.php');

?>

<!-- **************************** FUNCIONES UTILIZADAS *****************************************-->
<!--
require_once = Se utiliza para traer los fichero una unica vez cuando se necesiten 
if = Se utiliza como condicional, si se cumple se ejecuta elcodigo que va dentro de los corchetes
isset = Se utliza para validar si la varible fue declarada o su valor es nulo
$_POST = Es el metodo por el cual se wnvian los datos de una pagina a otra
! = SE utiliza como operador de negacion
$_SESSION = Este es un array especial que permiete cargar informacion de guardar datos de sesion
session_start = Se utiliza para iniciar la session 
var_dump = Se utiliza para validar que esta devolviendo la variable capturada
unset = Se utiliza para eliminar varaibles o segun sea el caso
trim = Se utiliza para eliminar los espacio en balnco al inicio o final de una cadena 
SELECT * FROM usuarios = Se utiliza para indicar que se consultara una tabla de usurios llamada select
WHERE = Se utiliza como condicional en las cosnultas si se cumple retorna una consulta
mysqli_query($db, $sql) = Se utiliza para indicar que se realiza unaconsulta y se pasa 
                          la conexion de la base de datos ($db) y la consulta en ($sql)
&& =  Se utiliza como operador AND 
mysqli_num_rows = Se utiliza para contar las filas de un conjunto de datos que se optienen
                 en una consulta 
mysqli_fetch_assoc = Se utiliza para retornar un array asosciativo de una variable 
password_verify = Esta funcion permite validar un el password junto con el has 
else = se utiliza como condicional si el if no se cumple entonces se ejecutara el else
header = SE utiliza para redireccionar  a otra pagina 

?> -->


