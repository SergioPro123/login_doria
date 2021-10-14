<?php

include("./con_db.php");
include("./funciones.php");

echo isset($_POST['register']);
if (isset($_POST['register'])) {

	$user = trim($_POST['name']);
	$password = encrypt(trim($_POST['password']));
	$email = trim($_POST['email']);
	$consulta = "INSERT INTO user(`name`,`email`, `password_encrypt`) VALUES ('$user','$email','$password')";
	$resultado = mysqli_query($conex, $consulta);
	if ($resultado) {
		header("location: ./../list.php");
	} else {
	}
} else {
	header("location: ./../list.php");
}
