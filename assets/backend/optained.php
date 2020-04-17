<?php
session_start();
include 'conexion.php';

if ($_GET['op'] == 1) {

#Registro de usuario -------------------------------------------------------------------------------------------------------------------------------

	$name = $_POST['nameReg'];
	$user = $_POST['userReg'];
	$email = $_POST['emailReg'];
	$pass1 = $_POST['passReg'];
	$pass2 = $_POST['repassReg'];
	$age = $_POST['ageReg'];

	$passEnc=password_hash($pass1, PASSWORD_DEFAULT, ["cost" => 10]);

	if (password_verify($pass2, $passEnc)) {
		if ($age >= 16) {
			$queryEje = "SELECT user FROM `users` WHERE user = '$user';";
			$restEje = $conexion->query($queryEje);
			if ($restEje) {

				$insert = "INSERT INTO `users`(`name`, `user`, `email`, `pass`, `age`) VALUES ('$name' , '$user' , '$email' , '$passEnc' , '$age');";

				$rest = $conexion->query($insert);

				$friends = "CREATE TABLE `apps$user` (`id` INT(5) NOT NULL , `app` VARCHAR(50) NOT NULL , `dol` int(2) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

				$rest2 = $conexion->query($friends);

				if ($rest) {
					echo "Complete";
				}else{
					echo "Registration failed, verify your data.";
				}
			}else{
				echo "The user you have chosen is busy.";
			}
		}else{
			echo "You must be over 16 years old";
		}
	}else{
		echo "Passwords are different";
	}
}elseif ($_GET['op'] == 2) {

#inicio de sesion ----------------------------------------------------------------------------------------------------------------------------------

	$email = $_POST['userOrEmailSig'];
	$pass = $_POST['passSig'];

	$query = "SELECT * FROM `users` WHERE email = '$email' or user = '$email'";

	$rest = $conexion->query($query);

	$query2 = "UPDATE `users` SET `active` = 1 WHERE email = '$email' or user = '$email'";

	$rest2 = $conexion->query($query2);

	$i = 0;

	while ($row=$rest->fetch_assoc()){
		if ($email == $row['user'] || $email == $row['email']) {
			if (password_verify($pass, $row['pass'])) {
		    	$_SESSION['line'] = 1;
		    	$_SESSION['name'] = $row['name'];
		    	$_SESSION['user'] = $row['user'];
				echo "logging in";
			}else{
				echo "Incorrect password";
			}
		}
		$i = 1;
	}
	if ($i == 0) {
		echo "Incorrect User or E-mail";
	}
}