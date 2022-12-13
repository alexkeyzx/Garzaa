<?php
$Id = $_POST['sID'];
$servidor = "localhost";
$basededatos = "proyectoweb";
$usuario = "root";
$password = "Sobrecarga2*";

$con = mysqli_connect($servidor,$usuario,$password,$basededatos) or die("no se pudo conectar a localhost");

$update = "DELETE FROM magia Where Id= $Id";
$querry = mysqli_query($con, $update) or die ("problemas en el update");
?>
