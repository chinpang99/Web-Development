<?php

	session_start();
	
	
	//step 1: connection
	include "conn.php";
	
	include "fileupload_picture.php";
	
	//step 2: retrieve all data frim edit.php page
	$id  = $_SESSION['s_id'];
	$student_fullname = mysqli_real_escape_string($conn, $_POST['student_fullname']);
	$student_ic = mysqli_real_escape_string($conn, $_POST['student_ic']);
	$student_email = mysqli_real_escape_string($conn, $_POST['student_email']);
	$student_username = mysqli_real_escape_string($conn, $_POST['student_username']);
	
	//step 3: sql
	$sql = "Update student SET student_fullname = '$student_fullname', student_ic = '$student_ic', student_email = '$student_email', student_username = '$student_username', student_photo = '$destination' WHERE student_id = '$id'";
		
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
?>