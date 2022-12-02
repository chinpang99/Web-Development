<?php
	session_start();
	
	include "conn.php";

	$id = $_GET['id'];
	
	$stu_id = $_SESSION['s_id'];
	
	$sql="Insert into student_answer (selection_id, student_id) VALUES ('$id', '$stu_id')";
					
	mysqli_query($conn,$sql);
					
	if(mysqli_affected_rows($conn)<=0)
	{
		echo "<script>alert('Unable to add!');</script>";
		die ("<script>window.history.go(-1);</script>");
	}else
	{		
		$sql_answer = "SELECT * FROM student_answer INNER JOIN quiz_selection ON student_answer.selection_id = quiz_selection.selection_id INNER JOIN quiz_question ON quiz_selection.question_id = quiz_question.question_id WHERE student_answer.selection_id = '$id'";
	
		$query_answer = mysqli_query($conn, $sql_answer);
	
		if($rows = mysqli_fetch_array($query_answer))
		{
			//$question = $rows['question_id'];
			echo "<script>alert('Answer Successfully!');</script>";
			echo "<script>window.location.href='tutorial_questions.php?id=".$rows['question_id']."';</script>";
		}
	}

?>