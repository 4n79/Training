<?php
error_reporting(0);
include_once 'connection.php';
 ?>
<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["course_id"].value;
var b=document.forms["reg"]["course_name"].value;
var c=document.forms["reg"]["faculty_name"].value;
var d=document.forms["reg"]["upload_date"].value;
var e=document.forms["reg"]["submission_till"].value;
var f=document.forms["reg"]["topic_name"].value;
var g=document.forms["reg"]["comment"].value;
var h=document.forms["reg"]["max_marks"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f=="")) 
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("course_id  must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("course_name must be filled out");
  return false;
  }
  if (c==null || c=="")
  {
  alert("faculty_name must be filled out");
  return false;
  }
  if (d==null || d=="")
  {
  alert("upload-date must be filled out");
  return false;
  }
  if (e==null || e=="")
  {
    alert("submission_till must be filled out");
  return false;
  }
if (f==null || f=="")
  {
  alert("topic_name must be filled out");
  return false;
}
}
</script>
<!DOCTYPE HTML>
<html>
<head>
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
				<li class="active"><a href=" ">WELCOME TO UPLOAD STUDY MATERIAL</a></li>
				 <li><a href="fhomepage.php"> FACULTY HOME</a></li>
				<li><a href="fassignment.php">DOWNLOAD ASSIGNMENT</a></li>
				<li><a href="flogout.php">LOGOUT</a></li>
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
				  	<p STYLE="color: #999;font-size: 15PX;line-height: 1.8em;">WELCOME,FILL THE FOLLOWING FIELD TO UPLOAD </p>
					    <form name="reg" action="fuploadformaccess.php" onSubmit="return validateForm()" method="post">
						
					 
						<table width="274" border="0" align="left" cellpadding="2" cellspacing="0">
  <tr>
  <td colspan="2">
		<center>  <?php 
		$remarks=$_GET['remarks'];
		if ($remarks==null and $remarks=="")
		{
		echo 'FILL THE FIELD';
		}
		if ($remarks=='success')
		{
		echo 'UPLOAD SUCCESS';
		}
		?>	</center>
		 </td>
      </tr>
  <tr>
    <td width="95"><div align="right">COURSE_ID:</div></td>
    <td width="85"><input type="text" name="course_id" class="form-control" /></td>
  </tr>
  <tr>
    <td><div align="right">COURSE_NAME:</div></td>
    <td><input type="text" name="course_name" class="form-control" /></td>
  </tr>
   <tr>
    <td><div align="right">FACLTY_NAME:</div></td>
    <td><input type="text" name="faculty_name" class="form-control" /></td>
  </tr>
  <tr>
    <td><div align="right">UPLOAD_DATE:</div></td>
    <td><input type="text" name="upload_date" class="form-control" /></td>
  </tr>
   <tr>
    <td><div align="right">SUBMISSION_TILL:</div></td>
    <td><input type="text" name="submission_till" class="form-control" /></td>
  </tr>
   <tr>
    <td><div align="right">TOPIC_NAME:</div></td>
    <td><input type="text" name="topic_name" class="form-control" /></td>
  </tr>
  <tr>
    <td><div align="right">COMMENTS:</div></td>
    <td><textarea name="comment" class="form-control"> </textarea></td>
  </tr>
  <tr>
    <td><div align="right">MAXIMUM_MARKS:</div></td>
    <td><input type="text" name="max_marks"  class="form-control"/></td>
  </tr>
  
    <tr>
    <td><div align="right"></div></td>
    <td> <label class="fa-btn btn-1 btn-1e"><input name="submit" type="submit" value="submit" /></label></td>
  </tr>
</table>
</form>
</div></div>
<div class="col-md-6 company_ad">
						
			<div id="header9">
<label>UPLOAD STUDY MATERIAL</label>
</div>
<div id="body9">
	<form action="uploads.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	<button type="submit" name="btn-upload">upload</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  </label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
	}
	?>
</div>
<div id="footer">
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
					<p>Tel:+91 90 9090 9090</p>
					<p>Fax:+91 90 9090 9090</p><p>Email:<a class="email-link" href="https://mail.google.com/mail/" target="_blank">                ndl@gmail.com</a></p>
					</ul>
					
					</div>
			</div>
		</div></div>
</body>
</html>