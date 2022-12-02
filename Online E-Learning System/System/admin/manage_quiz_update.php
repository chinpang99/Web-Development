<?php
	//step 1: connection
	include "../conn.php";

	//step 2: retrieve all data frim edit.php page
	$ques_id = mysqli_real_escape_string($conn, $_POST['ques_id']);
	$question = mysqli_real_escape_string($conn, $_POST['question']);
	$chap_id = mysqli_real_escape_string($conn, $_POST['chap_id']);
	$sel_idd = mysqli_real_escape_string($conn, $_POST['sel_id']);
	$a = mysqli_real_escape_string($conn, $_POST['a']);
	$b = mysqli_real_escape_string($conn, $_POST['b']);
	$c = mysqli_real_escape_string($conn, $_POST['c']);
	$d = mysqli_real_escape_string($conn, $_POST['d']);
	
	$sql_update_questions = "Update quiz_question SET questions = '$question' WHERE question_id = '$ques_id'";
		
	//step 4: run the query
	mysqli_query($conn, $sql_update_questions);
		
		$sql_question = "SELECT *, COUNT(quiz_selection.selection_id) AS 'a' FROM chapter INNER JOIN quiz_question ON chapter.chap_id = quiz_question.chap_id INNER JOIN quiz_selection ON quiz_question.question_id = quiz_selection.question_id WHERE quiz_question.question_id = '$ques_id' GROUP BY quiz_selection.selection_id";
		
		$query_question = mysqli_query($conn, $sql_question);
		
		global $i;
		$i = 1;
		
		while($rows_question = mysqli_fetch_array($query_question))
		{
			$sel_id = $rows_question['selection_id'];
			
			if($i == '1')
			{		
				//step 3: sql
				$sql = "Update quiz_selection SET answer_description = '$a', true_answer = 'False' WHERE selection_id = '$sel_id'";
					
				//step 4: run the query
				mysqli_query($conn, $sql);
	
				if($sel_id == $sel_idd)
				{
					//step 3: sql
					$sql = "Update quiz_selection SET true_answer = 'True' WHERE selection_id = '$sel_idd'";
						
					//step 4: run the query
					mysqli_query($conn, $sql);
						
				}
	
				
			}elseif($i == '2')
			{		
				//step 3: sql
				$sql = "Update quiz_selection SET answer_description = '$b', true_answer = 'False' WHERE selection_id = '$sel_id'";
					
				//step 4: run the query
				mysqli_query($conn, $sql);
					
				if($sel_id == $sel_idd)
				{
					//step 3: sql
					$sql = "Update quiz_selection SET true_answer = 'True' WHERE selection_id = '$sel_idd'";
						
					//step 4: run the query
					mysqli_query($conn, $sql);
											
				}
	
				
			}elseif($i == '3')
			{		
				//step 3: sql
				$sql = "Update quiz_selection SET answer_description = '$c', true_answer = 'False' WHERE selection_id = '$sel_id'";
					
				//step 4: run the query
				mysqli_query($conn, $sql);
					
				if($sel_id == $sel_idd)
				{
					//step 3: sql
					$sql = "Update quiz_selection SET true_answer = 'True' WHERE selection_id = '$sel_idd'";
						
					//step 4: run the query
					mysqli_query($conn, $sql);

				}
	
				
			}elseif($i == '4')
			{
				//step 3: sql
				$sql = "Update quiz_selection SET answer_description = '$d', true_answer = 'False' WHERE selection_id = '$sel_id'";
					
				//step 4: run the query
				mysqli_query($conn, $sql);
					
				if($sel_id == $sel_idd)
				{
					//step 3: sql
					$sql = "Update quiz_selection SET true_answer = 'True' WHERE selection_id = '$sel_idd'";
						
					//step 4: run the query
					mysqli_query($conn, $sql);
	
				}
	
			}
	
			
			$i += 1;
			
			$sql_total = "SELECT *, COUNT(quiz_selection.selection_id) AS 'a' FROM chapter INNER JOIN quiz_question ON chapter.chap_id = quiz_question.chap_id INNER JOIN quiz_selection ON quiz_question.question_id = quiz_selection.question_id WHERE quiz_question.question_id = '$ques_id'";
			
			$query_total = mysqli_query($conn, $sql_total);
			
			if($rows_total = mysqli_fetch_array($query_total))
			{
				$total = $rows_total['a'];
				
				if($i >= $total)
				{				
					echo"<script>alert('Data Updated Successfully!');</script>";			
					die("<script>window.history.go(-1)</script>");		
					
				}
			}
		}

?>