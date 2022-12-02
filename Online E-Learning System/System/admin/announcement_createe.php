<?php
	
	session_start();
	
	include "../conn.php";
					
	include "announcement_upload_picture.php";
	
	$ann_title = $_POST['ann_title'];
	
	$ann_content = $_POST['ann_content'];
	
	$id = $_SESSION['t_id'];
			
	//write the insert sql query
	$sql="Insert into announcement (ann_name, ann_content, ann_image, teacher_id, date_uploaded) VALUES ('$ann_title', '$ann_content', '$destination', '$id', NOW())";
		
	mysqli_query($conn,$sql);
		
	if(mysqli_affected_rows($conn)<=0)
	{
		echo "<script>alert('Data is Exist!');</script>";
		die ("<script>window.history.go(-1);</script>");
	}
	else
	{
		echo "<script>window.location.href='announcement_view.php';</script>";
	}
	
?>