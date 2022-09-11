<?php
include("C:\Apache24\htdocs\programas\crud_Usuarios\MODELO\config.php");
include("session.php");

$id = $_POST['id'];
$primnombre = $_POST['primernombre'];
$segnombre = $_POST['segundonombre'];
$apell = $_POST['apellido'];
$fechnac = $_POST['fechadenacimiento'];
$nomusu = $_POST['nombredeusuario'];
$contra = $_POST['contraseña'];

$sql = "UPDATE usuarios SET primernombre='$primnombre', segundonombree='$segnombre', apellido='$apell', fechadenacimiento='$fechnac', nombredeusuario='$nomusu', contraseña='$contra' 
WHERE nombredeusuario='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="users.php";';
	echo '</script>';
}
?>