<?php
require_once 'proyecto.php';
$proyecto = new proyecto();
$lista = $proyecto->listar();
include './listado.php';
?>
