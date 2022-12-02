<?php
	include "conn.php";
	
	//retrieve data from register.html
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
	$nric = mysqli_real_escape_string($conn,$_POST['nric']);
	$email= mysqli_real_escape_string($conn,$_POST['email']);
	$accesscode= mysqli_real_escape_string($conn,$_POST['accesscode']);
	
	$check = "SELECT * FROM student WHERE student_username = '$username'";
	$check2 = "SELECT * FROM student WHERE student_email = '$email'";
	$check3 = "SELECT * FROM student WHERE student_fullname = '$fullname'";
	$check4 = "SELECT * FROM student WHERE student_ic = $nric";
	$check5 = "SELECT * FROM classroom WHERE access_code = '$accesscode'";
	
	
	$result = mysqli_query($conn, $check);
	$result2 = mysqli_query($conn, $check2);
	$result3 = mysqli_query($conn, $check3);
	$result4 = mysqli_query($conn, $check4);
	$result5 = mysqli_query($conn, $check5);
	
	if($rows = mysqli_fetch_array($result5))
	{
		$a = $rows['number_of_students'];
		$c = $rows['classroom_id'];
		
		$sqll = "SELECT COUNT(classroom_id) AS 'TOTAL STUDENT' FROM student WHERE classroom_id = '$c'";
		
		$queryy = mysqli_query($conn,$sqll);
		
		if($rowss = mysqli_fetch_array($queryy))
		{
			$b = $rowss['TOTAL STUDENT'];
			
			if($a > $b)
			{
				if(mysqli_num_rows($result) > 0)
				{
					echo "<script>alert('Username Exist');</script>";
					die("<script>window.history.go(-1);</script>");
				}
				elseif(mysqli_num_rows($result2) > 0)
				{
					echo "<script>alert('Email Exist');</script>";
					die("<script>window.history.go(-1);</script>");
				}
				elseif(mysqli_num_rows($result3) > 0)
				{
					echo "<script>alert('Student Fullname Exist');</script>";
					die("<script>window.history.go(-1);</script>");
				}
				elseif(mysqli_num_rows($result4) > 0)
				{
					echo "<script>alert('Student NRIC Exist');</script>";
					die("<script>window.history.go(-1);</script>");
				}else
				{
					//write the insert sql query
					$sql="Insert into student (student_fullname, student_ic, student_email, student_username, student_password, classroom_id) VALUES ('$fullname', '$nric', '$email', '$username', '".md5($password)."', '$c')";
				
					mysqli_query($conn,$sql);
				
					if(mysqli_affected_rows($conn)<=0)
					{
						echo "<script>alert('Unable to register!');</script>";
						die ("<script>window.history.go(-1);</script>");
					}else
					{
						echo "<script>alert('Register Successfully!');</script>";
						echo "<script>window.location.href='index.php';</script>";
					}
				}
			}else
			{
				echo "<script>alert('Classroom Full');</script>";
				die("<script>window.history.go(-1);</script>");
			}
			
		}
	
	}
	
?>