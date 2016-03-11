<?php require_once('conectar.php'); ?>

<?php

if (($_POST['nombre']) && ($_POST['autor1']) && ($_POST['autor2']) && ($_POST['autor3']) && ($_POST['asesor'])  && ($_POST['nota']) && ($_POST['linea'])){

	$fecha = date("d-m-y");

	$n = $_POST['nombre'];
	$a1 = $_POST['autor1'];
	$a2 = $_POST['autor2'];
	$a3 = $_POST['autor3'];
	$as = $_POST['asesor'];
	$not = $_POST['nota'];
	$lin = $_POST['linea'];

	$insert = sprintf("INSERT INTO datosproyectos (nombre,autor1,autor2,autor3,asesor,fechaingreso,nota,lineainvestigacion) VALUES ('".$n."','".$a1."','".$a2."','".$a3."','".$as."','".$fecha."','".$not."','".$lin."')");
	mysql_select_db($bd,$conexion);

	$resultado = mysql_query($insert,$conexion) or die(mysql_error());


	echo 1;
}


?>

