
<?php
session_start();
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "alldata";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
mysql_query("INSERT INTO contact(name,email,subject)VALUES('$name','$email','$subject')");
header("location:contact.php?remarks=success");
mysql_close($con);
?>