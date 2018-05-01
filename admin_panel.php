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
    <link href="css/mdb.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<style rel="stylesheet" type="text/css" href="style.css">
	
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

	   img {
		    float: left;
		    margin: 5px;
		    width: 230px;
		    height: 140px;
		    background-image: url(images/icons.png);
		    background-repeat: no-repeat;  
  			background-attachment: scroll;  
 			background-position: 0% 0%;
 			background-size: contain;
 				
		}
   
	</style>
	
</head>


	
	<div class="row">
	    <h5 style="text-align:center;font-family: initial;font-size: 39px;font-weight: bold">Welcome In Admin Panel</h5>
		<div class="col-md-4 col-md-offset-8">
			<a href="logout.php" class="btn btn-info logout-btn" >logout</a>
		</div>
	</div>
	
	
  
		<div class="container">
			<h2 style="text-align:center;font-family: initial;font-size: 39px;font-weight: bold">User Details</h2>          
				<table class="table table-hover">
				  <thead>
					<tr>
					  <th>IMAGE</th>
					  <th>DESCRIPTION</th>
					  <th>Name</th>					
					</tr>
				  </thead>
				  <tbody>
				  
					<?php					
					session_start();
								
					require("connection.php");
				
					$result = mysqli_query($conn, "SELECT * FROM files");
					
					while($row=mysqli_fetch_array($result)){
					  $id=$row['id'];
					  echo "<tr>";
					  echo  "<td>" . "<img  src='files/".$row['file']."' >". "</td>";
					  echo  "<td>" .  $row['text']. "</td>";
					  echo  "<td>" .  $row['username']. "</td>";
					  echo  "<td> <a class='btn btn-success' href ='files/".$row['file']."' download> Download </a> </td>";
					  ?>
					  
					  <td><a href="delete.php?deleteid=<?php echo $id;?>" class='btn btn-danger'>Delete</a></td>


					  
					  <?php
					  echo "</tr>";
					}
					?>
				  </tbody>
				</table>
		</div>

	
	   
  

	


	
	<!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Material Design Bootstrap -->
    <script type="text/javascript" src="js/mdb.js"></script>


</body>

</html>