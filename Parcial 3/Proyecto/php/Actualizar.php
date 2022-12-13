<?php
$Id = $_POST['sID'];
$servidor = "localhost";
$basededatos = "proyectoweb";
$usuario = "root";
$password = "Sobrecarga2*";

$con = mysqli_connect($servidor,$usuario,$password,$basededatos) or die("no se pudo conectar a localhost");

$Nombre_imagen = $_FILES['inpImagen']['name'];
$temporal=$_FILES['inpImagen']['tmp_name'];
$carpeta='../img';
$ruta = $carpeta.'/'.$Nombre_imagen;
$imgenvio = './img/'.$Nombre_imagen;
move_uploaded_file($temporal,$carpeta.'/'.$Nombre_imagen);

$Nombre = $_POST['inpNombre'];  
$Efecto = $_POST['InpEfecto'];
$Lore = $_POST['inpLore'];
$Fuerza = $_POST['inpFuerza'];
$Destreza = $_POST['inpDestreza'];
$Inteligencia = $_POST['inpInteligencia'];
$Fe = $_POST['inpFe'];
$Arcano = $_POST['inpArcano'];
$Espacios = $_POST['inpEspacios'];

$update = "UPDATE magia SET Nombre= '$Nombre', Efecto= '$Efecto', Lore= '$Lore', Fuerza= $Fuerza, Destreza='$Destreza', Inteligencia='$Inteligencia', Fe='$Fe',Arcano = '$Arcano', Espacios='$Espacios', imagen = '$imgenvio' where Id= $Id";
$querry = mysqli_query($con, $update) or die ("problemas en el update");
?>
