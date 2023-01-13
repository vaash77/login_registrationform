<?php
	$name = $_POST['name']
	$email = $_POST['email']
	$password = $_POST['password']
	$address = $_POST['address']
	$number = $_POST['number']

	//database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		die('connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registration(name, email, password, address, number)values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssi",$name, $email, $password, $address, $number);
		$stmt->execute();
		echo "registration Successfully...";
		$stmt->close();
		$conn->close();
	}
?>