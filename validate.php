<?php
include("config.php");
session_start();

$nomusu = $_POST['nombredeusuario'];
$contra = $_POST['contraseña'];
 
$nomusu = $mysqli->real_escape_string($nomusu);
 
$query = "SELECT nombredeusuario, contraseña FROM usuarios WHERE nombredeusuario = '$nomusu' AND contraseña ='$contra';";
$result = $mysqli->query($query);
 
if($result->num_rows == 1) 
{
	$_SESSION['user'] = $nomusu;
	header('Location:home.php');  
}
else{ 
	header('Location:login.html');
}
?>