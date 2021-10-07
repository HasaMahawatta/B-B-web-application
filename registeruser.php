<?php
$con = mysqli_connect("localhost","root","","b&b");
if(!$con)
{
	die('Could Not Connect:'.mysql_error());
}

$name = $_POST['Name'];
$password = $_POST['Password'];
$CPassword = $_POST['CPassword'];
$email = $_POST['Email'];
$role = $_POST['role'];


if(mysqli_query($con,"INSERT INTO `b&b`.`register`(`name`, `password`, `compassward`, `email`, `role`)VALUES('".$name."', '".$password."', '".$CPassword."', '".$email.", '".$role."');"))
 {
   header("location:index.php");	 
 }



//header ('Location:index.php');

?>
<html>
<head>
<title>untitlte</title>
</head>
<body>
</body>
</html>