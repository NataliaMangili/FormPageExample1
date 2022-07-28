<?php
	include_once('conection.php');
        $name = $_POST['name'];
	$email = $_POST['email'];
        $subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$result_msg_contato = "INSERT INTO form(name, email, subject, message, created) VALUES ('$name', '$email', '$subject', '$message', NOW())";
	$resultado_msg_contato= mysqli_query($conn, $result_msg_contato)
?>