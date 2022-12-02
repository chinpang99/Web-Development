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
	
	if(!isset($_SESSION['t_id']))
	{
		echo "<script>alert('PLEASE LOG IN AS TEACHER TO PROCEED')</script>";
		die("<script>window.location.href='../login.html'</script>");
	}

?>

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <title>Bootstrap Admin Template </title>
    <link rel="shortcut icon" href="img/favicon.ico">
    
    <!-- global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-icon-style.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="css/pages/gallery.css">
</head>

<body> 

<!--====================================================
                         MAIN NAVBAR
======================================================-->        
    <header class="header">
        <nav class="navbar navbar-expand-lg ">
            <div class="search-box">
                <button class="dismiss"><i class="icon-close"></i></button>
                <form id="searchForm" action="search-result.html" role="search">
                    <input type="search" placeholder="Search Now" class="form-control">
                </form>
            </div>
            <div class="container-fluid ">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header">
                        <a href="index.php" class="navbar-brand">
                            <div class="brand-text brand-big hidden-lg-down"><img src="img/logo-white.png" alt="Logo" class="img-fluid"></div>
                            <div class="brand-text brand-small"><img src="img/logo-icon.png" alt="Logo" class="img-fluid"></div>
                        </a>
                        <a id="toggle-btn" href="#" class="menu-btn active">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <!-- Expand-->
                    <li class="nav-item d-flex align-items-center full_scr_exp"><a class="nav-link" href="#"><img src="img/expand.png" onclick="toggleFullScreen(document.body)" class="img-fluid" alt=""></a></li>
                    <!-- Search-->
                    <li class="nav-item d-flex align-items-center"><a id="search" class="nav-link" href="#"><i class="icon-search"></i></a></li>
                    
                    <!-- Nav Bar (Profile)-->
                    <li class="nav-item dropdown"><a id="profile" class="nav-link logout" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 
                                 
                                 
                                 <?php
                                    	include "../conn.php";
                                    	
                                    	$id = $_SESSION['t_id'];
                                    	
                                    	$sql = "SELECT * FROM teacher WHERE teacher_id = '$id'";
                                    	
                                    	$query = mysqli_query($conn, $sql);
                                    	
                                    	if($rows = mysqli_fetch_array($query))
                                    	{
                                    ?>

                    
                    
                    <img src="<?php echo $rows['teacher_photo'] ?>" alt="..." class="img-fluid rounded-circle" style="height: 30px; width: 30px;"></a>
                    
                    <?php
                    	}
                    ?>
                    
                        <ul aria-labelledby="profile" class="dropdown-menu profile">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                <?php
                                    	include "../conn.php";
                                    	
                                    	$id = $_SESSION['t_id'];
                                    	
                                    	$sql = "SELECT * FROM teacher WHERE teacher_id = '$id'";
                                    	
                                    	$query = mysqli_query($conn, $sql);
                                    	
                                    	if($rows = mysqli_fetch_array($query))
                                    	{
                                    ?>

                                    <div class="msg-profile"> <img src="<?php echo $rows['teacher_photo'] ?>" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5"><?php echo $rows['teacher_fullname'] ?></h3><span><?php echo $rows['teacher_email'] ?></span>
                                    
                                    
                                    <?php
                                    	}
                                    ?>
                                    
                                    
                                    </div>
                                </a>
                                <hr>
                            </li>
                            <li>
                                <a rel="nofollow" href="profile.php" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-user "></i>My Profile</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="profile.php" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-cog"></i>Setting</div>
                                    </div>
                                </a>
                                <hr>
                            </li>
                            <li>
                                <a rel="nofollow" href="logout.php" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-power-off"></i>Logout</div>
                                    </div>
                                </a> 
                            </li>
                        </ul>
                    </li>
                </ul> 
            </div>
        </nav>
    </header>

<!--====================================================
                        PAGE CONTENT
