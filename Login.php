<?php
session_start();
$con =mysqli_connect("localhost","root","","bnb");

if(isset($_POST['btnLogin']))
{
  $UserName=$_POST['txtUserName'];
  $Password=md5($_POST['txtPassword']);
  $Type=$_POST['txtType'];
  if($Type==1) // Tourist
  {
    $qy=mysqli_num_rows(mysqli_query($con,"SELECT Id FROM Tourist where Email = '$UserName' and Password = '$Password'" ));
    if($qy==1)
    {
      $_SESSION['tourist']=$UserName;
      header("Location:home.php");
    }
    else
    {
     //Wrong Credentials
      header("Location:?error=1");
    }
  }
  if($Type==0) // Renter
  {
    $qy=mysqli_num_rows(mysqli_query($con,"SELECT Id FROM Renter where Email = '$UserName' and Password = '$Password'" ));
    if($qy==0)
    {
      $_SESSION['renter']=$UserName;
      header("Location:RentersAdmin.php");
    }
    else
    {
     //Wrong Credentials
       header("Location:?error=1");
    }
  } 

}




?>





<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>


  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<!-- jQuery library -->
<script rel="assets/css/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script href="assets/css/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="assets/images/favicon/favicon.png">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
 <!--  Sweet ALERT -->
<script src="assets/js/sweetalert2.min.js"></script>
<link rel="stylesheet" href="assets/css/sweetalert2.min.css">


<script type="text/javascript">

  function validateEmail()
{
  var email = document.getElementById("email").value;
  var at = email.indexOf("@");
  var dot = email.lastIndexOf(".");
  var len = email.length;
  if ((((dot - at) > 2))&& (len > dot) && (at > 1))
  {
    return true;  
  }
  else
  {
    alert("Please enter a valid email");
    return false;
  }
}


 function passwrd()
  {
    var x = document.getElementById("pass").value;
      if(x=="")
      {
        alert("password cannot be empty");
      }
      else
  {
    return true;
  }
}


   function vaidation()
  {
      if(  validateEmail() || passwrd() )
      {
        return true;
        
      }
      else
      {
  alert("fill in all the fields");
    
     }
  }

</script>


</head>

<body>
	

   <nav class="navbar navbar-default navbar-fixed-top" style="background: #ffffff;border-bottom: 4px solid #9CCC65;" > <!--  Navigation -->
         <div class="container-fluid"> 
            <div class="navbar-header"> 
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6" aria-expanded="false"> 
                     <span class="sr-only">Toggle navigation</span> 
                     <span class="icon-bar"></span> 
                     <span class="icon-bar"></span> 
                     <span class="icon-bar"></span> 
                </button> 
                <a href="#" class="navbar-brand"><img src="assets\img\logo.png" width="40px"></a> 
            </div> 
            <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-6" aria-expanded="false" style="height: 1px;"> 
                <ul class="nav navbar-nav navbar-right"> 
                     <li><a href="home.php" style="color:#777";>HOME</a></li> 
                    <li><a href="listings.php" style="color:#777">LISTINGS</a></li> 
                    <li><a href="About-Us.html" style="color:#777">ABOUT US</a></li> 
                    <li><a href="ContactUs.html" style="color:#777">CONTACT US</a></li> 
                    <li><a href="Register.php" style="color:#777">REGISTER</a></li>
                    <li><a href="Login.php" style="color:#777">LOGIN</a></li>   
           
                </ul> 
            </div> 
         </div> 
      </nav> <!--  Navigation -->

	<!-- breadcrumbs -->
    <section class="breadcrumbs" style="background-image: url(assets/images/breadcrumbs/reservation.jpg);padding-top: 62px">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1 class="h1"  style="font-size:25px">Login</h1>
          </div>
          <div class="col-md-6">
            
          </div>
      <div class="col-md-6">
            <ol class="breadcrumb">
              <li><a href="index.html" style="font-size: 20px;">Home</a><i class="fa fa-angle-right"></i></li>
              <li class="active" style="font-size: 20px;">Login</li>
            </ol>
          </div>
          </div>
          </div>
    </section>
    <!-- /breadcrumbs -->

    <!-- Login form -->

     <div class="wizzard" style="padding-bottom: 120px; padding-left: 100px; padding-top: 30px;>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form method="post" name="loginform" class="form-wizzard form-horizontal" onsubmit="return empty()">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input  name="txtUserName" class="form-control" id="email" type="text" placeholder="Enter Email ..."/>
                  </div>
                </div>  
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Password</label>
                    <input name="txtPassword" class="form-control" id="pass" type="password" placeholder="Enter password ..."/>
                  </div>

              
               <div class="form-group">
                    <label>Type</label>
                    <select name="txtType" class="form-control">
                    <option value="1">Tourist</option>
	                    <option value="0">Renter</option>
	    				
	    			</select>
                  </div>
                </div>  
              </div>

             
              <div class="wizzard-confirm" >
                <button name="btnLogin"  type="submit" class="btn btn-success btn-lg" onclick="vaidation()" style="background-color: #9CCC65;">Login</button>
                 <a href="Register.php"  <button class="btn btn-success btn-lg" style="background-color: #9CCC65;">Register</button></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- footer bottom -->

     <footer class="footer" ">

    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"  >
            <div class="footer-bottom_copy">Copyright © 2016 B&B Lodges </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-bottom_links">
              <a  href="index.html">Home</a>
              <a href="gallery.html">Listings</a>
              <a  href="blog.html">Contact Us</a>
              <a  href="wizzard-step1.html">About Us</a>
         
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

<?php
if(isset($_GET['error']))
  {
  $error=$_GET['error'];
  if($error==1)
    {
      echo "<script>swal('Oops!','Wrong username or password!','warning')</script>";  
    }
  }
?>
</body>
</html>

