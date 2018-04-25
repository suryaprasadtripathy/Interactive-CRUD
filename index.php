<center>
<?php
	include 'database.php';
	$str="select * from users";
	$result=mysqli_query($con,$str);
	echo '<br><br>';
	echo '<h3>INTERACTIVE CRUD IN PHP</h3>';
	echo '<table border="2" cellpadding="10">';
	echo '<th> NAME </th> <th> EMAIL </th> <th> PASSWORD </th> <th colspan="2"> ACTION </th>';
		
	if((mysqli_num_rows($result))>0) 
	{
		
		while($row=mysqli_fetch_array($result))
		{
			echo '<tr><td><center>'.$row[1].'</center></td><td><center>'.$row[2].'</center></td><td><center>'.$row[3].'</center></td><td><a href="update.php?id='.$row[0].'"><button>&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</button></a></td><td><a href="delete.php?id='.$row[0].'"><button>Delete</button></a></td></tr>';
			$r=$row[0];
		}
	}
	echo '<form method="post" action="create.php">';
	echo '<tr><td><center><input type="text" name="name" placeholder="User Name"></center></td><td><center><input type="text" name="email" placeholder="Email Address"></center></td><td><center><input type="password" name="password" placeholder="Password"></center></td><td><input type="submit" name="create" value="&nbsp;&nbsp;Save&nbsp;&nbsp;"></td><td><input type="reset" value="&nbsp;Reset"></td></tr>';
	echo '</form';
	echo "</table>";
?>
</center>