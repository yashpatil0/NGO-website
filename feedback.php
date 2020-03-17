<?php

	$pdo=new
	pdo('mysql:host=localhost;dbname=feedback','root','');

	session_start();
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$insert=$pdo->prepare("insert into feedback(firstname,lastname,email,message) values(:firstname,:lastname,:email,:message)");

	$insert->bindParam(':firstname',$firstname);
	$insert->bindParam(':lastname',$lastname);
	$insert->bindParam(':email',$email);
	$insert->bindParam(':message',$message);

	$insert->execute();
	header('location:index.html');

?>