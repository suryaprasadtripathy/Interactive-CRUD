<?php
	include 'database.php';
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$str="delete from users where id=".$id;
		mysqli_query($con,$str);
		
	}
	header("Location:index.php");
?>