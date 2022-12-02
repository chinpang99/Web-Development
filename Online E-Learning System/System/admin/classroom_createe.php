<?php
	include "../conn.php";
	
	session_start();
	
	$t_id = $_SESSION['t_id'];
	
	//retrieve data from register.html
	$classroom_name = mysqli_real_escape_string($conn,$_POST['classroom_name']);
	$accesscode= mysqli_real_escape_string($conn,$_POST['accesscode']);
	$number_of_student = mysqli_real_escape_string($conn,$_POST['number_of_student']);
		
	//write the insert sql query
	$sql="Insert into classroom (classroom_name, access_code, number_of_students, teacher_id) VALUES ('$classroom_name','$accesscode','$number_of_student', '$t_id')";
	
	mysqli_query($conn,$sql);
	
	if(mysqli_affected_rows($conn)<=0)
	{
		echo "<script>alert('Classroom is Exist!');</script>";
		die ("<script>window.history.go(-1);</script>");
	}else
	{
		echo "<script>alert('Register Successfully!');</script>";
		echo "<script>window.location.href='classroom_list.php';</script>";
	}

?>