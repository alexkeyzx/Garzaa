<?php
$servidor = "localhost";
$basededatos = "proyectoweb";
$usuario = "root";
$password = "Sobrecarga2*";

$con = mysqli_connect($servidor,$usuario,$password,$basededatos) or die("no se pudo conectar a localhost");
$consulta = "select Id from magia WHERE Id";

$registros = mysqli_query($con,$consulta) or die ("problemas en el select");

$result= mysqli_fetch_all($registros,MYSQLI_ASSOC);

mysqli_close($con);
echo json_encode($result);


?>
