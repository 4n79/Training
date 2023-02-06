<?php 
error_reporting(0);   
	
	session_start();
	extract($_REQUEST);
	if($submit){
		include('connection.php');
		$r="select * from facultydata where f_id='$f_id' and email='$email' and password='$password' ";
	
		$result=mysql_query($r);
		
		
		if($row=mysql_fetch_array($result)){
			header("location:fhomepage.php");
			$_SESSION['mem_id']=$row[0];
		
		}else{
			echo "Failed";
		}
	}       
?>
<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["f_id"].value;
var b=document.forms["reg"]["email"].value;
var c=document.forms["reg"]["password"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") )
 {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("faculty_id  must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("email must be filled out");
  return false;
  }
  if (c==null || c=="")
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
				<li class="active"><a href=" ">WELCOME TO OUR FACULTY LOGIN FORM</a></li>
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
			    <div class="col-md-4 company_ad">
				 <div class="contact-form">
				  	<h2>LOGIN FORM</h2>
					     <form action="" method="post" name="reg"  onSubmit="return validateForm()">
		
					    <div>
						    	<span>FACULTY ID</span>
						    	<span><input type="text" class="form-control" name="f_id"></span>
						    </div>
						    <div>
						    	<span>e-mail</span>
						    	<span><input type="email" class="form-control" name="email"></span>
						    </div>
						    <div>
						    	<span>PASSWORD</span>
						    	<span><input type="password" class="form-control" name="password"></span>
						    </div>
						   <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="LOGIN" name="submit"></label>
						  </div>
					    </form>
				    </div>
				
				
				
				   
				</div>
				<div class="col-md-8">
				 
				 
				  <h2>NEW DISTANCE LEARNING</h2>
				   <H3> <img src="images/f.jpg" alt="" class="blog_img img-responsive"/></H3>
      				</div>		
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>

<div id="d1">
		<div class="container">
			<div class="row">
				<div class="col-md-6 footet-left">
					<h3 class="c1">MY ACCOUNT</h3>
					<ul class="c2">
						<li><a href="slogin.php"> STUDENT LOGIN</a></li>
						<li><a href="registration.php">STUDENT SIGNUP</a></li>
						<li><a href="flogin.php">FACULTY LOGIN</a></li>
						</ul>
				</div>
				<div class="col-md-6 footet-left">
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


