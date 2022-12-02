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
	
	if(!isset($_SESSION['s_id']))
	{
		echo "<script>alert('PLEASE LOG IN FIRST TO PROCEED')</script>";
		die("<script>window.location.href='login.html'</script>");
	}
	elseif(!isset($_GET['id']))
	{
		echo "<script>alert('PLEASE CHOOSE THE CHAPTER THAT YOU WOULD LIKE TO VIEW')</script>";
		die("<script>window.location.href='material.php'</script>");
	}
	
	$s_id = $_SESSION['s_id'];
	
		
	include "conn.php";
	
	$sql_status = "SELECT * FROM student WHERE student_id = '$s_id '";
	
	$query_status = mysqli_query($conn, $sql_status);
	
	if($rows_status = mysqli_fetch_array($query_status))
	{
		$status = $rows_status['status'];
		
		if($status == 'Disable')
		{
			echo "<script>alert('YOUR ACCOUNT IS DISABLE! PLEASE FIND YOUR TEACHER')</script>";
			die("<script>window.location.href='404.html'</script>");
		}
	}
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
    <link rel="stylesheet" href="css/faq.css"> 
    <link rel="stylesheet" href="css/single-product.css">
    <link rel="stylesheet" href="css/news.css">
    
    <!--star rating-->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    
    <style>
    
	    div.stars {
		  width: 270px;
		  display: inline-block;
		}
		 
		input.star { display: none; }
		 
		label.star {
		  float: right;
		  padding: 10px;
		  font-size: 36px;
		  color: #444;
		  transition: all .2s;
		}
		 
		input.star:checked ~ label.star:before {
		  content: '\f005';
		  color: #FD4;
		  transition: all .25s;
		}
		
		input.star-5:checked ~ label.star:before {
		  color: #FE7;
		  text-shadow: 0 0 20px #952;
		}
		 
		input.star-1:checked ~ label.star:before { color: #F62; }
		 
		label.star:hover { transform: rotate(-15deg) scale(1.3); }
		 
		label.star:before {
		  content: '\f006';
		  font-family: FontAwesome;
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
                       HOME-P
======================================================-->
    <div id="home-p" class="home-p pages-head1 text-center">
      <div class="container">
      
      
      <?php
      	include "conn.php";
      	
      	$id = $_GET['id'];
      	
      	$sql = "SELECT * FROM chapter WHERE chap_id = $id";
      	
      	$query = mysqli_query($conn, $sql);
      	
      	if($rows = mysqli_fetch_array($query))
      	{
      ?>
      
      
      
        <h1 class="wow fadeInUp" data-wow-delay="0.1s">Chapter <?php echo $rows['chapter'] ?></h1>
        <p><?php echo $rows['chap_name'] ?></p>
        
        <?php
        }
        ?>
        
      </div><!--/end container-->
    </div> 

<!--====================================================
                      CHAPTER
======================================================-->
    <section id="faq-p1" class="team-p1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="faq-p1-cont">
              <div class="service-h-tab"> 
                <nav class="nav nav-tabs" id="myTab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">Descriptions</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile">Course Outline</a> 
                  <a class="nav-item nav-link" id="my-profile-tab" data-toggle="tab" href="#my-profile" role="tab" aria-controls="my-profile">Review</a> 
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">      
                    <div class="toggle">
                      <div class="toggle-title ">
                        <h3>
                        <i></i>
                        <span class="title-name">What topic to be covered?</span>
                        </h3>
                      </div>
                      <div class="toggle-inner">
                        <p class="fa fa-arrow-circle-o-right"></p>
                      </div>
                    </div> 
                    <div class="toggle">
                      <div class="toggle-title  ">
                          <h3>
                          <i></i>
                          <span class="title-name">What is the Learning Outcomes?</span>
                          </h3>
                      </div>
                      <div class="toggle-inner">
                          <p class="fa fa-arrow-circle-o-right"></p>
                      </div>
                    </div> 
                  </div>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="toggle">
                      <div class="toggle-title ">                      
                        <h3>
                        <i></i>
                        <span class="title-name"> Notes</span>
                        </h3>
                      </div>
                                            
                      <?php
                      	include "conn.php";
                      	
                      	$id = $_GET['id'];
                      	
                      	$sql = "SELECT * FROM supplementary_material INNER JOIN supplementary_material_type ON supplementary_material.supp_no = supplementary_material_type.supp_no WHERE supplementary_material_type.supp_no = '1' AND supplementary_material.chap_id = '$id'";
                      	
                      	$query = mysqli_query($conn, $sql);
                      	
                      	while($rows = mysqli_fetch_array($query))
                      	{
                      ?>

                      <div class="toggle-inner">
                                            
                      

                      	<a class="fa fa-folder-open" href="admin/<?php echo $rows['supp_path'] ?>" target="_blank"> <?php echo $rows['supp_name'] ?></a>
                      
                      
                      </div>
                                            	
                      <?php
                      	}
                      ?>

                    </div> 
                    <div class="toggle">
                      <div class="toggle-title  ">
                        <h3>
                        <i></i>
                        <span class="title-name"> Tutorials</span>
                        </h3>
                      </div>
                                            
                      <?php
                      	include "conn.php";
                      	
                      	$id = $_GET['id'];
                      	
                      	$sql = "SELECT * FROM supplementary_material INNER JOIN supplementary_material_type ON supplementary_material.supp_no = supplementary_material_type.supp_no WHERE supplementary_material_type.supp_no = '2' AND supplementary_material.chap_id = '$id'";
                      	
                      	$query = mysqli_query($conn, $sql);
                      	
                      	while($rows = mysqli_fetch_array($query))
                      	{
                      ?>

                      <div class="toggle-inner">
                      

                      	<a class="fa fa-folder-open" href="admin/<?php echo $rows['supp_path'] ?>" target="_blank"> <?php echo $rows['supp_name'] ?></a>
                      	

                      </div>
                      
                      <?php
                      	}
                      ?>

                    </div> 
                    <div class="toggle">
                      <div class="toggle-title  ">
                          <h3>
                          <i></i>
                          <span class="title-name"> KB Notes</span>
                          </h3>
                      </div>
                      
                      <?php
                      	include "conn.php";
                      	
                      	$id = $_GET['id'];
                      	
                      	$sql = "SELECT * FROM supplementary_material INNER JOIN supplementary_material_type ON supplementary_material.supp_no = supplementary_material_type.supp_no WHERE supplementary_material_type.supp_no = '3' AND supplementary_material.chap_id = '$id'";
                      	
                      	$query = mysqli_query($conn, $sql);
                      	
                      	while($rows = mysqli_fetch_array($query))
                      	{
                      ?>

                      <div class="toggle-inner">
                      

                      	<a class="fa fa-folder-open" href="<?php echo $rows['supp_path'] ?>" target="_blank"> <?php echo $rows['supp_name'] ?></a>
                      </div>
                      
                                            	
                      <?php
                      	}
                      ?>

                    </div>                    
                    <div class="toggle">
                      <div class="toggle-title  ">
                          <h3>
                          <i></i>
                          <span class="title-name"> Videos</span>
                          </h3>
                      </div>
                                           
                      <?php
                      	include "conn.php";
                      	
                      	$id = $_GET['id'];
                      	
                      	$sql = "SELECT * FROM supplementary_material INNER JOIN supplementary_material_type ON supplementary_material.supp_no = supplementary_material_type.supp_no WHERE supplementary_material_type.supp_no = '4' AND supplementary_material.chap_id = '$id'";
                      	
                      	$query = mysqli_query($conn, $sql);
                      	
                      	while($rows = mysqli_fetch_array($query))
                      	{
                      ?>

                      <div class="toggle-inner">
                      

                      	<a class="fa fa-folder-open" href="<?php echo $rows['supp_path'] ?>" target="_blank"> <?php echo $rows['supp_name'] ?></a>
                      	

                      </div>
                      <?php
                      	}
                      ?>

                    </div> 
                  </div>
                  <div class="tab-pane fade" id="my-profile" role="tabpanel" aria-labelledby="my-profile-tab">
                  
                  <?php
                  	include "conn.php";
                  	
                  	$id = $_GET['id'];
                  	
                  	$sql = "SELECT * FROM chapter INNER JOIN review ON chapter.chap_id = review.chap_id INNER JOIN student ON review.student_id = student.student_id WHERE chapter.chap_id = '$id'";
                  	
                  	$query = mysqli_query($conn,$sql);
                  	
                  	while($rows = mysqli_fetch_array($query))
                  	{
                  	
      
                  ?>
                   <div class="review-block">
                        <div class="row">
                          <div class=" col-sm-3">
                            <img src="img/client/avatar-3.jpg" class="img-rounded">
                            <div class="review-block-name"><?php echo $rows['student_fullname'] ?></div>
                          </div>
                          <div class="col-sm-9">
                            <div class="rating">
                              <div class="stars">
                              	<?php
                              	if($rows['review_rating'] == 1)
                              	{
                                	echo "<span class='fa fa-star checked' style='color:orange'></span>";
                                	echo "<span class='fa fa-star'></span>";
                                	echo "<span class='fa fa-star'></span>";
                                	echo "<span class='fa fa-star'></span>";
                                	echo "<span class='fa fa-star'></span>";
                                }
                              	elseif($rows['review_rating'] == 2)
                              	{
                                	echo "<span class='fa fa-star checked' style='color:yellow'></span>";
                                	echo "<span class='fa fa-star checked' style='color:yellow'></span>";
                                	echo "<span class='fa fa-star'></span>";
                                	echo "<span class='fa fa-star'></span>";
                                	echo "<span class='fa fa-star'></span>";
                                }
                              	elseif($rows['review_rating'] == 3)
                              	{
                                	echo "<span class='fa fa-star checked' style='color:yellow'></span>";
                                	echo "<span class='fa fa-star checked' style='color:yellow'></span>";
                                	echo "<span class='fa fa-star checked' style='color:yellow'></span>";
                                	echo "<span class='fa fa-star'></span>";
                                	echo "<span class='fa fa-star'></span>";
                                }
                              	elseif($rows['review_rating'] == 4)
                              	{
                                	echo "<span class='fa fa-star checked' style='color:yellow'></span>";
                                	echo "<span class='fa fa-star checked' style='color:yellow'></span>";
                                	echo "<span class='fa fa-star checked' style='color:yellow'></span>";
                                	echo "<span class='fa fa-star checked' style='color:yellow'></span>";
                                	echo "<span class='fa fa-star'></span>";
                                }
                              	elseif($rows['review_rating'] == 5)
                              	{
                                	echo "<span class='fa fa-star checked' style='color:yellow'></span>";
                                	echo "<span class='fa fa-star checked' style='color:yellow'></span>";
                                	echo "<span class='fa fa-star checked' style='color:yellow'></span>";
                                	echo "<span class='fa fa-star checked' style='color:yellow'></span>";
                                	echo "<span class='fa fa-star checked' style='color:yellow'></span>";
                                }
                                ?>
                              </div>
                            </div>
                            <div class="review-block-title"><?php echo  $rows['review_title']?></div>
                            <div class="review-block-description"><?php echo $rows['review_content'] ?></div> 
                          </div>
                        </div> 
                   </div>
                   <?php
                   	}
                   ?>                
                   <div class="comment-box-sn">  
                  <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leave a Reply</h5><br/>
                      <div id="div-forms">
                      <form id="login-form" action="review_insert.php" method="post">
                          <div class="modal-body">
                              <input id="content-title" class="form-control" type="text" placeholder="Comment Title " required name="title">
                              
                              <?php
                              	$id = $_GET['id'];
                              	
                              	echo "<input type='hidden'name='chapter' value='$id'>";
                              
                              ?>
                              
                              
                              
                              <br/> 
                              <textarea name="comment" placeholder="Comment Content" required></textarea>
                           <div class="stars">
							<input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
							<label class="star star-5" for="star-5"></label>
							<input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
							<label class="star star-4" for="star-4"></label>
							<input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
							<label class="star star-3" for="star-3"></label>
							<input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
							<label class="star star-2" for="star-2"></label>
							<input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
							<label class="star star-1" for="star-1"></label>
					</div>
                          </div>
                          <div class="modal-footer text-center">
                              <div>
                                  <button type="submit" class="btn btn-general btn-white" style="width: 100%;">Submit</button>
                              </div>
                          </div>
                      </form>
                  </div>  
	                  &zwj;
                </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
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
            <button class="btn btn-general btn-green" role="button">See More</button>
          </div>
          <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.4s">
            <div class="desc-comp-offer-cont">
              <div class="thumbnail-blogs">
                  <div class="caption">
                    <i class="fa fa-chain"></i>
                  </div>
                  <img src="img/news/news-1.jpg" class="img-fluid" alt="...">
              </div>
              <h3>Pricing Strategies for Product</h3>
              <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from Business box. </p>
              <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.6s">
            <div class="desc-comp-offer-cont">
              <div class="thumbnail-blogs">
                  <div class="caption">
                    <i class="fa fa-chain"></i>
                  </div>
                  <img src="img/news/news-9.jpg" class="img-fluid" alt="...">
              </div>
              <h3>Design Exhibitions of 2017</h3>
              <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from Business box. </p>
              <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.8s">
            <div class="desc-comp-offer-cont">
              <div class="thumbnail-blogs">
                  <div class="caption">
                    <i class="fa fa-chain"></i>
                  </div>
                  <img src="img/news/news-12.jpeg" class="img-fluid" alt="...">
              </div>
              <h3>Exciting New Technologies</h3>
              <p class="desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from Business box. </p>
              <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>
            </div>
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
                    <li><a href="chapter.php">FAQ</a><i class="fa fa-angle-right"></i></li> 
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

    <!--Global JavaScript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/wow/wow.min.js"></script>
    <script src="js/owl-carousel/owl.carousel.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery-easing/jquery.easing.min.js"></script> 
    <script src="js/custom.js"></script>
    <script>
        if( jQuery(".toggle .toggle-title").hasClass('active') ){
                jQuery(".toggle .toggle-title.active").closest('.toggle').find('.toggle-inner').show();
            }
            jQuery(".toggle .toggle-title").click(function(){
                if( jQuery(this).hasClass('active') ){
                    jQuery(this).removeClass("active").closest('.toggle').find('.toggle-inner').slideUp(200);
                }
                else{   jQuery(this).addClass("active").closest('.toggle').find('.toggle-inner').slideDown(200);
                }
            });
    </script> 
  </body>

</html>
