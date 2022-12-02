<?php
	session_start();
	
	include "conn.php";
	
	$password = mysqli_escape_string($conn, $_POST['password']);
	$s_id = $_SESSION['s_id'];
	
	$passwordd = md5($password);
	
	$sql = "SELECT * FROM student WHERE student_password = '$passwordd' AND student_id = '$s_id'";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)<=0)
	{
		echo "<script>alert('Wrong Password!');</script>";
		die ("<script>window.history.go(-1);</script>");
	}else
	{
		echo "<script>window.location.href='change_passwordd.php'</script>";
	}


?>