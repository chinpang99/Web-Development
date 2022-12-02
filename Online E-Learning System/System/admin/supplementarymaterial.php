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

    <title>Supplementary Materials</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    
    <!-- global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-icon-style.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="css/form.css">
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

        <div class="content-inner form-cont">
            <div class="row">
                <div class="col-md-12">

                    <!--***** BASIC FORM *****-->
                    <div class="card form" id="form1">
                        <div class="card-header">
                            <h3>Search Materials</h3>
                        </div>
                        <br>
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Supplementary Material File Name</label>
                                        <input type="text" class="form-control" id="suppleName" placeholder="Enter file name" name="title">
                                    </div>                                    
                                    <fieldset class="form-group">
                                        <legend>File Type</legend>
                                        <?php
                                        
                                        	include "../conn.php";
                                        	
                                        	$sql = "SELECT * FROM supplementary_material_type";
                                        	
                                        	$query = mysqli_query($conn, $sql);
                                        	
                                        	while($rows = mysqli_fetch_array($query))
                                        	{
                                        
                                        ?>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="type" id="optionsRadios1" value="<?php echo $rows['supp_type'] ?>"> <?php echo $rows['supp_type'] ?>
                                            </label>
                                        </div>
                                        
                                       <?php
                                       		}
                                       ?>

                                    </fieldset>        
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ChapSelect">Chapters</label>
                                        <select class="form-control" id="exampleSelect1" name="chap">
                                        <option></option>
                                        <?php 
                                        	include "../conn.php";
                                        	
                                        	$id = $_SESSION['t_id'];
                                        	
                                        	$sql = "SELECT * FROM chapter WHERE teacher_id = '$id' ORDER BY chapter;";
                                        	
                                        	$query = mysqli_query($conn, $sql);
                                        	
                                        	while($rows = mysqli_fetch_array($query))
                                        	{
                                        ?>
                                            <option><?php echo $rows['chapter'] ?></option>
                                        <?php
                                        	}
                                        ?>
                                        
                                        
                                        </select>
                                    </div>
                            </div>
                            </div> 
                            <button type="submit" class="btn btn-general btn-blue mr-2">Search</button>  
                        </form>
                    </div>
                    
                    
                    
            <!--***** CONTENT *****-->     
            <div class="row">
                <table class="table table-hover">
                  <thead>
                    <tr class="bg-info text-white">
                      <th>File Type</th>
                      <th class="text-center">Supplementary Material Name</th>
                      <th class="text-center">Chapter</th>
                      <th class="text-center">Date Uploaded</th>
                      <th class="text-center">Edit</th>
                      <th class="text-center">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
						include "../conn.php";
						
						$id = $_SESSION['t_id'];
										  	
						if(isset($_POST['title']) && $_POST['title'] != "")
						{
							//store the search key with the variable $searchkey
							$searchkey = $_POST['title'];
							
												
							$sql = "SELECT * FROM chapter INNER JOIN supplementary_material ON chapter.chap_id = supplementary_material.chap_id INNER JOIN supplementary_material_type ON supplementary_material.supp_no = supplementary_material_type.supp_no WHERE supplementary_material.supp_name LIKE '%$searchkey%' AND supplementary_material.teacher_id = '$id'";
										  	
							$query = mysqli_query($conn, $sql);
										  	
							while($rows = mysqli_fetch_array($query))
							{
							
							echo "<tr class='table-warning'>";
					  ?>   
					       <th scope="row"><?php echo $rows['supp_type'] ?></th>
					       
					       <?php
					       
		                      echo "<td class='text-center' onclick=\"window.open('".$rows['supp_path']."')\" style='cursor:pointer'>".$rows['supp_name']."</td>";
		                      
		                   ?>
		                   
		                   
		                      <td class="text-center"><?php echo $rows['chapter'] ?></td>
		                      <td class="text-center"><?php echo $rows['date_uploaded'] ?></td>
		                      
		                      <?php
		                      
		                      	echo "<td class='text-center'><button type='button' class='btn btn-outline-success' style='width:100%; height:5%; margin-left: 25%;cursor:pointer' onclick=\"window.location.href='supplementarymaterial_view.php?id=".$rows['supp_id']."'\">Edit</button></td>";
		                      	echo "<td><button type='button' class='btn btn-outline-danger' style='width:70%; height:5%;margin-left: 25%;cursor:pointer' onclick=\"window.location.href='supplementarymaterial_delete.php?id=".$rows['supp_id']."'\">Delete</button></td>";
		                      ?>

                  
                  <?php
                  			echo "</tr>";
                  			}
                  		}elseif(isset($_POST['type']) && $_POST['type'] != "")
						{
							//store the search key with the variable $searchkey
							$searchkey = $_POST['type'];
										
							$sql = "SELECT * FROM chapter INNER JOIN supplementary_material ON chapter.chap_id = supplementary_material.chap_id INNER JOIN supplementary_material_type ON supplementary_material.supp_no = supplementary_material_type.supp_no WHERE supplementary_material_type.supp_type LIKE '$searchkey' AND supplementary_material.teacher_id = '$id'";
										  	
							$query = mysqli_query($conn, $sql);
										  	
							while($rows = mysqli_fetch_array($query))
							{
							
							echo "<tr class='table-warning'>";
					  ?>   
					       <th scope="row"><?php echo $rows['supp_type'] ?></th>
					       
					       
					       <?php
		                      
		                      echo "<td class='text-center' onclick=\"window.open('".$rows['supp_path']."')\" style='cursor:pointer'>".$rows['supp_name']."</td>";
		                   ?>
		                   
		                   
		                      <td class="text-center"><?php echo $rows['chapter'] ?></td>
		                      <td class="text-center"><?php echo $rows['date_uploaded'] ?></td>
		                      
		                      <?php
								
								echo "<td class='text-center'><button type='button' class='btn btn-outline-success' style='width:100%; height:5%; margin-left: 25%;cursor:pointer' onclick=\"window.location.href='supplementarymaterial_view.php?id=".$rows['supp_id']."'\">Edit</button></td>";
								echo "<td><button type='button' class='btn btn-outline-danger' style='width:70%; height:5%;margin-left: 25%;cursor:pointer' onclick=\"window.location.href='supplementarymaterial_delete.php?id=".$rows['supp_id']."'\">Delete</button></td>";

		                      
		                      ?>
                  
                  <?php
                  			echo "</tr>";
                  			}
                  		}elseif(isset($_POST['chap']) && $_POST['chap'] != "")
						{
							//store the search key with the variable $searchkey
							$searchkey = $_POST['chap'];
										
							$sql = "SELECT * FROM chapter INNER JOIN supplementary_material ON chapter.chap_id = supplementary_material.chap_id INNER JOIN supplementary_material_type ON supplementary_material.supp_no = supplementary_material_type.supp_no WHERE chapter.chapter LIKE '$searchkey' AND supplementary_material.teacher_id = '$id'";
										  	
							$query = mysqli_query($conn, $sql);
										  	
							while($rows = mysqli_fetch_array($query))
							{
							
							echo "<tr class='table-warning'>";
					  ?>   
					       <th scope="row"><?php echo $rows['supp_type'] ?></th>
					       
					       
					       <?php
		                      
		                      echo "<td class='text-center' onclick=\"window.open('".$rows['supp_path']."')\" style='cursor:pointer'>".$rows['supp_name']."</td>";
		                   ?>
		                   
		                   
		                      <td class="text-center"><?php echo $rows['chapter'] ?></td>
		                      <td class="text-center"><?php echo $rows['date_uploaded'] ?></td>
		                      
		                      <?php
								
								echo "<td class='text-center'><button type='button' class='btn btn-outline-success' style='width:100%; height:5%; margin-left: 25%;cursor:pointer' onclick=\"window.location.href='supplementarymaterial_view.php?id=".$rows['supp_id']."'\">Edit</button></td>";
		                      	echo "<td><button type='button' class='btn btn-outline-danger' style='width:70%; height:5%;margin-left: 25%;cursor:pointer' onclick=\"window.location.href='supplementarymaterial_delete.php?id=".$rows['supp_id']."'\">Delete</button></td>";

		                      ?>
		                      
                  
                  <?php
                  			echo "</tr>";
                  			}
                  			}else
                  			{
		                  	$sql = "SELECT * FROM chapter INNER JOIN supplementary_material ON chapter.chap_id = supplementary_material.chap_id INNER JOIN supplementary_material_type ON supplementary_material.supp_no = supplementary_material_type.supp_no WHERE supplementary_material.teacher_id = '$id'";
		                  	
		                  	$query = mysqli_query($conn, $sql);
		                  	
		                  	while($rows = mysqli_fetch_array($query))
		                  	{                  
                  
                    		echo "<tr class='table-warning'>";
                    
                   ?>
		                    <th scope="row"><?php echo $rows['supp_type'] ?></th>
					       
					       <?php
		                      
		                      echo "<td class='text-center' onclick=\"window.open('".$rows['supp_path']."')\" style='cursor:pointer'>".$rows['supp_name']."</td>";
		                   ?>
		                   
		                   
		                      <td class="text-center"><?php echo $rows['chapter'] ?></td>
		                      <td class="text-center"><?php echo $rows['date_uploaded'] ?></td>
		                      
		                      
		                      <?php
								
								echo "<td class='text-center'><button type='button' class='btn btn-outline-success' style='width:100%; height:5%; margin-left: 25%;cursor:pointer' onclick=\"window.location.href='supplementarymaterial_view.php?id=".$rows['supp_id']."'\">Edit</button></td>";
		                      	echo "<td><button type='button' class='btn btn-outline-danger' style='width:70%; height:5%;margin-left: 25%;cursor:pointer' onclick=\"window.location.href='supplementarymaterial_delete.php?id=".$rows['supp_id']."'\">Delete</button></td>";
		                      ?>
                    
                    <?php
                    		echo "</tr>";
                    		}
                    	
                    	}
                    ?>
                    
                    
                  </tbody>
                </table>
            </div> 
</div></div>
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