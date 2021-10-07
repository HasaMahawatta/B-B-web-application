<?Php

//$con = mysqli_connect("localhost", "root", "","b&b");

//if (!$con)
//{
//	die('Could not connect:' .mysql_error());
//}

$con = mysqli_connect("localhost","root","","b&b");



 
 


//$sql= ("INSERT INTO `b&b`.`advertise`(`name`,`email`,`address`, `rent`, `contact`, `info`)VALUES ('".$name."', '".$email."', '".$address."', '".$rent."' , '".$contact."', '".$info."'); ");

 // if(mysqli_query($con,$sql))
  //{
	 // echo'sucessfully inserted';
	//  }

//mysql_close($con);

?>
<!doctype html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="css/sweetalert2.min.css">
	<title>Advertise-B&B </title>
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
 <body id="wrapper">
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
				<a href="contact.php">contact</a>
			</li>
		</ul><br>
       </div> 
     
        </div>

<div id="body">


<h2><span><div id="reg">Enter The Details For Advertise....</span></h2></div>
		
        <form method="post" action="upload.php" name="form" id="form" enctype="multipart/form-data" onSubmit="return checker()>
        
        <table width="200" border="0" id="advertise">
        
        <tbody>
        <tr>
        
        <td>  </td>
        
        <td> <input type="text" required placeholder="Name" name="name" > </td> </tr>
        
        <tr>
    <td></td>
    <td><input type="email" required placeholder="E-mail" name="email"></td>
    </tr>
            <tr>
    <td></td>
    <td><input type="text" required placeholder="Lodge Name" name= "LodgeName"></td>
    </tr>

    
       <tr>
       
      <td> </td>
      <td><input type="text" required placeholder="Address of The Lodging" name="address" pattern="[A-Za-z]{1,20}"></td>
    </tr>
        
            <tr>
       
      <td> </td>
      <td><input type="number" required placeholder="Rental Fee" name="rent" pattern="[A-Za-z]{1,20}"></td>
    </tr>
    
        <tr>
       
      <td> </td>
      <td><input type="number" required placeholder="Contact Number" name="contact" pattern="[A-Za-z]{1,20}"></td>
    </tr>
    
    <tr>
    <td> </td>
    
   <td> <textarea name="info" id="txtInfo" required placeholder="Additional Information"></textarea> </td>
        </tr>
        
   <tr>
    <td> <input type="file" accept="image/jpeg" name="upload"> <br><br></td>
    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" id="submit" name="submit" value="upload">Advertiise</button>    
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" value="Cancel" onClick="cancel()">Cancel</button></td>
   </tr>
   
  </tbody>
</table>

        </form>
	</div>
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





	
