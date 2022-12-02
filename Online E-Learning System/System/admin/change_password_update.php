<?php

	session_start();
	
	
	//step 1: connection
	include "../conn.php";
	
	//step 2: retrieve all data frim edit.php page
	$id  = $_SESSION['t_id'];
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$re_password = mysqli_real_escape_string($conn, $_POST['re_password']);
	
	echo"<script>alert('$password');</script>";
	echo"<script>alert('$re_password');</script>";

	if($password != $re_password)
	{
		echo"<script>alert('Password Not Match!');</script>";
		die("<script>window.history.go(-1)</script>");
	}else
	{	
		//step 3: sql
		$sql = "Update teacher SET teacher_password = '".md5($password)."' WHERE teacher_id = '$id'";
			
		//step 4: run the query
		mysqli_query($conn, $sql);
			
		//step 5: check the query got any error or not
		if(mysqli_affected_rows($conn) <= 0)
		{
			echo"<script>alert('No data updated in DB');</script>";
			die("<script>window.history.go(-1)</script>");
		}
			echo"<script>alert('Data updated in DB');</script>";
			die("<script>window.location.href='profile.php'</script>");
	}
?>