======================================================-->
    <div class="page-content d-flex align-items-stretch">

        <!--***** SIDE NAVBAR *****-->
        <nav class="side-navbar">
            <div class="sidebar-header d-flex align-items-center">
            
            <?php
            	include "../conn.php";
            	
            	$id = $_SESSION['t_id'];
            
            	$sql = "SELECT * FROM teacher WHERE teacher_id = '$id'";
            	
            	$query = mysqli_query($conn, $sql);
            	
            	if($rows = mysqli_fetch_array($query))
            	{
            ?>
            
            
            
                <div class="avatar"><img src="<?php echo $rows['teacher_photo'] ?>" alt="..." class="img-fluid rounded-circle"></div>
                
                
            <?php
            	}
            ?>
            
            
                <div class="title">
                
                
                <?php
                	include "../conn.php";
                	
                	$id = $_SESSION['t_id'];
                	
                	$sql = "SELECT * FROM teacher WHERE teacher_id = '$id'";
                	
                	$query = mysqli_query($conn, $sql);
                	
                	if($rows = mysqli_fetch_array($query))
                	{
                ?>
                
                
                
                    <h1 class="h4"><?php echo $rows['teacher_fullname'] ?></h1>
                 
                 
                 <?php
                 	}
                 ?>
                 
                 
                </div>
            </div>
            <hr>
            
            <!-- Sidebar Navidation Menus-->
            <ul class="list-unstyled">
                <li class="active"> <a href="index.php"><i class="icon-home"></i>Home</a></li>
                <li><a href="#materials" aria-expanded="false" data-toggle="collapse"> <i class="icon-list"></i>Materials </a>
                    <ul id="materials" class="collapse list-unstyled">
                    	<li><a href="create_chapter.php">Create Chapter</a></li> 
                        <li><a href="supplementarymaterial_create.php">Create Materials</a></li> 
                        <li><a href="supplementarymaterial.php">View Materials</a></li>  
                    </ul>
                </li>
                <li><a href="#quiz" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-question"></i>Quiz </a>
                    <ul id="quiz" class="collapse list-unstyled">
                        <li><a href="create_quiz.php">Create Quiz</a></li>   
                		<li> <a href="manage_quiz_search.php">Manage Quiz </a></li>
                    </ul>
                <li><a href="#announcement" aria-expanded="false" data-toggle="collapse"> <i class="icon-website"></i>Announcement </a>
                    <ul id="announcement" class="collapse list-unstyled">
                        <li><a href="announcement_create.php">Create Announcement</a></li>   
                		<li> <a href="announcement_view.php">Manage Announcement </a></li>
                    </ul>
                <li><a href="#students" aria-expanded="false" data-toggle="collapse"> <i class="icon-user"></i>Students </a>
                    <ul id="students" class="collapse list-unstyled">
                        <li><a href="student_list.php">Student's Information</a></li>   
                		<li> <a href="student_performance.php">Student's Performance </a></li>
                    </ul>
                 <li><a href="#classroom" aria-expanded="false" data-toggle="collapse"> <i class="icon-home"></i>Classroom </a>
                    <ul id="classroom" class="collapse list-unstyled">
                        <li><a href="classroom_create.php">Create Classroom</a></li> 
                        <li><a href="classroom_list.php">View Classroom</a></li>  
                    </ul>
                </li>
            
            
            <?php 
            
            	if(isset($_SESSION['t_id']))
            	{
           ?>
		            </ul><span class="heading">Extras</span>
		            <ul class="list-unstyled"> 
		                <li> <a href="logout.php"> <i class="fa fa-sign-out"></i>Log Out </a></li>
		            </ul>
		    <?php
		    	}
		    ?>
		    
		    
        </nav>

        <div class="content-inner chart-cont">

            <!--***** CONTENT *****-->
                <form method="post" action="">
                <div class="row">
                    <div class="col-md-12">
                        <br/>
                        
                        
                        <?php
                        	include "../conn.php";
                            
                            $id = $_SESSION['t_id'];
                  		
                  			$chap = $_POST['chap'];

                        	$sql = "SELECT *, COUNT(quiz_question.question_id) AS 'a' FROM quiz_question INNER JOIN chapter ON quiz_question.chap_id = chapter.chap_id INNER JOIN teacher ON chapter.teacher_id = teacher.teacher_id WHERE chapter.chapter = '$chap' AND teacher.teacher_id = '$id'";
                        	
                        	$query = mysqli_query($conn, $sql);
                        	
                        	if($rows = mysqli_fetch_array($query))
                        	{
                        	
                        	?>
                        	<label>Total Questions: <?php echo $rows['a'] ?></label>
                        	
                    <?php
                        	}
                        ?>
                    </div>
                </div><br/><br/>
     
            <div class="row">
                <table class="table table-hover">
                  <thead>
                    <tr class="bg-info text-white">
                      <th class="text-center">Student ID</th>
                      <th class="text-center">Student Name</th>
                      <th class="text-center">Total Correct</th>
                      <th class="text-center">Grade</th>
                    </tr>
                  </thead>
                                          <?php
                                        	include "../conn.php";
                                        	 
                                        	if(isset($_POST['search']))
                                        	{
                                        		$searchkey = $_POST['search'];
                                        	
	                                        	$id = $_SESSION['t_id'];
	                                        	
	                                        	$sql = "SELECT * FROM announcement INNER JOIN teacher ON announcement.teacher_id = teacher.teacher_id WHERE announcement.teacher_id = '$id' AND ann_content LIKE '%$searchkey%'";
	                                        	
	                                        	$query = mysqli_query($conn, $sql);
	                                        	
	                                        	while($rows = mysqli_fetch_array($query))
	                                        	{
	                                        	
	                                        	
	                                        
	                                        ?>
	                <tbody>                  	
                    <tr>
                      <td class="text-center"><?php echo $rows['ann_name'] ?></td>
                      <td class="text-center"><?php echo $rows['ann_content'] ?></td>
                      <td class="text-center"><?php echo $rows['teacher_fullname'] ?></td>
                      <td class="text-center"><?php echo $rows['date_uploaded'] ?>	</td>
                      
                      <?php
                      
                      	echo "<td class='text-center'><button type='button' class='btn btn-outline-success' style='width:100%; height:5%; margin-left: 25%;cursor:pointer' onclick=\"window.location.href='announcement_edit.php?id=".$rows['ann_id']."'\">Edit</button></td>";
                      
                      ?>
                      <td class="text-center"><button type='button' class='btn btn-outline-danger' style='width:90%; height:5%; margin-left: 25%;cursor:pointer'>Delete</button></td>
                    </tr>
                    
                    <?php
                    							}
                    						}else{
                    ?>


                  <tbody>
                  	<?php
                  		include "../conn.php";
                  		
                  		$id = $_SESSION['t_id'];
                  		
                  		$chap = $_POST['chap'];
                  		
                  		$classroom = $_POST['classroom'];
                  		                  		
                  		$sql = "SELECT *, COUNT(quiz_question.question_id) AS 'a' FROM quiz_question INNER JOIN chapter ON quiz_question.chap_id = chapter.chap_id INNER JOIN teacher ON chapter.teacher_id = teacher.teacher_id WHERE chapter.chapter = '$chap' AND teacher.teacher_id = '$id'";
                  		
                  		$query = mysqli_query($conn, $sql);
                  		
                  		if($rows = mysqli_fetch_array($query))
                  		{
                  			$chap_id = $rows['chap_id'];
                  			$total_questions = $rows['a'];
                  			             		                  		
	                  		$sql_student_id = "SELECT * FROM chapter INNER JOIN teacher ON chapter.teacher_id = teacher.teacher_id INNER JOIN classroom ON teacher.teacher_id = classroom.teacher_id INNER JOIN student ON classroom.classroom_id = student.classroom_id WHERE chapter.chap_id = '$chap_id' AND classroom.classroom_name = '$classroom'";
	                  		
	                  		$query_student_id = mysqli_query($conn, $sql_student_id);
	                  		
	                  		while($rows_student_id = mysqli_fetch_array($query_student_id))
	                  		{
	                  			$student_id = $rows_student_id['student_id'];
	                  			$student_fullname = $rows_student_id['student_fullname'];
	                  			
	                  			$sql_answered = "SELECT * FROM student_answer INNER JOIN quiz_selection ON student_answer.selection_id = quiz_selection.selection_id INNER JOIN quiz_question ON quiz_selection.question_id = quiz_question.question_id WHERE student_id = '$student_id' AND quiz_question.chap_id = '$chap_id'";
	                  			
	                  			$result_answered = mysqli_query($conn, $sql_answered);
	                  			
	                  			if(mysqli_num_rows($result_answered)>0)
								{
											                  			
		                  			$sql_true = "SELECT *, COUNT(quiz_selection.true_answer) AS 'b' FROM student INNER JOIN student_answer ON student.student_id = student_answer.student_id INNER JOIN quiz_selection ON student_answer.selection_id = quiz_selection.selection_id INNER JOIN quiz_question ON quiz_selection.question_id = quiz_question.question_id WHERE student.student_id = '$student_id' AND quiz_selection.true_answer = 'True' AND quiz_question.chap_id = '$chap_id'";
		                  		
			                  		$query_true = mysqli_query($conn, $sql_true);
			                  		
			                  		while($rows_true = mysqli_fetch_array($query_true))
			                  		{
			                  			$true_answer= $rows_true['b'];
			                  			
			                  			$c = ($true_answer / $total_questions) * 100;
			                  			
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
			                  		   <tr>
			                  		      <td class="text-center"><?php echo $student_id ?></td>
					                      <td class="text-center"><?php echo $student_fullname ?></td>
					                      <td class="text-center"><?php echo $true_answer .'/'. $total_questions ?></td>
					                      <td class="text-center"><?php echo $cc ?></td>
					                    </tr>

		                  		
		                  		
		                  		
		                  		<?php
		                  			
		                  		
		                  			}

								}else
								{
								?>
									   <tr>
			                  		      <td class="text-center"><?php echo $student_id ?></td>
					                      <td class="text-center"><?php echo $student_fullname ?></td>
					                      <td class="text-center">Havent Answer</td>
					                      <td class="text-center">Havent Answer</td>
					                    </tr>

								
								<?php
								}


	                  			
	                  		
	                  		}
                  			
                  		
                  		}
                  				
                  				
                  			
                  	
                  	?>
                  	                      

                    
                    <?php
                    	}
                    //}
                    ?>
                    
                    
                  </tbody>
                </table>
            </div> 
		</form>
        </div>
    </div> 

    <!--Global Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jquery.validate.min.js"></script> 
    <script src="js/chart.min.js"></script> 
    <script src="js/front.js"></script> 
    
</body>

</html>