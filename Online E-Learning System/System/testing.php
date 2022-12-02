
<!--
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
-->

<!DOCTYPE html>
<html lang="en">

<?php
	session_start();
?>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Bootstrap Responsive Template</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Global Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate/animate.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Core Stylesheets -->
    <link rel="stylesheet" href="css/services.css"> 
    
    <style>
    .btn-outline-primary:focus{
    background-color:#8df4e5;
    color: #fff
    }
    
    .btn-outline-primaryyyy{
    background-color:#8df4e5;
    color: #fff
    }
    
    .btn-outline-primaryy{
    background-color:#9cf48c;
    color: #fff
    }

	.btn-outline-primaryyy{
    background-color:#ed6363;
    color: #fff
    }
    
    </style>
        
  </head>

  <body id="page-top">

<!--====================================================
                         HEADER
======================================================--> 

    <header>

      <!-- Top Navbar  -->
      <div class="top-menubar">
        <div class="topmenu">
          <div class="container">
            <div class="row">
              <div class="col-md-7">
                <ul class="list-inline top-contacts">
                  <li>
                    <i class="fa fa-envelope"></i> Email: <a href="mailto:info@themeborn.com"><b>info@themeborn.com</b></a>
                  </li>
                  <li>
                    <i class="fa fa-phone"></i> Hotline: <b>(+1) 111 222 33</b>
                  </li>
                </ul>
              </div> 
              <div class="col-md-5">
                <ul class="list-inline top-data">
                  <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                  <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                  <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> 
                  <li><a href="#" class="log-top" data-toggle="modal" data-target="#login-modal">Login</a></li>  
                </ul>
              </div>
            </div>
          </div>
        </div> 
      </div>  
      
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light" id="mainNav" data-toggle="affix">
        <div class="container">
          <a class="navbar-brand smooth-scroll" href="index.php">
            <img src="img/logo-s.png" alt="logo">
          </a> 
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span>
          </button>  
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" >
				<a class="nav-link smooth-scroll" href="index.php">Home</a></li>
                <li class="nav-item dropdown" >
                  <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a> 
                  <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="about.html">About Us</a>
                    <a class="dropdown-item" href="team.php">Teacher Team</a>
                    <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                    <a class="dropdown-item" href="comming-soon.html">VR Features (Coming Soon)</a> 
                  </div>
                </li>
                <li class="nav-item" ><a class="nav-link smooth-scroll" href="news-list.php">Events & Activities</a></li>
                <li class="nav-item" ><a class="nav-link smooth-scroll" href="material.php">Materials</a></li>  
                <li class="nav-item dropdown" >
                  <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quiz</a> 
                  <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink"> 
                    <a class="dropdown-item"  target="_empty" href="quiz.php">Attend Quiz</a> 
                    <a class="dropdown-item"  target="_empty" href="#">View Quiz Result</a>  
                  </div>
                </li>
                <li class="nav-item dropdown" >
                  <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chia Chin Pang</a> 
                  <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink"> 
                    <a class="dropdown-item"  target="_empty" href="admin/tables.html">Manage Personal Information</a> 
                    <a class="dropdown-item"  target="_empty" href="admin/invoice.html">Change Password</a> 
                  </div>
                </li>
                <li>
                  <i class="search fa fa-search search-btn"></i>
                  <div class="search-open">
                    <div class="input-group animated fadeInUp">
                      <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2">
                      <span class="input-group-addon" id="basic-addon2">Go</span>
                    </div>
                  </div>
                </li> 
                <li>
                  <div class="top-menubar-nav">
                    <div class="topmenu ">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-9">
                            <ul class="list-inline top-contacts">
                              <li>
                                <i class="fa fa-envelope"></i> Email: <a href="mailto:info@htmlstream.com">info@htmlstream.com</a>
                              </li>
                              <li>
                                <i class="fa fa-phone"></i> Hotline: (1) 396 4587 99
                              </li>
                            </ul>
                          </div> 
                          <div class="col-md-3">
                            <ul class="list-inline top-data">
                              <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                              <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                              <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> 
                              <li><a href="#" class="log-top" data-toggle="modal" data-target="#login-modal">Login</a></li>  
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div> 
                  </div>
                </li>
            </ul>  
          </div>
        </div>
      </nav>
    </header>  
<!--====================================================
                      BUSINESS-GROWTH-P1
