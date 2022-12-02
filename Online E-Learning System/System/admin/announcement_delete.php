<?php
	//step 1: connection
	include "../conn.php";
	
	$id = $_GET['id'];
	
	//step 2:Create delete sql statement
	$sql = "DELETE FROM announcement where ann_id = '$id'";
	
	//step 3: execute the delete statement
	mysqli_query($conn, $sql);
	
	//step 4: check if there any affected rows or not?
	if(mysqli_affected_rows($conn) <= 0) //No affected rows
	{
		echo "<script>alert('Unable to delete the data!')</script>";
		die("<script>window.history.go(-1)</script>");
	} //No affected rows
		echo "<script>alert('Data Deleted!')</script>";
		echo "<script>window.location.href='announcement_view.php'</script>";
?>