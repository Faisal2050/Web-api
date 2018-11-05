<?php

include('connection.php'); 

	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];

			"INSERT INTO users(name,email,password)VALUES('$name','$email','$password');";




?>