======================================================-->
    <section id="business-growth-p1" class="business-growth-p1 bg-gray">
      <div class="container">
        <div class="row title-bar">
          <div class="col-md-12">
            <h1 class="wow fadeInUp">We committed to helping</h1>
            <div class="heading-border"></div>
            <?php
            	include "conn.php";
            	
            	$id = $_GET['id'];
			
				$sql = "SELECT * FROM quiz_question WHERE question_id = '$id'";
		
				$query = mysqli_query($conn, $sql);
				
				if($rows = mysqli_fetch_array($query))
				{

            ?>
            <p class="wow fadeInUp" data-wow-delay="0.4s" style="font-size: xx-large"><?php echo $rows['questions'] ?></p>
            <?php
            	}
            ?>
          </div>
        </div>
        <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <?php
        
        	$id = $_GET['id'];
        	
			include "conn.php";
			
			$sql = "SELECT *, COUNT(quiz_selection.question_id) FROM quiz_question INNER JOIN quiz_selection ON quiz_question.question_id = quiz_selection.question_id WHERE quiz_question.question_id = '$id' GROUP BY quiz_selection.selection_id";
		
			$query = mysqli_query($conn, $sql);
			
			global $i;
			$i = 1;
			
			while($rows = mysqli_fetch_array($query))
			{
				$sel_id = $rows['selection_id'];
				$true_answer = $rows['true_answer'];
				
				
			?>
				<div class="col-md-3 col-sm-6 service-padding">
              	<div class="service-item" >
              	
              	<?php
              		if(isset($_GET['id']))
              		{
              			$id = $_GET['id'];
              			
              			$s_id = $_SESSION['s_id'];
              			
              			include "conn.php";
              				
              			if($true_answer == 'True')
              			{
              				$sql_stu = "SELECT * FROM quiz_selection INNER JOIN student_answer ON quiz_selection.selection_id = student_answer.selection_id WHERE student_answer.student_id = '$s_id' AND question_id = '$id'";
              				
              				$query_stu = mysqli_query($conn, $sql_stu);
              				
              				if(mysqli_num_rows($query_stu) <= 0)
              				{
              					echo "<button type='button' class='btn btn-outline-primary' style='font-size: xx-large;margin-bottom:5%;width:70px;height: 70px; cursor:pointer; border-radius: 100%; color: black; font-family:Copperplate Gothic Bold' onclick=\"window.location.href='tutorial_questions_insert.php?id=".$rows['selection_id']."'\">";
              				}
              				else
              				{
	              				while($rows_stu = mysqli_fetch_array($query_stu))
	              				{
	              					$bc = $rows_stu['true_answer'];
	              					
	              					if($bc == 'True')
	              					{
	              						echo "<button type='button' class='btn btn-outline-primaryy' style='font-size: xx-large;margin-bottom:5%;width:70px;height: 70px; cursor:pointer; border-radius: 100%; color: black; font-family:Copperplate Gothic Bold'>";
	              					}
	              					else
	              					{
	              						echo "<button type='button' class='btn btn-outline-primaryyy' style='font-size: xx-large;margin-bottom:5%;width:70px;height: 70px; cursor:pointer; border-radius: 100%; color: black; font-family:Copperplate Gothic Bold'>";
	              					}
	              				}
              				}
              			}
              			elseif($true_answer == 'False')
              			{

              				$sql_stu = "SELECT * FROM quiz_selection INNER JOIN student_answer ON quiz_selection.selection_id = student_answer.selection_id WHERE student_answer.student_id = '$s_id' AND question_id = '$id'";
              				
              				$query_stu = mysqli_query($conn, $sql_stu);
              				
              				if(mysqli_num_rows($query_stu) <= 0)
              				{
              					echo "<button type='button' class='btn btn-outline-primary' style='font-size: xx-large;margin-bottom:5%;width:70px;height: 70px; cursor:pointer; border-radius: 100%; color: black; font-family:Copperplate Gothic Bold' onclick=\"window.location.href='tutorial_questions_insert.php?id=".$rows['selection_id']."'\">";
              				}
              				else
              				{
	              				while($rows_stu = mysqli_fetch_array($query_stu))
	              				{
	              					$bc = $rows_stu['true_answer'];
	              					$bd = $rows_stu['selection_id'];
	              					
	              					if($bc == 'False')
	              					{
	              						if($sel_id == $bd)
	              						{
	              						echo "<button type='button' class='btn btn-outline-primaryyyy' style='font-size: xx-large;margin-bottom:5%;width:70px;height: 70px; cursor:pointer; border-radius: 100%; color: black; font-family:Copperplate Gothic Bold'>";
	              						}
	              						else
	              						{
	              						echo "<button type='button' class='btn btn-outline-primary' style='font-size: xx-large;margin-bottom:5%;width:70px;height: 70px; cursor:pointer; border-radius: 100%; color: black; font-family:Copperplate Gothic Bold' disabled>";
	              						}
	              					}
	              					else
	              					{
	              						echo "<button type='button' class='btn btn-outline-primary' style='font-size: xx-large;margin-bottom:5%;width:70px;height: 70px; cursor:pointer; border-radius: 100%; color: black; font-family:Copperplate Gothic Bold' disabled>";
	              					}
	              				}
              				}
              			}
              		}
              	?>
                  
                  <?php
                  
                  	if($i == 1)
					{
						echo "A";
						$i += 1;
					}
					elseif($i == 2)
					{
						echo "B";
						$i += 1;
					}
					elseif($i == 3)
					{
						echo "C";
						$i += 1;
					}
					elseif($i == 4)
					{
						echo "D";
						$i += 1;
					}

                  ?>
                  
                  
                  </button>
                  <div class="service-item-title">
                      <h3><?php echo $rows['answer_description'] ?></h3>
                  </div>
              </div>
          </div>
			<?php
				}
			?>
			
			<div style="margin-top:8%;">
			<a href="#" class="btn btn-green" title="Back" role="button">
            	<i class="fa fa-angle-left"></i>
        	</a>
        	<a href="#" class="btn btn-green" title="Back" role="button">
            	<i class="fa">1</i>
        	</a>

			<a href="#" class="btn btn-green" title="Back" role="button">
            	<i class="fa">2</i>
        	</a>

			<a href="#" class="btn btn-green" title="Back" role="button">
            	<i class="fa">3</i>
        	</a>
			<a href="#" class="btn btn-green" title="Back" role="button">
            	<i class="fa">4</i>
        	</a>

     		<a href="#" class="btn btn-green" title="Next" role="button">
            	<i class="fa fa-angle-right"></i>
        	</a>
        	</div>
        </div>
      </div>  
    </section>         

