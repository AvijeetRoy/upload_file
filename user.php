<!DOCTYPE html>
<html lang="en">

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
  
    <link href="css/user.css" rel="stylesheet">

</head>


<body>

	
	<div class="reg-login">
		<div class="container-fluid">
			<div class="row">
				 <h5 style="text-align:center;font-family: initial;font-size: 39px;font-weight: bold;margin-top: 50px;">Sign Up Page For User</h5>
				 
					<form class="login-form" action="user_sign.php" method="POST">

					  <div class="container login-container">
					  
						<label><b>Name</b></label>
						<input class="login-input" type="text" placeholder="Enter Name" name="name" required>
						
						
						<label><b>Email</b></label>
						<input class="login-input" type="text" placeholder="Enter Email" name="email" required>

						<label><b>Password</b></label>
						<input class="login-pass" type="password" placeholder="Enter Password" name="password" required>

						<button class="login-btn" type="submit" name="signup" value="SignUp">Sign Up</button>
					  </div>

					</form>			
			
			</div>
		</div>
	</div>



<?php
	include 'includes/footer.php';

?>

</body>
</html>