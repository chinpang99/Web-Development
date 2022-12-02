<?php
	//step 1: connection
	include "../conn.php";
	
	//step 2: retrieve all data frim edit.php page
	$id = mysqli_real_escape_string($conn, $_POST['ann_id']);
	$ann_title = mysqli_real_escape_string($conn, $_POST['ann_title']);
	$ann_content = mysqli_real_escape_string($conn, $_POST['ann_content']);
	
	include "announcement_upload_picture.php";
	

	//step 3: sql
	$sql = "Update announcement SET ann_name = '$ann_title', ann_content = '$ann_content', ann_image = '$destination' WHERE ann_id = '$id'";
		
	//step 4: run the query
	mysqli_query($conn, $sql);
		
	//step 5: check the query got any error or not
	if(mysqli_affected_rows($conn) <= 0)
	{
		echo"<script>alert('No data updated in DB');</script>";
		die("<script>window.history.go(-1)</script>");
	}
		echo"<script>alert('Data updated in DB');</script>";
		die("<script>window.location.href='announcement_view.php'</script>");
?>