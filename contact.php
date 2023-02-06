<?php error_reporting(0); ?>
<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["name"].value;
var b=document.forms["reg"]["email"].value;
var c=document.forms["reg"]["subject"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c==""))
{
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("name  must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("email must be filled out");
  return false;
  }
  if (c==null || c=="")
  {
  alert("subject must be filled out");
  return false;
  }
  }
  </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
</head>
<body>
<div class="header_bg1">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h1><a href="home.php">NEW DISTANCE LEARNING</a></h1>
			<P>DO AND CHANGE</P>
		</div>
		
		<div class="clearfix"></div>
	</div>
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		      <li class="active"><a href="home.php">HOME</a></li>
				<li><a href="about.php">About</a></li>
				 <li ID="L1"><a href="bca.php">COURSE</a>
				 <li><a href="choosecourse.php">ADMISSION</a></li>
				<li><a href="service.php">SERVICES</a></li>
		        <li><a href="contact.php">Contact</a></li>
		      </ul>
		    </div>
		</nav>
		<div class="soc_icons navbar-right">
			<ul class="list-unstyled text-center">
				<li><a href="https://www.facebook.com/pages/NDL/888866991149223?sk=timeline" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/NDL987" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://plus.google.com/u/0/113507407628261103547/posts/p/pub" target="_blank"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="https://in.linkedin.com/pub/new-distance-learning/101/a6a/435" target="_blank"><i class="fa fa-linkedin" ></i></a></li>
			</ul>	
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</div>
<div class="main_btm">
	<div class="container">
		<div class="main row">
			    <div class="col-md-6 company_ad">
				    <h2>find Address :</h2>
      				<address>
						 <p>No.30,Divyasree </p><p>Techno Park, K R Puram, Hobli, Whitefield</p>
<P>Bangalore, Karnataka</P>
<p> Pin code: 560001</p>
				 <p>Tel: +91 90 9090 9090</p>
				<p>Fax:  +91 90 9090 9090</p><p>Email:<a class="email-link" href="https://mail.google.com/mail/" target="_blank">                ndl@gmail.com</a></p>
				   		<p>Follow on: <a href="https://www.facebook.com/pages/NDL/888866991149223?sk=timeline" target="_blank">Facebook</a>, <a href="https://twitter.com/NDL987" target="_blank">Twitter</a></p>
				   	</address>
				</div>
				<div class="col-md-6">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					     <form name="reg" action="contactemail.php" onSubmit="return validateForm()" method="post">
						            <center> <?php 
		$remarks=$_GET['remarks'];
		if ($remarks==null and $remarks=="")
		{
		echo 'Register Here';
		}
		if ($remarks=='success')
		{
		echo 'Registration Success';
		}
		?></center>
					    	<div>
						    	<span>name</span>
						    	<span><input type="username" class="form-control" name="name"></span>
						    </div>
						    <div>
						    	<span>e-mail</span>
						    	<span><input type="email" class="form-control" name="email"></span>
						    </div>
						    <div>
						    	<span>subject</span>
						    	<span><textarea name="subject"> </textarea></span>
						    </div>
						   <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="submit us" name="sumbit"></label>
						  </div>
					    </form>
				    </div>
  			</div>		
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>



 <div id="d1">
		    <div class="container">
			<div class="row">
				<div class="col-md-3 footet-left">
					<h3 class="c1">INFORMATION</h3>
					<ul class="c2">
						<li><a href="home.php">HOME</a></li>
						<li><a href="about.php">ABOUT</a></li>
						<li><a href="bca.php">COURSE</a></li>
						<li><a href="choosecourse.php">ADMISSION</a></li>
						<li><a href="service.php">SERVICE</a></li>
							<li><a href="contact.php">CONTACT</a></li>
					</ul>
				</div>
				<div class="col-md-3 footet-left">
					<h3 class="c1">COURSE</h3>
					<ul class="c2">
						<li><a href="bca.php">BCA</a></li>
						
						<li><a href="german.php">GERMAN</a></li>
						
						<li><a href="photoshopp.php">PHOTOSHOP</a></li>
						<li><a href="msexcell.php">MS EXCEL</a></li>
						<li><a href="mswordd.php">MS WORD</a></li>
					
					
					</ul>
				</div>
				<div class="col-md-3 footet-left">
					<h3 class="c1">MY ACCOUNT</h3>
					<ul class="c2">
						<li><a href="slogin.php"> STUDENT LOGIN</a></li>
						<li><a href="registration.php"> STUDENT SIGNUP</a></li>
						<li><a href="flogin.php"> FACULTY LOGIN</a></li>
						</ul>
				</div>
				<div class="col-md-3 footet-left">
					<h3 class="c1">CONTACT</h3>
					<ul class="c2">
					<p>NEW DISTANCE LEARNING</P>
					<p>Tel: +91 90 9090 9090</p>
					<p>Fax: +91 90 9090 9090</p><p>Email:<a class="email-link" href="https://mail.google.com/mail/" target="_blank">                ndl@gmail.com</a></p>
					</ul>
					
					</div>
			</div>
		</div></div>
</body>
</html>