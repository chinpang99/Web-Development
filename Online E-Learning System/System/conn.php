<?php 
	//learn how to connect to MYSQL using mysqli_connect()
	//server location, username, password, dbname
	$conn = mysqli_connect('localhost', 'root', '', 'assignment');
	
	if(mysqli_connect_errno()) //check the connection!
	{
		die("<script>alert('error in db connection!');</script>");
	}
	//success connection
?>