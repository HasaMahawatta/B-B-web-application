<?php
session_start();
$con=mysqli_connect("localhost","root","","b&b");
$username=$_POST['username'];
$password=$_POST['password'];
$type=$_POST['type'];
if($type==1)
 {
	 $query=mysqli_query($con,"SELECT * FROM register WHERE email='$username' AND password='$password' AND role='Tourist'");
	 $rows=mysqli_num_rows($query);
	 if($rows==1) {  $_SESSION["user"]=$username; header("location:index.php"); }
	 else { header("location:?e=1");}
 }
if($type==2)
 {
	 $query=mysqli_query($con,"SELECT * FROM register WHERE email='$username' AND password='$password' AND role='Home Renter'");
	 $rows=mysqli_num_rows($query);
	 if($rows==1) { $_SESSION["user"]=$username; header("location:index.php"); }
	 else { header("location:?e=1");}
 }
 
?>
