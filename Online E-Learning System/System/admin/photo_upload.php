<?php
	//step 1: read the file name (optional)   (CANNOT BE CHANGE, BECAUSE IS RESERVE WORDS)
	$filename = basename($_FILES['photo']['name']); //result = abc.jpg
	
	//step 2: get the file size
	$checkfilesize = $_FILES['photo']['size'];
	
	//step 3: get the file type
	$getFileType = pathinfo($filename,PATHINFO_EXTENSION); //abc.jpg become jpg
	
	//step 4: set the destination path for your file upload
	$destination = "img/user/".$filename; //follow the previous item name
			
	//extra: if you want to change the item name:
	//e.g. $destination = "profit/".ic.".".$getFileType;
		
	//check for filesize whether more than 1MB
	if($checkfilesize> 1000000)
	{
		echo "<script>alert('Sorry file size more than 1MB. Please choose others pic!');</script>";
		die("<script>window.history.go(-1);</script>");
	}
	
	//check for the file type
	if($getFileType != "jpg" && $getFileType != "jpeg" && $getFileType !="png" && $getFileType != "gif")
	{
		echo"<script>alert('Sorry file is not correct. Please choose others pic!');</script>";
		die("<script>window.history.go(-1);</script>");
	}
	
	//move the file with the function called move_uploaded_file('$source', '$destination')
	if(!move_uploaded_file($_FILES['photo']['tmp_name'], $destination))
	{
		echo"<script>alert('Technical Problem: File not uploaded!');</script>";
		die("<script>window.history.go(-1);</script>");
	}
	echo "<script>alert('Congratz, file is uploaded!');</script>";

?>