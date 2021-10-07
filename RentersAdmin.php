<?php

session_start();
$con=mysqli_connect("localhost","root","","bnb");
if(isset($_SESSION['renter'])) { $name=$_SESSION['renter'];} else { header("location:login.php");}


if(isset($_POST['btnSubmit']))
{

$title=$_POST['txtTitle'];
$location=$_POST['txtLocation'];
$category=$_POST['txtCategory'];
$price=$_POST['txtPrice'];
$wifi=$_POST['checkWifi'];
$ac=$_POST['checkAc'];
$attach=$_POST['checkAttach'];
$description=$_POST['txtDescription'];
$image=explode(".",$_FILES["Image"]["name"]);
$imagename=round(microtime(true)) . '.' . end($image);
move_uploaded_file($_FILES["Image"]["tmp_name"], "assets/img/".$imagename);


$query= "INSERT INTO `lodges`(`Id`, `Title`, `Location`, `Category`, `Price`, `WIFI`, `AC`, `AttachBathroom`, `Image`, `Description`) VALUES (NULL,'$title','$location','$category','$price','$wifi','$ac','$attach','$imagename','$description')";

mysqli_query($con,$query);

  

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title> RentersAdmin Dashboard </title>
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
    <link rel="stylesheet" type="text/css" href="assets\css\rentersAdmin.css">




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



      <div class="row" style="margin-top:80px; margin-left: 70px; margin-right: 50px"> <!-- page title -->
        <div class="col-md-12>">
          <h2 class="page-title" style="text-align: center;">Dashboard</h2>
          <p class="text-muted page-title-alt" style="text-align: center; padding-bottom: 20px">Welcome to B&amp;B Lodges Renters Admin panel </p>
        </div>  <!-- page title -->


        <div class="col-md-6 col-lg-3">   <!-- section-1 - tabs panel -->

                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <div class="bg-icon bg-icon-info pull-left">
                                       <i class="fa fa-usd" aria-hidden="true" style="font-size: 30px; color:#34d3eb; "></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">31,570</b></h3>
                                        <p class="text-muted"> Today Revenue</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <div class="bg-icon bg-icon-pink pull-left">
                                       <i class="fa fa-user-o"  aria-hidden="true" style="font-size: 30px; color: #797979;"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">31,570</b></h3>
                                        <p class="text-muted"> Today Revenue</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <div class="bg-icon bg-icon-purple pull-left">
                                       <i class="fa fa-plane" aria-hidden="true" style="font-size: 30px; color: #797979; "></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">31,570</b></h3>
                                        <p class="text-muted"> Today Revenue</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="widget-bg-color-icon card-box fadeInDown animated">
                                    <div class="bg-icon bg-icon-success pull-left">
                                       <i class="fa fa-eye" aria-hidden="true" style="font-size: 30px; color: #81c868;"></i>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="text-dark"><b class="counter">31,570</b></h3>
                                        <p class="text-muted"> Today Revenue</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

      </div>   <!-- section-1 - tabs panel -->

        <div class="row" style="margin-top:20px; margin-left: 70px; margin-right: 50px">

          <div class="col-md-7">
                                <div class="widget-bg-color-icon card-box fadeInDown animated" style="height: 550px">

                                    <div class="text-right" style="padding-bottom: 10px">
                                        <h4 class="PROPERTY-title">ADDED PROPERTY BY RENTERS</h4> 
                                    </div>
                                   <div class="lodge" style="display:flow-root;">  
                                      <div class="text-right" style="margin-bottom: 50px;"><!--  Lodge -->
                                        <div class="col-md-1">
                                          <h5 class="PROPERTY"><img src="assets\img\home-icon.png" style="width: 43px; height: 47px"></h5>
                                          </div>
                                          <div class="col-md-3">
                                          <h5 class="PROPERTY"><br>LISTED PROPERTY</h5>
                                          <h5 class="PROPERTY">RS.3000</h5>
                                          </div>


                                          <div class="col-md-1" style="width: 54px; height: 33px; margin-right: 10px; margin-left: 232px;  margin-top: 19px; ">
                                            <button type="button" class="btn btn-danger">Delete</button>
                                          </div>

                                          <div class="col-md-1" style="width: 54px;  height: 33px; margin-left: 13px;margin-top: 19px;">
                                            <button type="button" class="btn btn-success">Edit</button>
                                          </div>
                                      </div> <!--  Lodge -->
                                       
                                     </div> 
                                     <hr>

                                     <div class="lodge" style="display: flow-root;">  
                                      <div class="text-right" style="margin-bottom: 50px;"><!--  Lodge -->
                                        <div class="col-md-1">
                                          <h5 class="PROPERTY"><img src="assets\img\home-icon.png" style="width: 43px; height: 47px"></h5>
                                          </div>
                                          <div class="col-md-3">
                                          <h5 class="PROPERTY"><br>LISTED PROPERTY</h5>
                                          <h5 class="PROPERTY">RS.3000</h5>
                                          </div>


                                          <div class="col-md-1" style="width: 54px; height: 33px; margin-right: 10px; margin-left: 232px;  margin-top: 19px; ">
                                            <button type="button" class="btn btn-danger">Delete</button>
                                          </div>

                                          <div class="col-md-1" style="width: 54px;  height: 33px; margin-left: 13px;margin-top: 19px;">
                                            <button type="button" class="btn btn-success">Edit</button>
                                          </div>
                                      </div> <!--  Lodge -->
                                       
                                     </div> 
                                     <hr>

                                     <div class="lodge" style="display: flow-root;">  
                                      <div class="text-right" style="margin-bottom: 50px;"><!--  Lodge -->
                                        <div class="col-md-1">
                                          <h5 class="PROPERTY"><img src="assets\img\home-icon.png" style="width: 43px; height: 47px"></h5>
                                          </div>
                                          <div class="col-md-3">
                                          <h5 class="PROPERTY"><br>LISTED PROPERTY</h5>
                                          <h5 class="PROPERTY">RS.3000</h5>
                                          </div>


                                          <div class="col-md-1" style="width: 54px; height: 33px; margin-right: 10px; margin-left: 232px;  margin-top: 19px; ">
                                            <button type="button" class="btn btn-danger">Delete</button>
                                          </div>

                                          <div class="col-md-1" style="width: 54px;  height: 33px; margin-left: 13px;margin-top: 19px;">
                                            <button type="button" class="btn btn-success">Edit</button>
                                          </div>
                                      </div> <!--  Lodge -->
                                       
                                     </div> 
                                     <hr>

                                     <div class="lodge" style="display: flow-root;">  
                                      <div class="text-right" style="margin-bottom: 50px;"><!--  Lodge -->
                                        <div class="col-md-1">
                                          <h5 class="PROPERTY"><img src="assets\img\home-icon.png" style="width: 43px; height: 47px"></h5>
                                          </div>
                                          <div class="col-md-3">
                                          <h5 class="PROPERTY"><br>LISTED PROPERTY</h5>
                                          <h5 class="PROPERTY">RS.3000</h5>
                                          </div>


                                          <div class="col-md-1" style="width: 54px; height: 33px; margin-right: 10px; margin-left: 232px;  margin-top: 19px; ">
                                            <button type="button" class="btn btn-danger">Delete</button>
                                          </div>

                                          <div class="col-md-1" style="width: 54px;  height: 33px; margin-left: 13px;margin-top: 19px;">
                                            <button type="button" class="btn btn-success">Edit</button>
                                          </div>
                                      </div> <!--  Lodge -->
                                       
                                     </div> 
                                     <hr>

                                </div>
                </div>





                            <div class="col-md-5">
                                <div class="widget-bg-color-icon card-box fadeInDown animated" style="background-color: #00aced">
                                    <div class="title" style="margin-bottom: 25px">
                                    <span class="text-uppercase font-600 pull-right" style="color: #ffffff">Latest Comments</span>
                                    <i class="fa fa-comment fa-2x" style="color: #ffffff"></i>
                                    </div>
                                    <div class="text-right">
                                        <h5 class="t" style="text-align: left; color: #ffffff">Contrary to popular belief, Lorem Ipsum is not simply random text piece of classical Latin...</h5> <br>
                                        <h5 class="t" style="text-align: left; color: #ffffff"">10 March, 2016</h5>
                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                             <div class="col-md-5">
                                <div class="widget-bg-color-icon card-box fadeInDown animated" style="background-color: #00aced">
                                    <div class="title" style="margin-bottom: 25px">
                                    <span class="text-uppercase font-600 pull-right" style="color: #ffffff">Latest Comments</span>
                                    <i class="fa fa-comment fa-2x" style="color: #ffffff"></i>
                                    </div>
                                    <div class="text-right">
                                        <h5 class="t" style="text-align: left; color: #ffffff">Contrary to popular belief, Lorem Ipsum is not simply random text piece of classical Latin...</h5> <br>
                                        <h5 class="t" style="text-align: left; color: #ffffff"">10 March, 2016</h5>
                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>


                                    

     <div class="wizzard"  >
      <div class="container">
        <div class="row" style="margin-right: -28px; margin-left: -28px;">
          <div class="col-md-12" style="background-color: #ffffff;  margin-bottom: 20px;" >
            <form  class="form-wizzard form-horizontal" method="post" enctype="multipart/form-data">
              <h2 class="h3" >Add new propert</h2>
              <div class="row">
                <div class="col-md-6" style="padding: 0 30px">
                
                  <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" type="text" name="txtTitle" placeholder="Enter Property Title ..."/>
                  </div>
               
              
                  <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="txtCategory">
                     <option value="single">Single</option>
                     <option value="double">Double</option>
                     <option value="luxury">Luxury</option>
                     <option value="standard">Standard</option>
                     <option value="economy">Economy</option>
                     </select
                     </div>





                       <div class="form-group">
                      <div><label style="margin-top: 12px; margin-left: 18px;">Amenties</label></div>

                      <div style="width: 150px; float: left; padding-right: 10px; padding-left: 10px; margin-left: 8px;
">


                      <div><label>WIFI</label></div>

                       <select class="form-control" name="checkWifi">
                     <option value="yes">YES</option>
                     <option value="no">NO</option>
                     </select>
                     </div>
                      <div style="width: 150px; float: left; padding-right: 10px; padding-left: 10px;">


                      <div><label>A/C</label></div>

                       <select class="form-control" name="checkAc">
                     <option value="yes">YES</option>
                     <option value="no">NO</option>
                     </select>
                     </div>

                     <div style="width: 150px; float: left; padding-right: 10px; padding-left: 10px;">

                      <div><label>Attach Bathroom</label></div>

                       <select class="form-control" name="checkAttach">
                     <option value="yes">YES</option>
                     <option value="no">NO</option>
                     </select>
                     </div>


                    </div>
                       






                     <div class="col-md-4" style="margin-left: 4px; width: 569px;  ">
                     <label style="margin-left: -13px; ">Description</label>
                      <div class="text_cont form-group floating-label-form-group controls" style="    margin-bottom: 0px;">
                        <textarea id="msg" name="txtDescription"  rows="5" placeholder="Message" type="text" class="form-control"></textarea><span class="help-block text-danger"></span>
                        <div id="success"></div>
                      </div>
                    </div>



                  
                  </div>
                     
                    
                  
                


                <div class="col-md-6" style="padding: 0 30px;     margin-left: -22px" >
                


                    <div class="form-group" style="width: 566px;">
                    <label>Location</label>
                    <input class="form-control" name="txtLocation" type="text" placeholder="Location: ..."/>
                  </div>


                  <div class="form-group"  style="width: 566px;">
                    <label>Price</label>
                    <input class="form-control" name="txtPrice" type="text" >
                  </div>

                    <div class="form-group"  style="width: 566px;">
                    <label>Add Image</label>
                    <input class="form-control" name="Image" type="file" placeholder="Add Images: ..."/>

                    </div>


              

              <div class="wizzard-confirm" style="padding-bottom:  85px; padding-left :165px; padding-top: 30px; ">
                
                <button type="Submit" class="btn btn-success btn-lg" style="width: 170px; background-color:#9CCC65;" name="btnSubmit">Submit</button>
              </div>

                </div>

                </div>
>
            </form>
          </div>
        </div>
      </div>
    </div>



        </div>



        <div class="footer-bottom" style="  width: 1350px; margin-left: -70px;margin-top: -20px;"> <!--  footer -->
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-bottom_copy" style="color: #ffffff">Copyright © 2016 B&amp;B Lodges. </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            
          </div>
        </div>
      </div>
    </div>     <!--  footer -->



    </div>




</body>