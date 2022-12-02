<?php
	
	session_start();
	
	include "conn.php";
	
	//retrieve data from register.html
	$id = $_SESSION['s_id'];
	$chapter_id = mysqli_real_escape_string($conn,$_POST['chapter']);
	$comment = mysqli_real_escape_string($conn,$_POST['comment']);
	$title = mysqli_real_escape_string($conn,$_POST['title']);
	$star = mysqli_real_escape_string($conn,$_POST['star']);
	
	//write the insert sql query
	$sql="Insert into review (review_title, review_content, review_rating, student_id, chap_id) VALUES ('$title', '$comment', '$star', '$id', '$chapter_id')";
				
	mysqli_query($conn,$sql);
				
	if(mysqli_affected_rows($conn)<=0)
	{
		echo "<script>alert('Unable to add review!');</script>";
		die ("<script>window.history.go(-1);</script>");
	}else
	{
		echo "<script>alert('Add Review Successfully!');</script>";
		echo "<script>window.location.href='chapter.php?id=$chapter_id';</script>";
	}
	
?>