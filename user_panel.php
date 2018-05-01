<?php
  // Create database connection
    session_start();
								
	require("connection.php");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
	  
	 // file file directory
  	$target = "files/".basename($_FILES['file']['name']);
	
  	// Get file name
  	$file = $_FILES['file']['name'];
	
  	// Get text
  	//$text = $_POST['text'];
	$text = mysqli_real_escape_string($conn, $_POST['text']);
	
	// Get username
  	//$text = $_POST['text'];
	$username = mysqli_real_escape_string($conn, $_POST['username']);

  	
  	$sql = "INSERT INTO files (file,text,username) VALUES ('$file', '$text', '$username')";
	
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
  		$msg = "file uploaded successfully";
		header("Location: succes_msg.php");
  	}else{
  		$msg = "Failed to upload file";
  	}
  }
  $result = mysqli_query($conn, "SELECT * FROM files");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Design for Bootstrap</title>

    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    
    
	
	<style rel="stylesheet" type="text/css" href="style.css">
	
	   #content{
		width: 50%;
		margin: 20px auto;
		border: 1px solid #cbcbcb;
	   }
	   form{
		width: 50%;
		margin: 20px auto;
	   }
	   form div{
		margin-top: 5px;
	   }
	   #img_div{
		width: 80%;
		padding: 5px;
		margin: 15px auto;
		border: 1px solid #cbcbcb;
	   }
	   #img_div:after{
		content: "";
		display: block;
		clear: both;
	   }
	   img{
		float: left;
		margin: 5px;
		width: 300px;
		height: 140px;
	   }
	   
	</style>
</head>
<body>

	<div class="row">
	    <h5 style="text-align:center;font-family: initial;font-size: 39px;font-weight: bold">Welcome In User Panel</h5>
		<div class="col-md-4 col-md-offset-8">
			<a href="logout.php" class="btn btn-info logout-btn" >LOGOUT</a>
		</div>
	</div>
	
<div id="content">
 
  
  <form method="POST" action="user_panel.php" enctype="multipart/form-data">
  
		<input type="hidden" name="size" value="1000000">
		
		<div>
		  <input type="file" name="file">
		</div>
		
		
		<div class="text-area">
		  <textarea 
		    placeholder="Say something about this file..."
			id="text" 
			cols="40" 
			rows="4" 
			name="text" 
			></textarea>
		</div>
	
		<div>
		  <input type="text" name="username" placeholder="User Name">
		</div>
      
		<div>
			<button type="submit" name="upload" class="btn btn-success">POST</button>
		</div>
	
  </form>
  
</div>
    
</body>
</html>
