<?php
session_start();
 $con = mysqli_connect("localhost","root","","b&b") or die("could not connect ".mysql_error());
 date_default_timezone_set("Asia/Colombo");
 //$dob="($dobYear)-($dobmonth)-($dobDate)";
// $inputdob=date("Y-m-d",strtotime($dob));
$sdate=strtotime(date("Y-m-d"));
$edate=strtotime(date("Y-m-d"));
//$dnt=".date('d M Y',$date)";
  

if(isset($_POST['pro_btn'])){
    $name=$_POST['CHN'];
	$number=$_POST['Snumber'];
 	$sdate=$_POST['Cdate'];
	$edate =$_POST['Odate'];
	$nog = $_POST['NOG'];
   if(mysqli_query($con,"INSERT INTO `reserve`(	`id`,`Sdate`,`Edate`,`NOG`,`CHN`,`Snumber`)VALUES ('NULL','$sdate','$edate','$nog','$name','$number')"));
     {
		header("location:?s=1");
		 }
   
}

?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="css/sweetalert2.min.css">
	<title>Register-B&B </title>
	<link rel="stylesheet" type="text/css" href="css/default.css">
   <style> 
    body{
    
        background-image:url(images/background.jpg);
		height:100%;
		background-postion:center;
		background-repeat:repeat;
	    }
   </style> 
    
    
	<script type="text/javascript" language="javascript">
	function cancel()
	{
		swal({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes!'
		}).then(function () {
		     window.location="index.php";
		})
	}
	function checker()
	 {
		 var x=document.forms["form1"]["Cdate"].value;
		 var y=document.forms["form1"]["Edate"].value;
		 var z=document.forms["form1"]["number"].value;
		 var a=document.forms["form1"]["name"].value;
		
		 if(x!=y)
		   {
			   swal('Oops!',' enter valid dates!','warning');
			   return false;
		   }
		 if(x=='' || y=='' || z=='' || a==''  )
		   {
			   swal('Oops!','Please Complete All Fields!','warning');
			   return false;
		   }
	 }
	</script>
</head>
<body>
  <div id="wrapper">
	<div id="header">
			<a href="index.php" id="logo">
			<img src="images/logoo.jpg" alt="">
		</a>
        <div id="menu">
		<ul>
			<li class="selected" id ="#lia">
				<a href="index.php">home</a>
			</li>
			<li>
				<a href="search.php">search</a>
			</li>
            <?php if(isset($_SESSION['user'])) { ?>
            <li>
				<a href="advertiseP.php">Rent</a>
			</li>
            
		
            <?php } else { ?>          
			
			<?php } ?>
			<li>
				<a href="contact.html">contact</a>
			</li>
		</ul><br>
       </div> 
     
        </div>
	<div id="body">
		<form method="post" name="form1" id="form1" onSubmit="return checker()">
       <div id="reg"><h1><span>Book The Lodge..</span></h1></div>
        <p>&nbsp;</p>
        <table width="400" border="0" id="register" align="center" style="border:1px solid #00FF00">
  <tbody>
    <tr>
    <td>Start Date</td>
    <td><input type="date" id="Cdate " name="Cdate"></td>
    </tr>
    <tr></tr>
    <tr>
    <td>End Date</td>
    <td><input type="date" id="Edate " name="Odate"></td>
    </tr>
    <tr> 
      <td>Number of Guests</td>  
      <td><input type="number" id="number" placeholder="Enter the number of guests" name="NOG"></td>   
     </tr>
         <tr> 
      <td>Card holder Name</td>  
      <td><input type="text" id="name" placeholder="Enetr card holder name" name="CHN"></td>   
     </tr>
         <tr> 
      <td>Card Number</td>  
      <td><input type="password" id="number"  placeholder="Security Number" required pattern="[0-9]{1,3}" name="Snumber"></td>   
     </tr>
    <tr>
    <td></td>
    <td><input name="pro_btn" type="submit" value="pay and book">
        <input type="reset" value="Reset" onClick="cancel()"></td>

    </tr>
  </tbody>
</table>

        </form>
	</div>
	 <div id="footer">
		<p>&copy; Untitled. All rights reserved. Design by B&B by 2017</p>
	</div>
 <?php
 if(isset($_GET['s']))
  {
	  echo "<script>swal('Congratulations!','You Have Successfully Reserved!','success')</script>";
  }
 ?>
 <?php
if(isset($_GET['e']))
 {
   $error=$_GET['e'];
   if($error==1)
    {
        echo "<script>swal('Oops!','Lodge has been already reserved!','warning')</script>";
    }
 }
?>   
 </div>
</body>
</html>
