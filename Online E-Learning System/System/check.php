<?php

	include "conn.php";
	
	$username = $_POST['username'];

	
	$sql = "SELECT student_username FROM student WHERE student_username = '$username'";
	
	$result = mysqli_query($conn,$sql);
	
	$check_num_rows = mysqli_num_rows($result);
	
	if ($username==NULL)
	{
		echo "";
	}
	else
	{
		if ($check_num_rows==0)
		{
			echo "<a style='color: green;'>Available</a>";
		}
		elseif ($check_num_rows==1)
		{
			echo "<a style='color: red;'>Not Available</a>";
		}
	}
	
?>