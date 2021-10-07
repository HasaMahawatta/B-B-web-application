<?php
session_start();
$con=mysqli_connect("localhost","root","","bnb");
if(isset($_SESSION['renter'])) { $name=$_SESSION['renter'];}
if(isset($_SESSION['tourist'])) { $name=$_SESSION['tourist'];}
if(isset($_GET['loc'])) { $loc=$_GET['loc']; } else { $loc="";}
if(isset($_GET['cat'])) { $cat=$_GET['cat']; } else { $cat="";}
$search=mysqli_query($con,"SELECT * FROM  `lodges` WHERE `Location` LIKE '%$loc%' AND `Category` LIKE '%$cat%'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title> Listings B&B Accomodations </title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  <!-- Optional theme -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.0.min.js" defer></script>
 <script src="dist/js/bootstrap-checkbox.min.js" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets\font-awesome-4.7.0\css\font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets\font-awesome-4.7.0\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets\css\listings.css">


</head>

<body style="background-color:#D3D3D3">
<div class="wrapper">

       <nav class="navbar navbar-default navbar-fixed-top" style="background: #ffffff;border-bottom: 4px solid #9CCC65;"> <!--  Navigation -->
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
                    <li><a href="home.php">HOME</a></li> 
                    <li><a href="listings.php">LISTINGS</a></li> 
                    <li><a href="About-Us.php">ABOUT US</a></li> 
                    <li><a href="ContactUs.php">CONTACT US</a></li> 
                    <?php if(isset($_SESSION['renter']) || isset($_SESSION['tourist'])) {  ?>
                     <li><a href="#">Hi, <?php echo $name;  ?></a></li>
                     <li><a href="logout.php">Logout</a></li>
                    <?php } else {?>
                    <li><a href="Register.php">REGISTER</a></li>
                    <li><a href="Login.php">LOGIN</a></li>  
                    <?php } ?>
           
                </ul> 
            </div> 
         </div> 
      </nav> <!--  Navigation -->

      
      <section class="breadcrumbs" style="background-image: url(assets/images/breadcrumbs/Img_under_nav.jpg); padding-top: 62px">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1 class="h1" style="color: #fff; font-size:25px ">Listings</h1>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb">
              <li><a href="#file:///D:/BSC%20IN%20IT/3rdYear/ITPDM/Bootstrap/deluxhotel/index.html" style="font-size: 20px;" >Home</a><i class="fa fa-angle-right"></i></li>
              <li class="active" style="font-size: 20px;">Listings</li>
            </ol>
          </div>
        </div>
      </div>
    </section>






    <section class="gallery best-room"> <!-- TabsPanel -->
      <h2 class="h2" style="padding-top: 20px">Best Lodges For Your Comfort</h2>
          <ul class="portfolio-sorting">
              <li><a href="?cat=" data-group="all" class="">All</a></li>
              <li><a href="?cat=Double" data-group="double" class="">Double</a></li>
              <li><a href="?cat=Luxury" data-group="lux">Luxury</a></li>
              <li><a href="#" data-group="standard">Standard</a></li>
              <li><a href="#" data-group="economic">Economic</a></li>
            </ul>
                    <!-- TabsPanel -->

      <div class="row">
          <div class="col-lg-4" style="margin-left: 99px;">
          <h4 style="text-align: left;">Search Lodges by city </h4>
    <form method="get">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Location" name="loc" style="height: 45px;">
      <input type="text" class="form-control" placeholder="Category" name="cat" style="height: 45px;">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Go!</button>
      </span>
    </div><!-- /input-group -->
    </form>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->

      </div>


      <div class="best-rooms-carosel"> <!-- part2- rooms selection -->
            <div class="row" style="margin: 50px">
              <?php while($lodge=mysqli_fetch_array($search)) { ?>
                <div class="col-md-3 col-sm-6 col-xs-12" style="margin:0px 50px; padding:0px; background-color:#ffffff">  <!-- Lodge -->
                    <img class="img-responsive" src="assets\img\<?php echo $lodge['Image'];?>" >
                   <div class="best-room_t"><a href="best-rooms-detail.html"><?php echo $lodge['Title'];?></a></div>
                   <div class="best-room_desc"><?php echo $lodge['Description'];?>
                </div>
                <div class="best-room_price">
                  <span class="price">Rs <?php echo $lodge['Price'];?></span> / Day
                </div>

                  <center>
                  <div class="lodge-rating">
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star" aria-hidden="true"></i>
                   <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                </center>

                </div>  <!-- lodge -->
               <?php  } ?>
              

            </div>
        </div>   <!-- part2- rooms selection -->
    </section> <!-- section 1 end -->



    <div class="footer-bottom"> <!-- footer -->
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-bottom_copy" style="color: #ffffff">Copyright © 2016 B&amp;B Lodges. </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-bottom_links" style="float: right;">
          <a class="active" href="index.html">Home</a>
              <a href="gallery.html">Listings</a>
              <a href="blog.html">Contact Us</a>
              <a href="wizzard-step1.html">About Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>    <!-- footer -->



      </div>
</body>