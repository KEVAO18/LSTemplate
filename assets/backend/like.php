<?php
	
	session_start();

	include 'conexion.php';

	$op = $_GET['op'];

	if ($op==0) {
		$id = $_POST['id'];
		$user = $_SESSION['user'];

		$query="SELECT dol FROM `apps$user` WHERE `id` = '$id';";

		$rest = $conexion->query($query);

		while ($row=$rest->fetch_assoc()) {
			$dol = array('dol' => $row['dol']);
			echo $dol['dol'];
		}
	}else if ($op == 3) {
		$id = $_POST['id'];

		$query="SELECT * FROM `apps` WHERE `id` = '$id';";

		$rest = $conexion->query($query);

		while ($row=$rest->fetch_assoc()) {
			if ($row['links'] == "") {
				$data = array('down' => "This app is not available");
				echo json_encode($data);
			}else{
				$down = $row['downloads']+1;
				$name = $row['name'];
				$data = array('name' => $name, 'down' => $down);
				$query2 = "UPDATE `apps` SET `downloads` = '$down' WHERE `id` = '$id'";
				$exe = $conexion->query($query2);
				echo json_encode($data);
			}
		}
	}