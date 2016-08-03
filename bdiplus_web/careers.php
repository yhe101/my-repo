<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BDIPLus  is one of the firms with proven expertise and experiences with successful implementation of Big Data software solutions for enterprise wide applications">
    <meta name="author" content="">
    <title>BDIPLus - Big Data Management Software Products</title>
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <!--<link href="css/prettyPhoto.css" rel="stylesheet">-->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    
</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="index.php">Home</a></li>
                        <li class="scroll"><a href="index.php#features">Products</a></li>
                        <li class="scroll"><a href="index.php#services">Services</a></li>
				<!--		 <li class="scroll"><a href="#about">About us</a></li> -->
                        <li class="scroll"><a href="index.php#careers">Careers</a></li>                       
                        <li class="scroll"><a href="index.php#get-in-touch">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
 
	 <section id="careers">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Careers</h2>    
				  <p class="text-center wow fadeInDown"><h5 class="section-title-text">BDI+ is one of the firms with proven expertise and experiences with successful implementation of Big Data technology for enterprise wide use. The Firm provides a full spectrum of integrated Big Data software products and consulting services. Our Lab BDI++, combines business knowledge, business technology structure & principle with innovative agile engineering to offer distinctive support for our clients.  Rapidly building nimble & high quality custom products and solutions using latest technology, while leading the development of our clients own capabilities. BDI++ provides a cost effective Big Data solutions to our clients that maximize the values from day one</h5></p>				
     	    	  <p class="text-center wow fadeInDown"><h5 class="section-title-text">Despite being a startup, BDI+ has already earned high respect and reputation from our clients due to our unparalleled business experience, expertise and matured products. Our development teams are small, flexible and employ agile methodologies to quickly provide our clients with the solutions they need. We create integrated enterprise software products that combine latest open source technologies together with our own innovative products and client proprietary solutions </h5></p>	
			</div>
            <div class="row">
                <div class="col-sm-12 wow fadeInLeft">
                    <div class="media service-box wow fadeInRight" style="margin-top:0;">                                                    
                            <table class="table table striped job-table">
							<tr>
								<th class="col-sm-1">No.</th>
								<th class="col-sm-3">Title</th>
								<th class="col-sm-6">Job Description</th>
								<th class="col-sm-2">Location</th>								
								<th class="col-sm-1">Apply</th>								
							</tr>
							
							<?php
//					     		<th class="col-sm-1">Details</th>								
							
							//print php_ini_loaded_file();
							$servername = "50.62.209.2:3306";
							$username = "bdidev";
							$password = "1bdidev-";
							/*$servername = "localhost";
							$username = "root";
							$password = "password";*/

							$dbname = "bdidb";
							$i=1;
							// Create connection
							$conn = mysqli_connect($servername, $username, $password, $dbname);
							// Check connection
							if (!$conn) {
								die("Connection failed: " . mysqli_connect_error());
							}
							$sql = "SELECT req_id AS id, req_title,  req_desc req_area, req_location, req_desc FROM bdi_job_requirements WHERE req_status='OPEN'";
							$result = mysqli_query($conn, $sql);
							$jobs=array();
							if (mysqli_num_rows($result) > 0) {								
								while($row = mysqli_fetch_assoc($result)) {									
	//								echo "<tr><td>" . $i++. "</td><td>" . $row["req_title"]. "</td><td>" . $row["req_area"]. "</td><td> " . $row["req_location"]. "</td><td>" ."<a href='#' class='details' data-title='".$row["req_title"]."' data-location='".$row["req_location"]."' data-desc='".$row["req_desc"]."' data-area='".$row["req_area"]."' data-toggle='modal' data-target='#myModal'>Details</a></td><td>" ."<button type='button' class='btn btn-info btn-sm applyBtn' data-reqid='".$row["id"]."' data-toggle='modal' data-target='#applyModal'>Apply</button></td></tr>";
	//								$jobs[$i]=array("title"=>$row["req_title"],"area"=>$row["req_area"],"location"=>$row["req_location"],"desc"=>$row["req_desc"]);
									echo "<tr><td>" . $i++. "</td><td>" . $row["req_title"]. "</td><td>" . $row["req_area"]. "</td><td> " . $row["req_location"]. "</td><td>" ."<button type='button' class='btn btn-info btn-sm applyBtn' data-reqid='".$row["id"]."' data-toggle='modal' data-target='#applyModal'>Apply</button></td></tr>";
									$jobs[$i]=array("title"=>$row["req_title"],"area"=>$row["req_area"],"location"=>$row["req_location"],"desc"=>$row["req_desc"]);
								}
							} 
							mysqli_close($conn);
							?>
						</table>                                    
					</div>
				</div>
            </div>
        </div>
    </section>
	
	<div id="myModal" class="modal fade job-modal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="jobtitle">Project Manager</h4>
      </div>
      <div class="modal-body" style="height:500px">
        <div><span class="bold-text">Area : </span><span id="jobarea">Some text in the modal.</span></div>
		<div><span class="bold-text">Location : </span><span id="joblocation">Some text in the modal.</span></div>
		<div><span class="bold-text">Description : </span><span id="jobdesc">Some text in the modal.</span></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>
	
	<div id="applyModal" class="modal fade job-modal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="jobtitle">Apply for the job</h4>
      </div>
      <div class="modal-body" style="height:450px;">
		<iframe src="jobform.php" id="applyFrame" name='applyFrame' style="height:100%;width:100%;overflow:hidden;border:0;"></iframe>        
      </div>	
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
	<script src="js/careers.js"></script>
</body>
</html>