<?php
session_start();

$username =$_POST['username'];
$password =$_POST['password'];

$con = mysql_connect("localhost","root","");
if(!$con)
	{
		die('Could not connect : '.mysql_error());
		}
	mysql_select_db("b&b",$con);
	
 $result=mysql_query("SELECT * FROM register WHERE name='$username' AND password='$password'");
 $num_rows=mysql_num_rows($result);
 mysql_close($con);
 
 if($username == $username && $password == $password)
 {
	  $_SESSION["username"]=$username;
	  header('Location:index.php'); 
	 }
  if ($username=="Admin" && $password=="Admin123");
   {
	   $_SESSION["username"]=$username;
	   header('Location: admin.php');
	   
	   }
 
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>