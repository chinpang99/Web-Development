<?php

	session_start();
	
	
	//step 1: connection
	include "conn.php";
	
	//step 2: retrieve all data frim edit.php page
	$id  = $_SESSION['s_id'];
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$retype_password = mysqli_real_escape_string($conn, $_POST['retype_password']);

	if($password != $retype_password)
	{
		echo"<script>alert('Password Not Match!');</script>";
		die("<script>window.history.go(-1)</script>");
	}else
	{	
		//step 3: sql
		$sql = "Update student SET student_password = '".md5($password)."' WHERE student_id = '$id'";
			
		//step 4: run the query
		mysqli_query($conn, $sql);
			
		//step 5: check the query got any error or not
		if(mysqli_affected_rows($conn) <= 0)
		{
			echo"<script>alert('No data updated in DB');</script>";
			die("<script>window.history.go(-1)</script>");
		}
			echo"<script>alert('Data updated in DB');</script>";
			die("<script>window.location.href='personal_information.php'</script>");
	}
?>