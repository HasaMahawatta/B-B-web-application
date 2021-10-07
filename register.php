<?php
$con = mysqli_connect("localhost","root","","b&b");
if(isset($_POST['reg_btn']))
  {
	 $name = $_POST['Name'];
     $password = $_POST['Password'];
     $email = $_POST['Email'];
     $role = $_POST['role'];
	 if(mysqli_query($con,"INSERT INTO `register`(`id`,`name`,`password`,`email`,`role`) VALUES (NULL,'$name','$password','$email','$role')"))
		 {
		   header("location:?s=1");
		  
		 }
		 else
		 {
			 header("location:?e=1");
			
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
		 var x=document.forms["form1"]["pass"].value;
		 var y=document.forms["form1"]["cpass"].value;
		 var z=document.forms["form1"]["name"].value;
		 var a=document.forms["form1"]["email"].value;
		 if(x!=y)
		   {
			   swal('Oops!','Password And Confirm Password Do Not Match!','warning');
			   return false;
		   }
		 if(x=='' || y=='' || z=='' || a=='')
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
       <div id="reg"><h1><span>Please Register</span></h1></div>
        <p>&nbsp;</p>
        <table width="700" border="0" id="register" align="center" style="border:1px solid #00FF00">
  <tbody>
    <tr>
      <td>Name</td>
      <td><input type="text" id="name" placeholder="Name" name="Name""></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" id="pass"  placeholder="Password" name="Password"></td>
    </tr>
    <tr>
      <td>Confirm Password  </td>
      <td><input type="password"  id="cpass" placeholder="Confirm Password" name="CPassword"></td>
    </tr>
    <tr>
    <td>E-Mail</td>
    <td><input type ="text" id="email" placeholder="e-mail" name="Email"></td>
    </tr>
    <tr>
    <td></td>
    <tr>
     <td>Role</td>
     <td><label>Home Renter<input type = "radio" name ="role" value ="Home Renter" checked/></label>
         <label>Tourist<input type = "radio" name ="role" value ="Tourist" /></label>
     </td>   
     </tr>
  	<tr>
    <td></td>
    <td></td>
    </tr>
    <tr>
    <td></td>
    <td><input name="reg_btn" type="submit" value="Submit">
        <input type="reset" value="Cancel" onClick="cancel()"></td>

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
	  echo "<script>swal('Congratulations!','You Have Successfully Registered!','success')</script>";
  }
 ?>
 </div>
</body>
</html>
