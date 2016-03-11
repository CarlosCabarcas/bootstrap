<?php
require_once 'proyecto.php';
$id = $_GET['id'];

$proyecto = new proyecto();
$proyecto->eliminar($id);
header('location: listar.php');



