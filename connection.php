

<?php

		
	$connection = mysqli_connect("localhost",'root','root','api');

	if(!$connection){

		$array = array("Con"=>"Not Established");
	}
	else{

		$array = array("Con"=>"Established");
	}

	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];

			$sql = "INSERT INTO users(name,email,password)VALUES('$name','$email','$password');";
			mysqli_query($connection,$sql);

				if($sql){
					$array = array("Status"=>"Inserted");
				}
				else{
						$array = array("Status"=>"Not Inserted");
				}

				echo json_encode($array);














?>