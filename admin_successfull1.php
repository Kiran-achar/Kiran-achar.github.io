



<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-notes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "select username from admin";

if ($result = mysqli_query($conn, $sql)) {
$i=0;
  while ($row = mysqli_fetch_row($result)) {
   $name=$row[0];
   $i++;
 
}
}
?>


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sahyadri Science College</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    

	<link rel="shortcut icon" href="sahyadri clg images/logo.png" type="image/x-icon" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img {vertical-align: middle;}
        
        /* Slideshow container */
        .slideshow-container {
          width:90%;

          position: relative;
          margin: auto;
        }
		
        
        /* Caption text */
        .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
        }
        
        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }
        
        /* The dots/bullets/indicators */
        .dot {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }
        
        .active {
          background-color: #717171;
        }
        
        /* Fading animation */
        .fade {
          animation-name: fade;
          animation-duration: 3s;
        }
        
        @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .text {font-size: 11px}
        }

        #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #ce7807;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;

}
div.sticky{
    position: -webkit-sticky;
    position: sticky;
    top: 0;
	
    z-index: 1;
}
li{
	
	color:white;
	text-shadow: #f2f2f2;
}

        
        </style>

	</head>
	<body>
		<center>
			<img src="sahyadri clg images/sahyadri.jpg" width="100%" ></center>
		<div class="sticky">

            <div class="container" style="background-color:#006380;color:white;width:100%;">
                <nav class="navbar navbar-default yamm" style="background-color:#006380;border-color: #006380;">
                    <div class="navbar-header" >
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="margin:35px;" >
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-normal" style="height:40px;"><br>
                           <a href="#"><img src="sahyadri clg images/s1.png" width="60%" ></a>
                        </div>
                        
                    </div>

                    <div id="navbar" class="navbar-collapse collapse" >
                        <ul class="nav navbar-nav navbar-right" style="margin:20px;">
                            <li><a href="#"><abbr style="color:white;">Welcome <?php echo $name?></abbr></a></li>
                            
                          
                               
                                                    
                            <li><a href="index.html"><abbr style="color:white;">logout</abbr></a></li>
                           
                        </ul>
                    </div>
                </nav><!-- end navbar -->
            </div><!-- end container -->
      
        </div><br>
		
		

		

<div id="fh5co-counter" class="fh5co-counters">
		<div class="container">
        <a href="admin_successfull.php">Back</a><center>
       
			<div class="row">
				<div class="col-md-4 text-center animate-box">
                <img src="project images\vld.png" alt="text" height="150px">   
                <a href="lectureDetails.php"><h3>View Lecturer Details</h3></a>
                  
                </div>
                <div class="col-md-4 text-center animate-box">
                <img src="project images\vsd.png" alt="text" height="150px">   
                <a href="studentDetails1.php"><h3>View Students Details</h3></a>
                 
				</div>
                <div class="col-md-4 text-center animate-box">
                    
                <img src="project images\vund.png" alt="text" height="150px">
                <a href="notesDetails.php"><h3>View Uploaded Notes Details</h3></a>
                     
                </div>
            </div>
            

                 
		</div>
                
                                       			
	</div>


	
	<footer id="fh5co-footer" role="contentinfo" style="height: 400px;">
		<div class="container">
			<div class="row row-pb-md">
			
				
				<div class="col-md-8 ">
				<img src="sahyadri clg images/djb2.jpg" width="50%">
			
				</div>
				<div class="col-md-4 ">
					
					<h4>SH 57, Vidya Nagar, Shivamogga, Karnataka 577203</h4>
						<ul class="fh5co-footer-links">
							<li><a href="#"> 08182 - 240435</a></li>
							<li><a href="#"> sahyadriscience@gmail.com</a></li>
							<li><a href="#"> www.kussc.ac.in</a></li>
					
						</ul>
					</div>


			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; Sahyadri Science College,Shimogga. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="#">Varsha B.Sc Student </a> </small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>



