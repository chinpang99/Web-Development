<?php
	include "../conn.php";
	
	$id = $_GET['id'];
	
	//step 2:Create delete sql statement
	$sql = "DELETE FROM quiz_question where question_id = '$id'";
	
	//step 3: execute the delete statement
	mysqli_query($conn, $sql);
	
	//step 4: check if there any affected rows or not?
	if(mysqli_affected_rows($conn) <= 0) //No affected rows
	{
		echo "<script>alert('Unable to delete the data!')</script>";
		die("<script>window.history.go(-1)</script>");
	}else
	{ //No affected rows
	
		//step 2:Create delete sql statement
		$sql_answer = "DELETE FROM quiz_selection where question_id = '$id'";
		
		//step 3: execute the delete statement
		mysqli_query($conn, $sql_answer);
		
		//step 4: check if there any affected rows or not?
		if(mysqli_affected_rows($conn) <= 0) //No affected rows
		{
			echo "<script>alert('Unable to delete the data!')</script>";
			die("<script>window.history.go(-1)</script>");
		}
		echo "<script>alert('Data Deleted!')</script>";
		echo "<script>window.location.href='manage_quiz_search.php'</script>";
	}




?>