<!--====================================================
                      FOOTER
======================================================--> 
    <footer> 
        <div id="footer-s1" class="footer-s1">
          <div class="footer">
            <div class="container">
              <div class="row">
                <!-- About Us -->
                <div class="col-md-3 col-sm-6 ">
                  <div><img src="img/logo-w.png" alt="" class="img-fluid"></div>
                  <ul class="list-unstyled comp-desc-f">
                     <li><p>Businessbox is a corporate business theme. You can customize what ever you think to make your website much better from your great ideas. </p></li> 
                  </ul><br> 
                </div>
                <!-- End About Us -->

                <!-- Recent News -->
                <div class="col-md-3 col-sm-6 ">
                  <div class="heading-footer"><h2>Useful Links</h2></div>
                  <ul class="list-unstyled link-list">
                    <li><a href="about.html">About us</a><i class="fa fa-angle-right"></i></li> 
                    <li><a href="project.html">Project</a><i class="fa fa-angle-right"></i></li> 
                    <li><a href="careers.html">Career</a><i class="fa fa-angle-right"></i></li> 
                    <li><a href="faq.html">FAQ</a><i class="fa fa-angle-right"></i></li> 
                    <li><a href="contact.html">Contact us</a><i class="fa fa-angle-right"></i></li> 
                  </ul>
                </div>
                <!-- End Recent list -->

                <!-- Recent Blog Entries -->
                <div class="col-md-3 col-sm-6 ">
                  <div class="heading-footer"><h2>Recent Post Entries</h2></div>
                  <ul class="list-unstyled thumb-list">
                    <li>
                      <div class="overflow-h">
                        <a href="#">Praesent ut consectetur diam.</a>
                        <small>02 OCT, 2017</small>
                      </div>
                    </li>
                    <li>
                      <div class="overflow-h">
                        <a href="#">Maecenas pharetra tellus et fringilla.</a>
                        <small>02 OCT, 2017</small>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- End Recent Blog Entries -->

                <!-- Latest Tweets -->
                <div class="col-md-3 col-sm-6">
                  <div class="heading-footer"><h2>Get In Touch</h2></div>
                  <address class="address-details-f">
                    25, Dist town Street, Logn <br>
                    California, US <br>
                    Phone: 800 123 3456 <br>
                    Fax: 800 123 3456 <br>
                    Email: <a href="mailto:info@Businessbox.com" class="">info@Businessbox.com</a>
                  </address>  
                  <ul class="list-inline social-icon-f top-data">
                    <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                    <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                    <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li> 
                  </ul>
                </div>
                <!-- End Latest Tweets -->
              </div>
            </div><!--/container -->
          </div> 
        </div>

        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="footer-copyrights">
                            <p>Copyrights &copy; 2017 All Rights Reserved by Businessbox. <a href="#">Privacy Policy</a> <a href="#">Terms of Services</a></p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </footer>

    <!--Global JavaScript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/wow/wow.min.js"></script>
    <script src="js/owl-carousel/owl.carousel.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery-easing/jquery.easing.min.js"></script> 
    
    <script src="js/custom.js"></script> 
  </body>

</html>