<?php
	session_start();
	
	include "conn.php";
	
	//receives the data from html
	$username = mysqli_real_escape_string($conn,$_POST['user']);
	$password = mysqli_real_escape_string($conn,$_POST['pwd']);
	
	$a = md5($password);
		
	//SQL query
	$sql="Select * from student where student_username = '$username' and student_password = '$a'";
	
	$sql1 = "SELECT * FROM teacher WHERE teacher_username = '$username' and teacher_password = '$password'";
		
	$result = mysqli_query($conn, $sql);
	
	$result1 = mysqli_query($conn, $sql1);
		
	//Execute the query, if fail to login, it redirects back to Login Page
		if(mysqli_num_rows($result)<=0 && mysqli_num_rows($result1)<=0)
		{
		echo "<script>alert('INVALID USERNAME OR PASSWORD!');</script>";
		die ("<script>window.history.go(-1);</script>");
		}
				
		//If success, a message of welcoming the user via $_SESSION and directs it to the user.php
		if($row = mysqli_fetch_array($result))
		{
		
		$_SESSION['s_id'] =  $row['student_id'];
		echo "<script>alert('Welcome, ".$row['student_fullname']."');</script>";
		echo "<script>window.location.href='index.php'</script>";
		}elseif($row1 = mysqli_fetch_array($result1))
		{
		$_SESSION['t_id'] =  $row1['teacher_id'];
		echo "<script>alert('Welcome, ".$row1['teacher_fullname']."');</script>";
		echo "<script>window.location.href='admin/index.php'</script>";
		
		}


?>