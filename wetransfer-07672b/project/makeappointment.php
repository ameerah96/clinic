<!DOCTYPE html>
<html lang="en">

    <head>
	
	<?php
$db = 'lancerdatabase';
$username = 'root';
$password = '';

// Create connection
$conn = mysqli_connect('localhost', $username, $password, $db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
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
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>
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

		<style type="text/css">
.form-style-1 {
    margin:10px auto;
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;

	}
.form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
	
}
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none; background-color:black; 
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,

.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,

{
    -moz-box-shadow: 0 0 8px red;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}

.form-style-1 .field-long{
    width: 100%;
}


.form-style-1 input[type=submit], .form-style-1 input[type=button]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;

}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
   background:red;;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-style-1 .required{
    color:red;
}
</style>`
   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	
	<script>
	$(document).ready(function(e) {   
    $("#button").hide();
	$("#submit").click(function(){
   
  $("#form").empty();
 $("#confirmation").css("color","green");
   $("#confirmation").append("An appointemet ID was sent to your email Please use it whenever you want to edit the appointment information ");
 $("#button").show();
   });
	
 });

	
	
	</script>
   <script>
	function mydate()
{
  //alert("");
document.getElementById("dt").hidden=false;
document.getElementById("ndt").hidden=true;
}
function mydate1()
{
 d=new Date(document.getElementById("dt").value);
dt=d.getDate();
mn=d.getMonth();
mn++;
yy=d.getFullYear();
document.getElementById("ndt").value=dt+"/"+mn+"/"+yy
document.getElementById("ndt").hidden=false;
document.getElementById("dt").hidden=true;
}
</script>
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
    
      <div class="page-title top-content">
            <div class="page-title-text wow fadeInUp">
          
            	
       <p id="confirmation">
	   </p>
	   <button type="button" id="button" class="form-style-1">Click to see appointment details</button>
  <form id="form">
<ul class="form-style-1">
    <li><label>Full Name <span class="required">*</span></label><input id="name" type="text" name="field1" class="field-divided" placeholder="First" />&nbsp;<input type="text" name="field2" class="field-divided" placeholder="Last" /></li>
    <li>
        <label>Email <span class="required">*</span></label>
        <input type="email" name="field3" class="field-long" />
    </li>
     <li>
	  <input type="date" id="dt" onchange="mydate1();" hidden/>
<input type="text" id="ndt"  onclick="mydate();" hidden />
<input type="button" Value="Date" onclick="mydate();" />
</li>
	<li>
        <label>Doctor <span class="required">*</span></label>
        <input type="email" name="field3" class="field-long" />
    </li>
    <li>
        <label>Phone<span class="required" >*</span></label>
        <input type="email" name="field3" class="field-long" />
    </li>
    <li>
        <input  type="submit" id="submit" value="Submit" />
      </li>
	  
</ul>
</form>




  	
           
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
