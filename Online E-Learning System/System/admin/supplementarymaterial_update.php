<?php
	
	session_start();
	
	//step 1: connection
	include "../conn.php";
	
	//step 2: retrieve all data frim edit.php page
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$t_id = $_SESSION['t_id'];
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$material = mysqli_real_escape_string($conn,$_POST['material']);
	$chap = mysqli_real_escape_string($conn,$_POST['chap']);	
	
	$sql_chap_id = "SELECT * FROM chapter WHERE chapter = '$chap' AND teacher_id = '$t_id'";
	
	$query_chap_id = mysqli_query($conn, $sql_chap_id);
	
	
	if($rows_chap_id = mysqli_fetch_array($query_chap_id))
	{
		$chap_id = $rows_chap_id['chap_id'];
		
		$sql_supp_no = "SELECT * FROM supplementary_material_type WHERE supp_type = '$material'";
		
		$query_supp_no = mysqli_query($conn, $sql_supp_no);
		
		if($rows_supp_no = mysqli_fetch_array($query_supp_no))
		
		{
			$supp_no = $rows_supp_no['supp_no'];
			
			include "supplementarymaterial_upload.php";
				
			//step 3: sql
			$sql = "Update supplementary_material SET supp_no = '$supp_no', chap_id = '$chap_id', supp_name = '$name', supp_path = '$destination' WHERE supp_id = $id";
				
			//step 4: run the query
			mysqli_query($conn, $sql);
				
			//step 5: check the query got any error or not
			if(mysqli_affected_rows($conn) <= 0)
			{
				echo"<script>alert('No data updated in DB');</script>";
				die("<script>window.history.go(-1)</script>");
			}
				
			echo"<script>alert('Data updated in DB');</script>";
			die("<script>window.location.href='supplementarymaterial.php'</script>");
		}
	}
		
	?>