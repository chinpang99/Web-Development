<?php

	session_start();
	
	$id = $_GET['id'];
	
	//step 1: connection
	include "../conn.php";
	
	$sql_status = "SELECT * FROM student WHERE student_id = '$id'";
	
	$query_status = mysqli_query($conn, $sql_status);
	
	if($rows = mysqli_fetch_array($query_status))
	{
		if($rows['status'] == 'Enable')
		{		
			//step 3: sql
			$sql = "Update student SET status = 'Disable' WHERE student_id = '$id'";
				
			//step 4: run the query
			mysqli_query($conn, $sql);
				
			//step 5: check the query got any error or not
			if(mysqli_affected_rows($conn) <= 0)
			{
				echo"<script>alert('No data updated in DB');</script>";
				die("<script>window.history.go(-1)</script>");
			}
				
			echo"<script>alert('Data updated in DB');</script>";
			die("<script>window.location.href='student_list.php'</script>");
		}elseif($rows['status'] == 'Disable')
		{		
			//step 3: sql
			$sql = "Update student SET status = 'Enable' WHERE student_id = '$id'";
				
			//step 4: run the query
			mysqli_query($conn, $sql);
				
			//step 5: check the query got any error or not
			if(mysqli_affected_rows($conn) <= 0)
			{
				echo"<script>alert('No data updated in DB');</script>";
				die("<script>window.history.go(-1)</script>");
			}
				
			echo"<script>alert('Data updated in DB');</script>";
			die("<script>window.location.href='student_list.php'</script>");
		}

	}
	
	
	?>