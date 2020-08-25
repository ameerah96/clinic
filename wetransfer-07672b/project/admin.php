<!DOCTYPE html>
<html lang="en">

    <head>
	
	
	<?php
$db = 'lancerdatabase';
$u = 'root';
$p = '';

// Create connection
$conn = mysqli_connect('localhost', $u, $p, $db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  


 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
 session_start(); //Its better to Start session at the beginning of code
 
$username = $_POST["username"]; // as the method type in the form is "post" so you gave to use post otherwise it wud be $_GET[]
 $password = $_POST["password"];
 
$username = stripslashes($username); // To prevent SQL injection
$password = stripslashes($password);
 //$username = mysql_real_escape_string($username);
 //$password = mysql_real_escape_string($password);
 
//Establishing connection to the database
 

 
if (empty($_POST["username"]) && empty($_POST["password"])) //This is the way to check validations using PHP code but here we are using JS validations so it is not necessary
 {
 echo " Please enter the correct Username and Password ";
 include 'admin.php';
 exit();
 }
 // Create connection
$conn = mysqli_connect('localhost', $u, $p, $db);
$query = "select * from admin where ausername='$username'" or die("can't select"); //Where profile is the table name
$result = mysql_query($query,$conn) or die(mysql_error());
 
if($result)  // if result is not null
{
     
     $row = mysql_fetch_assoc($result) or die(""); //This function return single row at a time
     $uname = $row['ausername']; // copying the usernames and passwords present in database into temporary variables
     $pwd   = $row['apassword'];
 
    if($username=$uname && $password == $pwd) //if username and password entered are exactly as same as present in database, which means this user has already registered so we will direct him to profile page
    {
     //session_start();
     $_SESSION['username']=$username;  //Holding the username value in session variable so that it can be used later within the same session reference
 
     /* --Optional-- This is the extra line of code if you want to maintain records of logged in users then it would be helpful.
     $q = "UPDATE profile SET loggedin=1 WHERE username='$username' "; // Just to maintain Logged-in Status
     $res = mysql_query($q,$conn);
      */
 
     header('Location: adminlist.php');  // in success case user will be redirected to profile page
    }
  }
 else
 {
 echo " Incorrect Username or Password ";
 }
}

?>



        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>medical clinic</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,300,400">        
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/elegant-font/code/style.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
 <link rel="stylesheet" href="logstyle.css">
            <script src="js/prefixfree.min.js"></script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>
<body>

  <div class="loader">
    		<div class="loader-img"></div>
    	</div>
		
		<!-- Top menu -->
		<nav class="navbar navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">hmsa - Bootstrap One-Page Portfolio Template</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a  href="index.php">Home</a></li>
						<li><a  href="admin.php">Admin</a></li>
						<li><a  href="patient.php">Patient</a></li>
						<li><a  href="doctor.php">Doctor</a></li>
						<li><a class="scroll-link" href="#about">About</a></li>
						<li><a class="scroll-link" href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
<div class="header">
    
      


 <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Site<span>Random</span></div>
		</div>
		<br>
		<form method="post" action="">
		<div class="login">
				<input type="text" placeholder="username" name="username"><br>
				<input type="password" placeholder="password" name="password"><br>
				<input type="submit" value="Login">
		</div>
</form>



<div class="page-title top-content">
            <div class="page-title-text wow fadeInUp">
          
            	
            	
            </div>
        </div>

	  <!-- About us -->
        <div class="about-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 about section-description wow fadeIn">
	                    <h2>About us</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
	                    	we are Dedicated to providing accessible health care to everyone,by providing consistently excellent and accessible health services to all in need of care regardless of status or ability to pay – exceptional care, without exception. here, all are welcome and treated equally. The best and brightest doctors, representing virtually every medical specialty, chose to work here for the opportunity to make a difference in their community and beyond. Our vision is to meet the health needs of the people of Riyadh and its surrounding communities by providing high quality, comprehensive care to all, particularly mindful of the needs of the vulnerable populations through our integrated delivery system, in an ethically and financially responsible manner.
	                    </p>
	                </div>
	            </div>
	        </div>
        </div>
        <!-- Contact us (block 2) -->
        <div class="block-2-container section-container contact-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 block-2 section-description wow fadeIn">
	                	<h2>Contact us</h2>
	                	<div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
	                    	For every question, information or just to say "Hi", here is how you can get in touch with us. Send us an email or come visit us!
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-4 block-2-box block-2-left contact-form wow fadeInLeft">
	            		<h3>Email us</h3>
	                    <form role="form" action="assets/contact.php" method="post">
	                    	<div class="form-group">
	                    		<label class="sr-only" for="contact-email">Email</label>
	                        	<input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="contact-subject">Subject</label>
	                        	<input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="contact-message">Message</label>
	                        	<textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
	                        </div>
	                        <button type="submit" class="btn">Send it</button>
	                    </form>
	            	</div>
	            	<div class="col-sm-4 block-2-box block-2-right contact-address wow fadeInUp">
	            		<h3>Visit us</h3>
	                    
	                    <p><span aria-hidden="true" class="icon_phone"></span>Phone: +966534813114</p>
	                    <p><span aria-hidden="true" class="icon_mail"></span>Email: <a href="">samar.fares.91@hotmail.com</a></p>
	            	</div>
	            </div>
	            <div class="contact-icon-container">
            		<span aria-hidden="true" class="icon_mail"></span>
            	</div>
	        </div>
        </div>		













 <footer>
	        <div class="container">
	        	<div class="row">
		        	<div class="col-sm-12">
		        		<div class="scroll-to-top">
		        			<a href="#"><i class="fa fa-chevron-up"></i></a>
		        		</div>
		        	</div>
		        </div>
	            <div class="row">
                    <div class="col-sm-7 footer-copyright">
                    	Copyrights &copy; 2017 Haya Alahmed & Marwa alnouri & Ameera Sultan & Samar Fares All rights reserved.
                    </div>
                    <div class="col-sm-5 footer-social">
                    	<a href="#"><i class="fa fa-facebook"></i></a>
	                	<a href="#"><i class="fa fa-dribbble"></i></a>
	                    <a href="#"><i class="fa fa-twitter"></i></a>
	                    <a href="#"><i class="fa fa-google-plus"></i></a>
	                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
	            </div>
	        </div>
        </footer>
        

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->














</body>
</html>
