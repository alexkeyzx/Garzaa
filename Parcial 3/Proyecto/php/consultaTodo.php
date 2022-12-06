<?php
require 'conexion.php'
$consulta = "select * from magia";

$registros = mysqli_query($con,$consulta) or die ("problemas en el select");

$result = mysqli_fetch_all($registros,MYSQLI_ASSOC);

mysqli_close($con);
echo json_encode($result);
?>