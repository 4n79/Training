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
$course=$_POST['course'];
$username=$_POST['uname'];
$comment=$_POST['comment'];



mysql_query("INSERT INTO suopload(fname, lname, username,Course,comment)VALUES('$fname', '$lname','$username','$course','$comment')");
header("location: suploadform.php?remarks=success");
mysql_close($con);
?>

