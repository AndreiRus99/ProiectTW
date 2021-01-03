<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$adress = $_POST['adress'];

	// Database connection
	$conn = new mysqli('localhost','root','','tw');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, phone, email, adress) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiss", $firstName, $lastName, $phone, $email, $adress);
		$execval = $stmt->execute();
		echo $execval;
		echo "Hello $firstName";
		$stmt->close();
		$conn->close();
	}
?>