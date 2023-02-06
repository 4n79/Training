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
$gender=$_POST['gender'];
$address=$_POST['address'];
$username=$_POST['uname'];
$password=$_POST['password'];
$pin_code=$_POST['pin_code'];


mysql_query("INSERT INTO studentdata(fname, lname, address,gender,mobile_no,email,username,password,pin_code,Course)VALUES('$fname', '$lname','$address', '$gender','$mobile_no', '$email','$username','$password',$pin_code,'$course')");
header("location: registration.php?remarks=success");
mysql_close($con);
?>