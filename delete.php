<?php
include("connection.php");
$deleteid=$_GET['deleteid'];
if(isset($deleteid))
{
	$delquery= "DELETE FROM `files` WHERE `id`=".$deleteid;
	$result= mysqli_query($conn,$delquery);
	if($result==true)
	{
		?>
		<script>alert("Record Deleted Successfully");
		window.location.href="admin_panel.php";</script>
		<?php
	}
}
?>