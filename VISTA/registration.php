<?php
	include("C:\Apache24\htdocs\programas\crud_Usuarios\CONTROLADOR\session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
</head>
<body style=" background-image: url('https://wallpaper.dog/large/17017783.jpg');">
<div class="icon-bar">
  <a href="home.php"><i class="fa fa-home"></i></a> 
  <a href="users.php"><i class="fa fa-user"></i></a> 
  <a class="active" href="registration.php"><i class="fa fa-registered"></i></a>
  <a href=".\CONTROLADOR\logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Registrarse</h2>
<hr/>
<form action="register.php" method="POST">
  <div class="container">
	<input type="text" placeholder="Nombre" name="primernombre" required>
    <input type="text" placeholder="segundo nombre" name="segundonombre" required>
    <input type="text" placeholder="Apellido" name="apellido" required>
  	<label>Fecha de Nacimiento</label>
    <input type="date" name="fechadenacimiento" required>
    <input type="text" placeholder="Usuario" name="nombredeusuario" required>
    <input type="password" placeholder="Nueva Contraseña" name="contraseña" required>
    <input type="password" placeholder="Repetir Contraseña" name="psw-repeat" required>
    <div class="clearfix">
      <button type="submit" class="signupbtn">Registrarse</button>
	  <button type="reset" class="cancelbtn">Cancelar</button>
    </div>
  </div>
</form>