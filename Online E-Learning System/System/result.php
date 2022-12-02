<!--
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
-->

<!DOCTYPE html>
<html>

<?php
	session_start();
?>

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <title>Bootstrap Admin Template </title>
    <link rel="shortcut icon" href="admin/img/favicon.ico">
    
    <!-- global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
    <link rel="stylesheet" href="admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/css/font-icon-style.css">
    <link rel="stylesheet" href="admin/css/style.default.css" id="theme-stylesheet">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="admin/css/apps/invoice.css"> 
</head>

<body> 
 

<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch" style="background: rgba(176, 237, 251, 0.96);">
        <div class="container-fluid content-inner " style="margin: 100px auto;">

            <!--***** CONTENT *****-->     
                <div class="row">
                    <div class="col-md-12">
                        <div class="invoice-title ">
                            <div><img src="admin/img/logo.png" alt=""> <p class="pull-right mt-3">Student ID: <?php echo $_SESSION['s_id'] ?></p></div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            
                            
                            <?php
                            	include "conn.php";
                            	
                            	$s_id = $_SESSION['s_id'];
                            	
                            	$sql = "SELECT * FROM student INNER JOIN classroom ON student.classroom_id = classroom.classroom_id WHERE student.student_id = '$s_id'";
                            	
                            	$query = mysqli_query($conn, $sql);
                            	
                            	if($rows = mysqli_fetch_array($query))
                            	{
                            
                            
                            ?>
                            
                            
                                <address>
                                <strong>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $rows['student_fullname'] ?></strong><br>
                                <strong>Form&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 5</strong><br>
                                <strong>Subject &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: History</strong><br>
                                <strong>Classroom : <?php echo $rows['classroom_name'] ?></strong><br>
                                </address>
                                
                                <?php
                                	}
                                ?>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Quiz's Grades</strong></h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table borderless">
                                        <thead>
                                            <tr class="bg-info text-white">
                                                <td><strong>Chapter</strong></td>
                                                <td class="text-center"><strong>Chapter Name</strong></td>
                                                <td class="text-center"><strong>Marks</strong></td>
                                                <td class="text-right"><strong>Grades</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        
                                        
                                        <?php
                                        	include "conn.php";
                                        	
                                        	$s_id = $_SESSION['s_id'];
                                        	
                                        	$sql = "SELECT * FROM student_answer INNER JOIN quiz_selection ON student_answer.selection_id = quiz_selection.selection_id INNER JOIN quiz_question ON quiz_selection.question_id = quiz_question.question_id INNER JOIN chapter ON quiz_question.chap_id = chapter.chap_id WHERE student_answer.student_id = '$s_id' GROUP BY chapter.chap_id";
                                        	
                                        	$query = mysqli_query($conn, $sql);
                                        	
                                        	while($rows = mysqli_fetch_array($query))
                                        	{
                                        		$chap_id = $rows['chap_id'];
                                        
                                        
                                        ?>
                                        

 
                                            <tr>
                                                <td><?php echo $rows['chapter'] ?></td>
                                                <td class="text-center" style="text-transform:uppercase"><?php echo $rows['chap_name'] ?></td>
                                                
                                                
                                                <?php
                                                	
                                                	$sql_true = "SELECT COUNT(quiz_selection.true_answer) AS 'a' FROM student_answer INNER JOIN quiz_selection ON student_answer.selection_id = quiz_selection.selection_id INNER JOIN quiz_question ON quiz_selection.question_id = quiz_question.question_id INNER JOIN chapter ON quiz_question.chap_id = chapter.chap_id WHERE student_answer.student_id = '$s_id' AND quiz_selection.true_answer = 'True' AND chapter.chap_id = '$chap_id'";
                                                	
                                                	$query_true = mysqli_query($conn, $sql_true);
                                                	
                                                	while($rows_true = mysqli_fetch_array($query_true))
                                                	{
                                                		$correct_answer = $rows_true['a'];
                                                		
                                                		$sql_total_questions = "SELECT COUNT(quiz_question.question_id) AS 'b' FROM chapter INNER JOIN quiz_question ON chapter.chap_id = quiz_question.chap_id WHERE quiz_question.chap_id = '$chap_id'";
                                                		
                                                		$query_total_questions = mysqli_query($conn, $sql_total_questions);
                                                		
                                                		while($rows_total_questions = mysqli_fetch_array($query_total_questions))
                                                		{
                                                			$total_questions = $rows_total_questions['b'];
                                                			
                                                			$c = ($correct_answer / $total_questions) * 100;
                                                			
                                                			if((80<=$c) && ($c<=100))
                                                			{
                                                				$cc = 'A';
                                                			}elseif((60<=$c) && ($c<=79))
                                                			{
                                                				$cc = 'B';
                                                			}elseif((40<=$c) && ($c<=59))
                                                			{
                                                				$cc = 'C';
                                                			}elseif((20<=$c) && ($c<=39))
                                                			{
                                                				$cc = 'D';
                                                			}elseif((0<=$c) && ($c<=19))
                                                			{
                                                				$cc = 'E (Fail)';
                                                			}
                                                ?>
                                                
                                                
                                                
                                                <td class="text-center"><?php echo number_format((float)$c,1, '.', '') ?>%</td>
                                                <td class="text-right"><?php echo $cc ?></td>
                                                
                                                <?php
                                                		}
                                                	}
                                                ?>
                                            </tr>
                                            
                                            <?php
                                            	}
                                            ?>
                                            
                                            
                                            <tr>
                                                <td class="thick-line"></td>
                                                <td class="thick-line"></td>
                                                <td class="thick-line text-center"></td>
                                                <td class="thick-line text-right"></td>
                                            </tr>
                                        </tbody> 
                                    </table>
                                    <div class="text-right">
                                        <button class="btn btn-general btn-blue mr-3" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print</button>
                                        <button class="btn btn-general btn-white" onclick="window.location.href='index.php'">Back to Mainpage</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div> 

    <!--Global Javascript -->
    <script src="admin/js/jquery.min.js"></script>
    <script src="admin/js/popper/popper.min.js"></script>
    <script src="admin/js/tether.min.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/jquery.cookie.js"></script>
    <script src="admin/js/jquery.validate.min.js"></script> 
    <script src="admin/js/chart.min.js"></script> 
    <script src="admin/js/front.js"></script> 
     
</body>

</html>