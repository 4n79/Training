<?php error_reporting(0);
?>	    
<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["f_id"].value;
var b=document.forms["reg"]["fname"].value;
var c=document.forms["reg"]["lname"].value;
var d=document.forms["reg"]["email"].value;
var e=document.forms["reg"]["mobile_no"].value;
var f=document.forms["reg"]["course"].value;
var g=document.forms["reg"]["password"].value;

if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="")&& (f==null || f=="")) 
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("Faculty id  must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("first name must be filled out");
  return false;
  }
  if (c==null || c=="")
  {
  alert("last must be filled out");
  return false;
  }
  if (d==null || d=="")
  {
  alert("email must be filled out");
  return false;
  }
  if (e==null || e=="")
  {
    alert("mobile_no must be filled out");
  return false;
  }
if (f==null || f=="")
  {
  alert("course must be filled out");
  return false;
}
if (g==null || g=="")
  {
  alert("password must be filled out");
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
				<li class="active"><a href=" ">ADMINSTRATOR RIGHT ONLY</a></li>
				 <li><a href="home.php">HOME</a></li>
				<li><a href=" ">NEW FACULTY UPLOADED FORM</a></li>
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
				  	<p STYLE="color: #999;font-size: 15PX;line-height: 1.8em;">THIS IS NEW FACULTY MEMBER UPLOAD FORM TO NDL WEBSITE </p>
					    <form name="reg" action="faccess.php" onSubmit="return validateForm()" method="post">
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
    <td width="95"><div align="right">FACULTY_ID:</div></td>
    <td width="171"><input type="text" name="f_id" class="form-control" /></td>
  </tr>
  <tr>
    <td><div align="right">FIRST NAME:</div></td>
    <td><input type="text" name="fname" class="form-control" /></td>
  </tr>
  <tr>
    <td><div align="right">LAST NAME:</div></td>
    <td><input type="text" name="lname" class="form-control" /></td>
  </tr>
   <tr>
    <td><div align="right">EMAIL:</div></td>
    <td><input type="email" name="email" class="form-control" /></td>
  </tr>
   <tr>
    <td><div align="right">MOBILE_NO:</div></td>
    <td><input type="text" name="mobile_no" class="form-control" /></td>
  </tr>
  <tr>
    <td><div align="right">COURSE:</div></td>
    <td><input type="text" name="course"  class="form-control"/></td>
  </tr>
   <tr>
    <td><div align="right">password:</div></td>
    <td><input type="password" name="password"  class="form-control"/></td>
  </tr>
    <tr>
    <td><div align="right"></div></td>
    <td> <label class="fa-btn btn-1 btn-1e"><input name="submit" type="submit" value="upload new member" /></label></td>
  </tr>
</table>
</form>
						
						</div></div>
						
						
						 <div class="col-md-6 company_ad">
						
			 <h3>NEW DISTANCE LEARNING </h3>
			 <H3><img src="images/nn.jpg" alt="" class="blog_img img-responsive"/></H3>
	</div>
</div>
</div>


<div id="d1">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12footet-left">
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