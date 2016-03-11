<?php

function noVacio($valor) {
    return $valor !== '';
}

require_once 'proyecto.php';

$campo = $_POST['campo'];
$criterio = $_POST['criterio'];


$proyecto = new proyecto();
$lista = $proyecto->buscar($campo, $criterio);
include './listado.php';


