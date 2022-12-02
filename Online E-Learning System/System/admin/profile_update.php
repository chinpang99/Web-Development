<?php

	session_start();
	
	//step 1: connection
	include "../conn.php";
	
	include "photo_upload.php";

	//step 2: retrieve all data frim edit.php page
	$id = $_SESSION['t_id'];
	$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
	$email= mysqli_real_escape_string($conn,$_POST['email']);
	$ic = mysqli_real_escape_string($conn,$_POST['ic']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
				
	//step 3: sql
	$sql = "Update teacher SET teacher_fullname = '$fullname', teacher_ic = '$ic', teacher_email = '$email', teacher_username = '$username', teacher_photo = '$destination' WHERE teacher_id = '$id'";
		
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
	
	?>