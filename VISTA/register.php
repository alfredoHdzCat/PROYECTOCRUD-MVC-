<?php
include("config.php");
include("session.php");

$primnombre = $_POST['primernombre'];
$segnombre = $_POST['segundonombre'];
$apell = $_POST['apellido'];
$fechnac = $_POST['fechadenacimiento'];
$nomusu = $_POST['nombredeusuario'];
$contra = $_POST['contraseña'];

$sql = "INSERT INTO usuarios (primernombre, segundonombre, apellido, fechadenacimiento, nombredeusuario, contraseña) 
VALUES('$primnombre', '$segnombre', '$apell', '$fechnac', '$nomusu', '$contra')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Nuevo usuario agregado");';
	echo 'window.location="index.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Usuario duplicado!");';
	echo 'window.location="registration.php";';
	echo '</script>';
}
?>