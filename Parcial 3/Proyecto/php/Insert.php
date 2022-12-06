<?php
$servidor = "localhost";
$basededatos = "proyectoweb";
$usuario = "root";
$password = "Sobrecarga2*";

$con = mysqli_connect($servidor,$usuario,$password,$basededatos) or die("no se pudo conectar a localhost");


$Nombre = $_POST['inpNombre'];  
$Efecto = $_POST['inpEfecto'];
$Imagen = $_POST['inpImagen'];
$Lore = $_POST['inpLore'];
$Fuerza = $_POST['inpFuerza'];
$Destreza = $_POST['inpDestreza'];
$Inteligencia = $_POST['inpInteligencia'];
$Fe = $_POST['inpFe'];
$Arcano = $_POST['inpArcano'];
$Espacios = $_POST['inpEspacios'];
//PRINTF($Nombre, $Efecto, $Lore, $Fuerza, $Destreza, $Inteligencia, $Fe, $Arcano, $Espacios);

$insert = "insert into magia (`Id`, `Nombre`, `Efecto`, `imagen`, `Lore`, `Fuerza`, `Destreza`, `Inteligencia`, `Fe`, `Arcano`, `Espacios`) VALUES (Null,'$Nombre', '$Efecto', 'hola', '$Lore', $Fuerza, $Destreza,$Inteligencia,$Fe,$Arcano, $Espacios)";
$querry = mysqli_query($con, $insert) or die ("problemas en el select");
?>
