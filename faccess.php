<?php
session_start();
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "alldata";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile_no=$_POST['mobile_no'];
$course=$_POST['course'];
$f_id=$_POST["f_id"];
$f_wd=$_POST["password"];




mysql_query("INSERT INTO facultydata( f_id,fname, lname,mobile_no,email,Course,password)VALUES('$f_id','$fname','$lname','$mobile_no', '$email','$course','$f_wd')");
header("location: fregister.php?remarks=success");
mysql_close($con);
?>