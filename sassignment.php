<?php
include_once 'connection.php';
 ?>
 <!DOCTYPE HTML>
<html>
<head>
<title>Learner a education bootstrap Website Template | Contact :: w3layouts</title>
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
			<p>DDO AND CHANGE</p>
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
		        <li class="active"><a href="">WELCOME TO DOWNLAOD STUDY MATERIAL</a></li>
				<li><a href="homepage.php"> STUDENT HOME</a></li>
				 <li><a href="suploadform.php">UPLOAD STUDY MATERIAL</a></li>
				 <li><a href="slogout.php">LOGOUT</a></li>
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
</div></div>
<div class="main_btm">
	<div class="container">
		<div class="main row">
			    <div class="col-md-6 company_ad">
<div id="header9">
<label>STUDY MATERIAL UPLOADED BY FACULTY</label>
</div>
<div id="body9">
	<table width="80%" border="1">
    <tr>
    <th colspan="4">UPLOADED FILES BY FACULTY<label></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
	$sql="SELECT * FROM tbl_uploads";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">download your files</a></td>
        </tr>
        <?php
	}
	?>
    </table>
    </div>
   </div>
				<div class="col-md-6" style="background-color:#990000;color:#FFFFFF;font-size:15px;font-weight:150;">
				<table border="1"cellpadding="5" cellspacing="5" style="font-family:Arial, Helvetica, sans-serif;"><tr>
	<td>FACULTY</td>
	<td>COURSE</td> 
	<td>UPLOAD</td>
	<td>SUMISSION</td>  
	<td>TOPIC</td>
	<td>COMMENTS</td>  
	<td>MARKS</td>
	<td>COURSEID</td> 
	</TR> </table>
				
				<?php


$query = mysql_query("SELECT * FROM fopload");

while ($rows = mysql_fetch_array($query))
 { 
      $a= $rows['faculty_name'];
      $b = $rows['course_name'];
      $c= $rows['upload_date'];
	  $d = $rows['submission_till'];
	  $e = $rows['topic_name'];
	  $f = $rows['comments'];
	  $g = $rows['max_marks'];
	  $h = $rows['course_id'];
	 echo"$a-$b-$c-$d-$e-$f-$g-$h<br>";	
} 

?>
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