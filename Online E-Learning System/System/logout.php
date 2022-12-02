<?php
	session_start();//start session 
	
	include "conn.php";
	
	$id = $_SESSION['s_id'];
	
	$sql = "SELECT * FROM student WHERE student_id = '$id'";
	
	$query = mysqli_query($conn, $sql);
	
	if($rows = mysqli_fetch_array($query))
	{
		$fullname = $rows['student_fullname'];
	
		//use the session before destroy the sessions
		echo "<script>alert('$fullname, you are logged out!');</script>";
		echo "<script>alert('We will be seeing you again!');</script>";
		
		session_destroy(); //destroy all the sessions
		
		//to transfer back to the main home page
		echo "<script>window.location.href='index.php';</script>";
	}
?>