<?php

	session_start();

	include "conexion.php";

	$user = $_SESSION['user'];

	$name = $_SESSION['name'];

	$query = "UPDATE `users` SET `active` = 0 WHERE user = '$user' AND name = '$name'";

	$rest = $conexion->query($query);

	session_unset();
	session_destroy();
	header("location: ../../");

?>