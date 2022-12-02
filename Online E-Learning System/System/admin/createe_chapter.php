<?php

	session_start();
	
	include "../conn.php";
	
	$name= $_POST['name'];
	
	$chapter= $_POST['chapter'];
	
	$id = $_SESSION['t_id'];
	
	
	$sql_check = "SELECT * FROM chapter WHERE teacher_id = '$id' AND chapter = '$chapter'";
	
	$query_check = mysqli_query($conn, $sql_check);
	
	if(mysqli_num_rows($query_check)<=0)
	{		
		//write the insert sql query
		$sql="Insert into chapter (chapter, chap_name, teacher_id, date_uploaded) VALUES ('$chapter', '$name', '$id', NOW())";
			
		mysqli_query($conn,$sql);
			
		if(mysqli_affected_rows($conn)<=0)
		{
			echo "<script>alert('Chapter is Exist!');</script>";
			die ("<script>window.history.go(-1);</script>");
		}
		else
		{
			echo "<script>alert('INSERT SUCCESSFULLY!');</script>";
			echo "<script>window.location.href='supplementarymaterial.php';</script>";
		}
	}else
	{
		echo "<script>alert('CHAPTER EXIST!');</script>";
		die ("<script>window.history.go(-1);</script>");
	}
?>