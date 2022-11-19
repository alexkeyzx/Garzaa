<?php
$servidor = "localhost";
$basededatos = "prueba1";
$usuario = "root";
$password = "Sobrecarga2*";
$con = mysqli_connect($servidor,$usuario,$password,$basededatos) or die("no se pudo conectar a localhost");
$consulta = "select * from usuarios where Id = 1";
$registros = mysqli_query($con,$consulta) or die ("problemas en el select");

$result = mysqli_fetch_all($registros);
mysqli_close($con);
echo json_encode($result);

?>