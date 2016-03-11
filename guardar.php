<?php
function noVacio($valor) {
    return $valor !== '';
}
require_once 'proyecto.php';
$fecha = getdate();
$actual = $fecha['year'] . '-' . $fecha['mon'] . '-' . $fecha['mday'];

$nombre = $_POST['nombre'];
$autor = $_POST['autor'];
$asesor = $_POST['asesor'];
$nota = $_POST['nota'];
$linea = $_POST['linea'];

if (noVacio($nombre)&&noVacio($autor[0])&&noVacio($asesor)&&noVacio($nota)&&noVacio($linea)) {
    $proyecto = new proyecto();
    $resul = $proyecto->guardar($nombre, $autor[0], $autor[1], $autor[2], $asesor, $nota, $linea);
    if ($resul == NULL) {
        echo ("ERROR");
    } else {
        header('Location: listar.php');
    }
} else {
    header('location: registrar.html');
}