<?php
$Id = $_POST['sID'];
$servidor = "localhost";
$basededatos = "proyectoweb";
$usuario = "root";
$password = "Sobrecarga2*";

$con = mysqli_connect($servidor,$usuario,$password,$basededatos) or die("no se pudo conectar a localhost");
$consulta = "select * from magia WHERE Id = $Id";

$registros = mysqli_query($con,$consulta) or die ("problemas en el select $Id");

$result = mysqli_fetch_array($registros,MYSQLI_ASSOC);

mysqli_close($con);
echo json_encode($result);


?>
