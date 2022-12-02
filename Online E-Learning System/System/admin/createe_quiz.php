<?php
	session_start();
	
	$t_id = $_SESSION['t_id'];
	
	include "../conn.php";
	
	$question = mysqli_real_escape_string($conn,$_POST['question']);
	$chap = mysqli_real_escape_string($conn,$_POST['a']);
	$sel_a = mysqli_real_escape_string($conn,$_POST['sel_a']);
	$sel_b = mysqli_real_escape_string($conn,$_POST['sel_b']);
	$sel_c = mysqli_real_escape_string($conn,$_POST['sel_c']);
	$sel_d = mysqli_real_escape_string($conn,$_POST['sel_d']);
	$true = mysqli_real_escape_string($conn,$_POST['true']);
	
	$sql = "SELECT * FROM chapter WHERE chapter = '$chap' AND teacher_id = '$t_id'";
	
	$query = mysqli_query($conn, $sql);
	
	if($rows = mysqli_fetch_array($query))
	{
		$chap_id = $rows['chap_id'];
		
		$sql_insert_questions="Insert into quiz_question (chap_id, questions) VALUES ('$chap_id','$question')";
		
		mysqli_query($conn,$sql_insert_questions);
		
		if(mysqli_affected_rows($conn)<=0)
		{
			echo "<script>alert('Unable to Add Questons!');</script>";
			die ("<script>window.history.go(-1);</script>");
		}else
		{
			$sql_search_question = "SELECT * FROM chapter INNER JOIN quiz_question ON chapter.chap_id = quiz_question.chap_id WHERE quiz_question.questions = '$question' AND chapter.teacher_id = '$t_id' GROUP BY quiz_question.question_id";
			
			$query_search_question = mysqli_query($conn, $sql_search_question);
			
			if($rows = mysqli_fetch_array($query_search_question))
			
			{
				$question_id = $rows['question_id'];
			
				if($true == '1')
				{
					$sql_insert_selections="Insert into quiz_selection (question_id, answer_description, true_answer) VALUES ('$question_id', '$sel_a','True')";
					
					mysqli_query($conn,$sql_insert_selections);
		
					if(mysqli_affected_rows($conn)<=0)
					{
						echo "<script>alert('Unable to Add Selection A!');</script>";
						die ("<script>window.history.go(-1);</script>");
					}else
					{
						$sql_insert_selectionss="Insert into quiz_selection (question_id, answer_description, true_answer) VALUES ('$question_id', '$sel_b','False')";
						
						mysqli_query($conn,$sql_insert_selectionss);
			
						if(mysqli_affected_rows($conn)<=0)
						{
							echo "<script>alert('Unable to Add Selection B!');</script>";
							die ("<script>window.history.go(-1);</script>");
						}else
						{
							$sql_insert_selectionsss="Insert into quiz_selection (question_id, answer_description, true_answer) VALUES ('$question_id', '$sel_c','False')";
							
							mysqli_query($conn,$sql_insert_selectionsss);
				
							if(mysqli_affected_rows($conn)<=0)
							{
								echo "<script>alert('Unable to Add Selection C!');</script>";
								die ("<script>window.history.go(-1);</script>");
							}else
							{
								$sql_insert_selectionssss="Insert into quiz_selection (question_id, answer_description, true_answer) VALUES ('$question_id', '$sel_d','False')";
								
								mysqli_query($conn,$sql_insert_selectionssss);
					
								if(mysqli_affected_rows($conn)<=0)
								{
									echo "<script>alert('Unable to Add Selection D!');</script>";
									die ("<script>window.history.go(-1);</script>");
								}else
								{
									echo "<script>alert('Add Selections and Questions Successsfully!');</script>";
									die ("<script>window.location.href='create_quiz.php'</script>");
								}
							}
						}
					}
				}elseif($true == '2')
				{
					$sql_insert_selections="Insert into quiz_selection (question_id, answer_description, true_answer) VALUES ('$question_id', '$sel_a','False')";
					
					mysqli_query($conn,$sql_insert_selections);
		
					if(mysqli_affected_rows($conn)<=0)
					{
						echo "<script>alert('Unable to Add Selection B!');</script>";
						die ("<script>window.history.go(-1);</script>");
					}else
					{
						$sql_insert_selectionss="Insert into quiz_selection (question_id, answer_description, true_answer) VALUES ('$question_id', '$sel_b','True')";
						
						mysqli_query($conn,$sql_insert_selectionss);
			
						if(mysqli_affected_rows($conn)<=0)
						{
							echo "<script>alert('Unable to Add Selection A!');</script>";
							die ("<script>window.history.go(-1);</script>");
						}else
						{
							$sql_insert_selectionsss="Insert into quiz_selection (question_id, answer_description, true_answer) VALUES ('$question_id', '$sel_c','False')";
							
							mysqli_query($conn,$sql_insert_selectionsss);
				
							if(mysqli_affected_rows($conn)<=0)
							{
								echo "<script>alert('Unable to Add Selection C!');</script>";
								die ("<script>window.history.go(-1);</script>");
							}else
							{
								$sql_insert_selectionssss="Insert into quiz_selection (question_id, answer_description, true_answer) VALUES ('$question_id', '$sel_d','False')";
								
								mysqli_query($conn,$sql_insert_selectionssss);
					
								if(mysqli_affected_rows($conn)<=0)
								{
									echo "<script>alert('Unable to Add Selection D!');</script>";
									die ("<script>window.history.go(-1);</script>");
								}else
								{
									echo "<script>alert('Add Selections and Questions Successsfully!');</script>";
									die ("<script>window.location.href='create_quiz.php'</script>");
								}
							}
						}
					}

				}elseif($true == '3')
				{
					$sql_insert_selections="Insert into quiz_selection (question_id, answer_description, true_answer) VALUES ('$question_id', '$sel_a','False')";
					
					mysqli_query($conn,$sql_insert_selections);
		
					if(mysqli_affected_rows($conn)<=0)
					{
						echo "<script>alert('Unable to Add Selection C!');</script>";
						die ("<script>window.history.go(-1);</script>");
					}else
					{
						$sql_insert_selectionss="Insert into quiz_selection (question_id, answer_description, true_answer) VALUES ('$question_id', '$sel_b','False')";
						
						mysqli_query($conn,$sql_insert_selectionss);
			
						if(mysqli_affected_rows($conn)<=0)
						{
							echo "<script>alert('Unable to Add Selection B!');</script>";
							die ("<script>window.history.go(-1);</script>");
						}else
						{
							$sql_insert_selectionsss="Insert into quiz_selection (question_id, answer_description, true_answer) VALUES ('$question_id', '$sel_c','True')";
							
							mysqli_query($conn,$sql_insert_selectionsss);
				
							if(mysqli_affected_rows($conn)<=0)
							{
								echo "<script>alert('Unable to Add Selection A!');</script>";
								die ("<script>window.history.go(-1);</script>");
							}else
							{
								$sql_insert_selectionssss="Insert into quiz_selection (question_id, answer_description, true_answer) VALUES ('$question_id', '$sel_d','False')";
								
								mysqli_query($conn,$sql_insert_selectionssss);
					
								if(mysqli_affected_rows($conn)<=0)
								{
									echo "<script>alert('Unable to Add Selection D!');</script>";
									die ("<script>window.history.go(-1);</script>");
								}else
								{
									echo "<script>alert('Add Selections and Questions Successsfully!');</script>";
									die ("<script>window.location.href='create_quiz.php'</script>");
								}
							}
						}
					}

				}elseif($true == '4')
				{
					$sql_insert_selections="Insert into quiz_selection (question_id, answer_description, true_answer) VALUES ('$question_id', '$sel_a','False')";
					
					mysqli_query($conn,$sql_insert_selections);
		
					if(mysqli_affected_rows($conn)<=0)
					{
						echo "<script>alert('Unable to Add Selection D!');</script>";
						die ("<script>window.history.go(-1);</script>");
					}else
					{
						$sql_insert_selectionss="Insert into quiz_selection (question_id, answer_description, true_answer) VALUES ('$question_id', '$sel_b','False')";
						
						mysqli_query($conn,$sql_insert_selectionss);
			
						if(mysqli_affected_rows($conn)<=0)
						{
							echo "<script>alert('Unable to Add Selection B!');</script>";
							die ("<script>window.history.go(-1);</script>");
						}else
						{
							$sql_insert_selectionsss="Insert into quiz_selection (question_id, answer_description, true_answer) VALUES ('$question_id', '$sel_c','False')";
							
							mysqli_query($conn,$sql_insert_selectionsss);
				
							if(mysqli_affected_rows($conn)<=0)
							{
								echo "<script>alert('Unable to Add Selection C!');</script>";
								die ("<script>window.history.go(-1);</script>");
							}else
							{
								$sql_insert_selectionssss="Insert into quiz_selection (question_id, answer_description, true_answer) VALUES ('$question_id', '$sel_d','True')";
								
								mysqli_query($conn,$sql_insert_selectionssss);
					
								if(mysqli_affected_rows($conn)<=0)
								{
									echo "<script>alert('Unable to Add Selection A!');</script>";
									die ("<script>window.history.go(-1);</script>");
								}else
								{
									echo "<script>alert('Add Selections and Questions Successsfully!');</script>";
									die ("<script>window.location.href='create_quiz.php'</script>");
								}
							}
						}
					}

				}
				
			}else
			{
				echo "<script>alert('Cannot Insert Question!');</script>";
				die ("<script>window.location.href='create_quiz.php'</script>");

			}

		}				
	}

?>