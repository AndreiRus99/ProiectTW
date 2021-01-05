<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "lexbox";

	$conn = mysqli_connect($servername, $username, $password, $database);



	function insertR($f1, $f2, $f3, $f4, $f5, $f6, $f7, $f8, $f9, $f10, $f11, $f12, $f13, $f14, $f15, $f16, $f17, $f18, $f19, $f20, $f21, $f22, $f23, $f24, $f25, $f26, $f27, $f28, $f29, $f30, $f31, $f32, $f33, $f34) {
		global $conn;
		$sql = "INSERT INTO `form` (`f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`, `f15`, `f16`, `f17`, `f18`, `f19`, `f20`, `f21`, `f22`, `f23`, `f24`, `f25`, `f26`, `f27`, `f28`, `f29`, `f30`, `f31`, `f32`, `f33`, `f34`) VALUES ('$f1', '$f2', '$f3', '$f4', '$f5', '$f6', '$f7', '$f8', '$f9', '$f10', '$f11', '$f12', '$f13', '$f14', '$f15', '$f16', '$f17', '$f18', '$f19', '$f20', '$f21', '$f22', '$f23', '$f24', '$f25', '$f26', '$f27', '$f28', '$f29', '$f30', '$f31', '$f32', '$f33', '$f34')";
		$query = mysqli_query($conn, $sql);
	}


?>
