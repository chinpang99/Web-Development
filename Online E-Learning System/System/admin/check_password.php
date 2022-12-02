<?php
	session_start();
	
	include "../conn.php";
	
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$t_id = $_SESSION['t_id'];
		
	$sql = "SELECT * FROM teacher WHERE teacher_password = '$password' AND teacher_id = '$t_id'";
	
	$query = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($query) == 1)
	{
		echo "<script>window.location.href='change_passwordd.php'</script>";
	}else
	{
		echo "<script>alert('INCORRECT PASSWORD! PLEASE INSERT AGAIN!')</script>";
		die("<script>window.history.go(-1)</script>");
	}

?>