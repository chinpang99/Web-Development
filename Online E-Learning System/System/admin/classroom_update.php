<?php
	//step 1: connection
	include "../conn.php";

	//step 2: retrieve all data frim edit.php page
	$id = mysqli_real_escape_string($conn, $_POST['classroom_id']);
	$classroom_name = mysqli_real_escape_string($conn, $_POST['classroom_name']);
	$accesscode = mysqli_real_escape_string($conn,$_POST['accesscode']);
	$number_of_student = mysqli_real_escape_string($conn,$_POST['number_of_student']);
				
	//step 3: sql
	$sql = "Update classroom SET classroom_name = '$classroom_name', access_code = '$accesscode', number_of_students = '$number_of_student' WHERE classroom_id = $id";
		
	//step 4: run the query
	mysqli_query($conn, $sql);
		
	//step 5: check the query got any error or not
	if(mysqli_affected_rows($conn) <= 0)
	{
		echo"<script>alert('No data updated in DB');</script>";
		die("<script>window.history.go(-1)</script>");
	}
		
	echo"<script>alert('Data updated in DB');</script>";
	die("<script>window.location.href='classroom_list.php'</script>");
	?>