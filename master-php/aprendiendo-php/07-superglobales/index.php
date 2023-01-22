<?php

// VARIABLES SUPER GLOBALES


// VARIABLES DE SERVIDOR

echo '<h1>';
echo $_SERVER['SERVER_ADDR'];
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_NAME'];
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE'];
echo '</h1>';

echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT'];
echo '</h1>';

//TAMBIEN SE PUEDE ESCRIBIR DE ESTA MANERA
echo '<h1>'.$_SERVER['REMOTE_ADDR'].'</h1>';
?>
