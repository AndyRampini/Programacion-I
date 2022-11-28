<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header><a href="home.php" id='app_name' class="header">Programación I</a></header>
	<form action="login_process.php" method='post'>
		<input type="text" placeholder="Usuario"  name='username' required>
		<input type="password" placeholder="Contraseña" name='password' required>
		<input type="submit" value="Iniciar sesión">
	</form>
</body>
</html>

<?php
session_start();
if(isset($_SESSION['error']))
	echo "<p class='error'>" . $_SESSION['error'] . '</p>';
unset($_SESSION['error']);

if(isset($_SESSION['user']))
	header('Location: home.php');