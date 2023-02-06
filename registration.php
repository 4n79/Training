<?php
error_reporting(0);
 ?>
<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["fname"].value;
var b=document.forms["reg"]["lname"].value;
var c=document.forms["reg"]["uname"].value;
var d=document.forms["reg"]["password"].value;
var e=document.forms["reg"]["email"].value;
var f=document.forms["reg"]["address"].value;
var g=document.forms["reg"]["mobile_no"].value;
var h=document.forms["reg"]["pin_code"].value;
var i=document.forms["reg"]["gender"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="") && (g==null || g=="")&& (h==null || h=="") && (i==null || i=="")) 
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("first name  must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("last name must be filled out");
  return false;
  }
  if (c==null || c=="")
  {
  alert("user name must be filled out");
  return false;
  }
  if (d==null || d=="")
  {
  alert("password must be filled out");
  return false;
  }
  if (e==null || e=="")
  {
    alert("email must be filled out");
  return false;
  }
if (f==null || f=="")
  {
  alert("address must be filled out");
  return false;
}
if (g==null || g=="")
  {
  alert("mobile no must be filled out");
  return false;
}
if (h==null || h=="")
  {
  alert(" pin code must be filled out");
  return false;
}
if (i==null || i=="")
  {
  alert("gender must be filled out");
  return false;
}
if (j==null || j=="")
  {
  alert("course must be filled out");
  return false;
}
}
</script>
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
				<li class="active"><a href=" ">WELCOME TO REGISTRATION FORM</a></li>
				 <li><a href="home.php">HOME</a></li>
				
		      </ul>
		    </div>

		</nav>
		
	
	</div>
	<div class="clearfix"></div>
</div>
</div>
<div class="main_btm">
	<div class="container">
		<div class="main row">
				<div class="col-md-6">
				  <div class="contact-form">
				  	<p STYLE="color: #999;font-size: 15PX;line-height: 1.8em;">WELCOME,PLEASE FILL THE FOLLOWING FIELD TO REGISTER AND IF YOUR HAVE ALLREADY REGISTER THEN CLICK HERE:<a class="email-link" href="slogin.php">LOGIN</a></p>
					    <form name="reg" action="code_exec.php" onSubmit="return validateForm()" method="post">
					<table width="274" border="0" align="left" cellpadding="2" cellspacing="0">
  <tr>
  <td colspan="2">
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
		?>	</center>
		 </td>
      </tr>
  <tr>
    <td width="95"><div align="right">FIRSTNAME:</div></td>
    <td width="85"><input type="text" name="fname" class="form-control" /></td>
  </tr>
  <tr>
    <td><div align="right">LASTNAME:</div></td>
    <td><input type="text" name="lname" class="form-control" /></td>
  </tr>
  <tr>
    <td><div align="right">USERNAME:</div></td>
    <td><input type="text" name="uname" class="form-control" /></td>
  </tr>
   <tr>
    <td><div align="right">PASSWORD:</div></td>
    <td><input type="password" name="password" class="form-control" /></td>
  </tr>
   <tr>
    <td><div align="right">EMAIL:</div></td>
    <td><input type="email" name="email" class="form-control" /></td>
  </tr>
  <tr>
    <td><div align="right">ADDRESS:</div></td>
    <td><textarea name="address" class="form-control"> </textarea></td>
  </tr>
  <tr>
    <td><div align="right">MOBILENO:</div></td>
    <td><input type="text" name="mobile_no"  class="form-control"/></td>
  </tr>
  <tr>
    <td><div align="right">PINCODE:</div></td>
    <td><input type="text" name="pin_code"  class="form-control"/></td>
  </tr>
    <tr>
    <td><div align="right">GENDER:</div></td>
    <td><input type="text" name="gender"  class="form-control"/></td>
  </tr>
    <tr>
    <td><div align="right">COURSE:</div></td>
    <td><div style="width:40%;">
						    	<sELECT style="width:200%;" class="form-control" name="course" >SELECT YOUR COURSE
									<OPTION >BCA</OPTION>
								
									<OPTION>PHOTOSHOP</OPTION>
									
									<OPTION>GERMAN</OPTION>
									
									<OPTION>MS.EXCEL</OPTION>
									<OPTION>MS.WORD</OPTION>
									
									</sELECT></div></td>
  </tr>
    <tr>
    <td><div align="right"></div></td>
    <td> <label class="fa-btn btn-1 btn-1e"><input name="submit" type="submit" value="submit" /></label></td>
  </tr>
</table>
</form>
						
						</div></div>
						
						
						 <div class="col-md-6 company_ad">
						
			 <h3>NEW DISTANCE LEARNING </h3>
			  <H3> <img src="images/a.jpg" alt="" class="blog_img img-responsive"/></H3>
			 
	</div></div> 
</div>
</div>


<div id="d1">
		    <div class="container">
			<div class="row">
				<div class="col-md-4 footet-left">
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
				<div class="col-md-4 footet-left">
					<h3 class="c1">MY ACCOUNT</h3>
					<ul class="c2">
						<li><a href="slogin.php"> STUDENT LOGIN</a></li>
						<li><a href="registration.php"> STUDENT SIGNUP</a></li>
						<li><a href="flogin.php"> FACULTY LOGIN</a></li>
						</ul>
				</div>
				<div class="col-md-4 footet-left">
					<h3 class="c1">CONTACT</h3>
					<ul class="c2">
					<p>NEW DISTANCE LEARNING</P>
					<p>Tel: +91 90 9058 8450</p>
					<p>Fax: +91 90 90904225</p><p>Email:<a class="email-link" href="https://mail.google.com/mail/" target="_blank">                ndl@gmail.com</a></p>
					</ul>
					
					</div>
			</div>
		</div></div>
</body>
</html>