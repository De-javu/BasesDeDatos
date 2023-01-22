<?php

// Array Multidimencional

$contactos   = array(
        array(
            'nombre' => 'Antonio',
            'email'  => 'antonio@antonio.com'
        ),
        array(
            'nombre' => 'Luis',
            'email'  => 'luis@luis.com'
        ),
        array(
            'nombre' => 'Salvador',
            'email'  => 'salva@salva.com'
        ),

    );

    echo $contactos[0] ['nombre'];
    echo '<hr/>';
    echo $contactos [2] ['nombre'];

    foreach ($contactos as $key => $contactos) {
        echo $contactos['nombre'];
        var_dump($contactos['nombre']);
    }


?>