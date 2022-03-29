<?php

include("../Conexion/conexion.php");
include('../Class/class_egreso.php');

$eg = new Egresos();
$eg->insertar1($_REQUEST['descripcion'], $_REQUEST['valor']);

?>