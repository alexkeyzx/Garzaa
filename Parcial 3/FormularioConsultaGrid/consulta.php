<?php
$servidor = "localhost";
$basededatos = "psicologia";
$usuario = "root";
$password = "Sobrecarga2*";

$con = mysqli_connect($servidor,$usuario,$password,$basededatos) or die("no se pudo conectar a localhost");
$consulta = "select Id_nino, nombre from paciente";

$registros = mysqli_query($con,$consulta) or die ("problemas en el select");

$result= mysqli_fetch_all($registros,MYSQLI_ASSOC);
mysqli_close($con);
echo json_encode($result);


?>
