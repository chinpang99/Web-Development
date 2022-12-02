<?php

	include "../conn.php";
	
	$classroom = $_POST['classroom'];

	$sql = "SELECT classroom_name FROM classroom WHERE classroom_name = '$classroom'";
	
	$result = mysqli_query($conn,$sql);
	
	$check_num_rows = mysqli_num_rows($result);
	
	if ($classroom==NULL)
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