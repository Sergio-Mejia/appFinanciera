<?php

include('../Class/class_ingreso.php');

$ing = new Ingresos();
$ing->insertar($_REQUEST['descripcion'], $_REQUEST['valor']);

?>