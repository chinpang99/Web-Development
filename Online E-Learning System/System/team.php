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
    <link rel="stylesheet" href="css/team.css"> 
    
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
                    <i class="fa fa-phone"></i> Hotline: <b>(1) 111 222 33</b>
                  </li>
                </ul>
              </div> 
              
              <?php 
              
              if(!isset($_SESSION['s_id']))
              {
              ?>
	              <div class="col-md-5">
	                <ul class="list-inline top-data">
	                  <li><a href="login.html" class="log-top">Login</a></li>  
	                  <li><a href="register.html" class="log-top">Register</a></li> 
	                </ul>
	              </div>
              
              <?php
              }else{
              ?>
              	<div class="col-md-5">
	                <ul class="list-inline top-data">
	                  <li><a href="logout.php" class="log-top">Log Out</a></li>   
	                </ul>
	            </div>
	            
	         <?php
	         }
	         ?>
	         
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
                
                
                <?php
                if(isset($_SESSION['s_id']))
                {
                
                ?>
                
                
                <li class="nav-item" ><a class="nav-link smooth-scroll" href="material.php">Materials</a></li>  
                <li class="nav-item dropdown" >
                  <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quiz</a> 
                  <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink"> 
                    <a class="dropdown-item"  target="_empty" href="quiz.php">Attend Quiz</a> 
                    <a class="dropdown-item"  target="_empty" href="result.php">View Quiz Result</a>  
                  </div>
                </li>
                
                <?php
                }
                ?>
                
                <?php
                
                if(isset($_SESSION['s_id']))
                {
                	$id = $_SESSION['s_id'];
                	
                	include "conn.php";
                	
                	$sql = "SELECT * FROM student WHERE student_id = '$id'";
                	
                	$query = mysqli_query($conn, $sql);
                	
                	if($rows = mysqli_fetch_array($query))
                	{
                ?>
	                <li class="nav-item dropdown" >
	                  <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $rows['student_fullname'] ?></a> 
	                  <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink"> 
	                    <a class="dropdown-item" href="personal_information.php">Manage Personal Information</a> 
	                    <a class="dropdown-item"  target="_empty" href="change_password.php">Change Password</a> 
	                  </div>
	                </li>
	                
                <?php
                	}
                }
                ?>
                
                
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
                      TEAM-P2 
======================================================-->
    <section id="comp-offer" class="team-p2">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6  desc-comp-offer">
            <h2>Team Member</h2>
            <div class="heading-border-light"></div> 
          </div>
        </div>  
        <div class="row">          
        <?php
	    	//step 1: connection
			include "conn.php";
				
			//step 2: create the sql query for viewing the data from table
			$sql = "SELECT * FROM teacher";
				
			//step 3: execute the query and stored the return value in $result
			$result = mysqli_query($conn, $sql); // the $conn is from the conn.php
				
			//step 4: check whether the query is working or not
			if(mysqli_num_rows($result) <= 0) 
			{
				die("<script>alert('No result from table booking');</script>");
			}
				
			//step 5: attach the result inside the table using <tr> or <td>
			while($rows = mysqli_fetch_array($result)) // maybe will have more than 1 data
			{
		  ?>
  
          <div class="col-md-4 col-sm-6 ">
            <div class="team-p2-cont wow fadeInUp" data-wow-delay="0.2s">
               <img src="admin/<?php echo $rows['teacher_photo'] ?>" class="img-fluid" alt="...">
               <?php
               echo "<h5>".$rows['teacher_fullname']."</h5>";
               ?>
               <h6>History Teacher</h6>
               <ul class="list-inline social-icon-f top-data">
                  <li><a href="mailto:<?php echo $rows['teacher_email']?>"><i class="fa top-social fa-envelope"></i></a></li>
                </ul>
              </div>
          </div>
          <?php
          	}
          ?>
        </div>
      </div>
    </section>

<!--====================================================
                       NEWS
======================================================-->
    <section id="comp-offer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-6  desc-comp-offer wow fadeInUp" data-wow-delay="0.2s">
            <h2>Latest News</h2>
            <div class="heading-border-light"></div> 
            <button class="btn btn-general btn-green" role="button" onclick="window.location.href='news-list.php'">See More</button>
          </div>
	
			<?php
          	include "conn.php";
          	
          	$sql = "SELECT *, LEFT (ann_content,150) AS 'ann_contentt' FROM announcement ORDER BY date_uploaded DESC LIMIT 3";
          	
          	$query = mysqli_query($conn,$sql);
          	
          	while($rows = mysqli_fetch_array($query))
          	{
          	
          	
          ?>
          
          
          
          <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.4s">
            <div class="desc-comp-offer-cont">
              
              <?php
              	echo "<div class='thumbnail-blogs' onclick=\"window.location.href='news-details.php?id=".$rows['ann_id']."'\">";
              
              ?>
                  <div class="caption">
                    <i class="fa fa-chain"></i>
                  </div>
                  <img src="img/news/news-1.jpg" class="img-fluid" alt="...">
              </div>
              <h3><?php echo $rows['ann_name'] ?></h3>
              <p class="desc"><?php echo $rows['ann_contentt'] ?></p>
              
              <?php
              
              	echo "<a href='news-details.php?id=".$rows['ann_id']."'><i class='fa fa-arrow-circle-o-right'></i> Learn More</a>";
              
              ?>
            </div>
          </div>
          
          
          <?php
          	}
          ?>
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
        <a href="#home-p" id="back-to-top" class="btn btn-sm btn-green btn-back-to-top smooth-scrolls hidden-sm hidden-xs" title="home" role="button">
            <i class="fa fa-angle-up"></i>
        </a>
    </footer>

    <!-- Global JavaScript -->
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
