
<?php
session_start();
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "alldata";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");


$email=$_POST['email'];



mysql_query("INSERT INTO emails(email)VALUES( '$email')");
header("location:msexcell.php?remarks=success");
mysql_close($con);
?>
