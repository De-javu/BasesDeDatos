<?php

/*
Cookie: Es un fichero que se almacena en el ordenador de usuario que visita
la web, con fin de recordar datos o retraer el comportamiento del mismo 
en la web.
 */

 // Crear cookies
 // setcookie("nombre", "valos que solo puede ser texto", cauducidad, ruta, dominio);
 setcookie("micookie", "Valor de mi galleta");

 //Cookis con expiracion 
 setcookie("Unyear", "Valor de cookie de 365", time()+(60*60*249365));

 ?>
  <a href="Ver_cookies.php">Ver las Galletas</a>