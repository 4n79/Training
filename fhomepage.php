<?php

include('connection.php');

session_start();
$mem_id=$_SESSION['mem_id'];
if($mem_id==""){
		header("location:flogin.php");
	}else{
$sql="SELECT * FROM `facultydata` WHERE mem_id = '$mem_id'";
			 
		     $run=mysql_query($sql);
			 $a=mysql_fetch_array($run);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Learner a education bootstrap Website Template | Technology :: w3layouts</title>
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
			<P> DO AND CHANGE</P>
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
				<li class="active"><a href="fuploadform.php">UPLOAD STUDY MATERIAL</a></li>
				 <li><a href="home.php">HOME</a></li>
				  <li><a href="fassignment.php">DOWNLOAD ASSIGNMENT</a></li>
				  <li><a href="flogout.php">LOGOUT</a></li>
				</ul>
		    </div></nav>
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
				<div class="col-md-4">
				<h1>WELCOME:</h1>
				<form action="" method="post" >
				  <TABLE WIDTH='300' HEIGHT='300' BORDER='2' BGCOLOR='#0033FF' cellpadding=40 cellspacing=50">
				  <tr style="background-color:#16639b;font-weight:bold;font-size:15px;color:#fff;">
				  <TD rowspan=5 >
				  <img src="images/m1.jpg" alt="" class="blog_img img-responsive"  height='230' width='230'/>
				  </TD>
				  <td rowspan=5> WELCOME:<BR><?php echo $a['fname']; ?></td>
				  </TR>
				  <tr></tr>
				  <tr></tr>
				   <tr></tr>
				  <tr></tr>
				  <TR style="background-color:#920808;font-weight:bold;font-size:15px;color:#fff;">
				  <TD colspan=2>NAME: <?php echo $a['fname'].$a['lname']; ?></TD>
				  </TR>
				   <TR style="background-color:#920808;font-weight:bold;font-size:15px;color:#fff;">
				  <TD colspan=2>FACULTY ID:<?php echo $a['f_id']; ?></TD>
				  </TR>
				   <tr style="background-color:#920808;font-weight:bold;font-size:15px;color:#fff;">
				  <TD colspan=2>course:<?php echo $a['course']; ?></td>
				  </tr>
				  <TR style="background-color:#920808;font-weight:bold;font-size:15px;color:#fff;">
				  <TD  colspan=2 >Email:<?php echo $a['email']; ?></td>
				  </TR>
				  <tr style="background-color:#920808;font-weight:bolder;font-size:15px;color:#fff;">
				  <TD colspan=2>phone no:<?php echo $a['mobile_no']; ?></td>
				  </tr>
				  
				  </TABLE></form>
				  </div>
			 <div class="col-md-8 company_ad">
	     	 <h3>WELCOME TO OUR FACULTY</h3>
			 <H3>  <img src="images/t-pic9.jpg" alt="" class="blog_img img-responsive" /></H3>
			 <div style="height:340px;width:100%;border:solid;float:right;background-color:#920808;">
			 
			 
			 <marquee behavior="scroll" direction="up" onMouseOver="this.stop();" onMouseOut="this.start();"><ul style="background-color:#920808;font-weight:bold;font-size:15px;color:#fff;">
			 <li>THINGS TO KNOW</li> 
			 <li>Welcome to NDL– a five thousand-strong, global online learning community,  high-quality resources to help you develop essential, certified workplace skills.
			 
			 <li>New skills and knowledge makes you a more valuable employee, whether working for yourself, for an employer, or future employer.</li>
			 <li>More than anything, learning with NDL will improves confidence giving you the hunger to learn more and make you more independent</li>
			 <li>Over 14% of our graduates stated in our NDL Graduate Survey 2014 that learning with NDL helped them get a new job, a promotion, or college placement, an opportunity for success open to you for free.</li>
			 </ul>
			 </marquee>	 
			 </div> 
	</div></div> 
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
<?php
}
?>