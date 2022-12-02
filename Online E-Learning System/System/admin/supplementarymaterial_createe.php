<?php
	
	session_start();
	
	include "../conn.php";
	
	$chap = $_POST['chap'];
	
	$material = $_POST['material'];
	
	$name = $_POST['name'];
	
	$id = $_SESSION['t_id'];
		
	$sqll = "SELECT * FROM supplementary_material_type WHERE supp_type = '$material'";
	
	$result = mysqli_query($conn, $sqll);
	
	
	if($rows = mysqli_fetch_array($result))
	{
		$type = $rows['supp_no'];
		
		$sqlll = "SELECT * FROM chapter WHERE chapter = '$chap' AND teacher_id = '$id'";
		
		$query = mysqli_query($conn, $sqlll);
		
		
		if($rowss = mysqli_fetch_array($query))
		{
			$chap_id = $rowss['chap_id'];
		
			include "supplementarymaterial_upload.php";
				
			//write the insert sql query
			$sql="Insert into supplementary_material (supp_no, chap_id, supp_name, supp_path, teacher_id, date_uploaded) VALUES ('$type', '$chap_id', '$name', '$destination', '$id', NOW())";
			
			mysqli_query($conn,$sql);
			
			
			if(mysqli_affected_rows($conn)<=0)
			{
				echo "<script>alert('Material is Exist!!');</script>";
				die ("<script>window.history.go(-1);</script>");
			}
			else
			{
				echo "<script>alert('INSERT MATERIALS SUCCESSFULLY!');</script>";
				echo "<script>window.location.href='supplementarymaterial.php';</script>";
			}
		}
	}
	
?>