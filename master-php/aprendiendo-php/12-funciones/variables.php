<?php
function buenasDias() {
    return "Hola! Buenos dias :)";
}

function buenasTardes(){
    return "Que tal ha estado la comida";
}

function buenasNoches (){
    return "Te vas a domormia ya? Buenas noches";
}

 $horario = "buenasNoches";

 echo  $horario();

?>