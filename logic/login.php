<?php

include("./con_db.php");
include("./funciones.php");

echo isset($_POST['login']);
if (isset($_POST['login'])) {

	$password = trim($_POST['password']);
	$email = trim($_POST['email']);

	$consulta = "SELECT * FROM user Where user.email = '$email' LIMIT 1;";

	$resultado = mysqli_query($conex, $consulta);

	$user = $resultado->fetch_assoc();
	$msj_error = "";
	if (!$user) {
		$msj_error = "Correo electronico incorrecto.";
		return header("location: ./../login.php?msj_error=" . $msj_error);
	}


	if ($password != decrypt($user["password_encrypt"])) {
		$msj_error = "Contraseña incorrecta.";
		return header("location: ./../login.php?msj_error=" . $msj_error);
	}


	header("location: ./../list.php");
} else {
	header("location: ./../login.php");
}
