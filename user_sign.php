<?php

	session_start();
								
	require("connection.php");
	
	// Check connection
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
	            $name = $_POST['name'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				
				$sql = "INSERT INTO users". "(name,email,password) ". 
				"VALUES('$name','$email','$password')";
				
				mysqli_select_db($conn,'upload_sample');
				$retval = mysqli_query($conn,$sql);
				if($retval){
							 header("Location:user_panel.php");
							
							 
						   }
								
				if(! $retval ){
								 die('Could sign up: ' . mysqli_error($con));
							}
											
									
				mysqli_close($conn);


?>