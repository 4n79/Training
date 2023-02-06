<?php
session_start();
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "alldata";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

$cn=$_POST['course_id'];
$fn=$_POST['faculty_name'];
$fd=$_POST['upload_date'];
$st=$_POST['submission_till'];
$tn=$_POST['topic_name'];
$c=$_POST['comment'];
$mm=$_POST['max_marks'];
$cnn=$_POST['course_name'];



mysql_query("INSERT INTO fopload(faculty_name,course_name,upload_date,submission_till,topic_name,comments,max_marks,course_id)VALUES( '$fn','$cnn','$fd', '$st','$tn','$c','$mm','$cn')");
header("location:fuploadform.php?remarks=success");
mysql_close($con);
?>
	

