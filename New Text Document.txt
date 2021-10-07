<?php
session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>B&B </title>
	<link rel="stylesheet" type="text/css" href="css/default.css">
   <!--<link rel="stylesheet" type="text/css" href="css/styles.css">-->
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
    <style>
	   body{
		     background-image:url(images/background.jpg);
			 background-position:center;
			 background-repeat:repeat;
		     height:100%;
		   }
	 ;
	
    </style>
	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body>
<div id="wrapper">
	<div id="header">
        <?php if(isset($_SESSION['user'])) { ?>
        <table align="right" border="0" width ="700">
         <tr><td align="right" width="500"><b><i><font color="#CCCC00"><font size="+3"><marquee>Welcome to B&B</marquee></i></b> </td>     </tr>
         <tr><td align="right"><a href="logout.php"><b><font color="#FF3333"><font size="+1">Logout</a></td></tr>
       </table>
        <?php } ?>
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
		<div id="banner">
			<div id="banner"><img src="images/mainimg.jpg" width="1100" height="450" alt="" /></div>
	<div id="three-columns">
		<div class="content">
			<div id="column1">
				<h2>Our Services</h2>
				<ul class="list-style1">
					<li class="first">
                        
						<p>Provide a chance for rural home renters to advertise their lodges</p>
                        <p>Allow users to reserve lodges according to thheir prefernces</p>
						<p><a href="aboutus.php" class="link-style">Read More</a></p>
					</li>
                   <h2>Our Ambition</h2> 
					<li>
						<p>Our anbition is increasing the confidence of ome renters and travelers around sri lanka..... </p>
						<p><a href="aboutus.php" class="link-style">Read More</a></p>
					</li>
				</ul>
			</div>
			<div id="column3">
             <?php if (!isset($_SESSION['user'])) { ?>
              <h2>Login Here..</h2>
            <form action="Tourist.php" method="post">
            <label>Email :</label><br>
            <input type="text" name="username" id="username" ><br>
            <label>Password</label><br>
            <input type="password" name="password" id="password" required><br><br>
            <label>Login As </label><br>
            <select name="type"><br>
                    <option value="1">Tourist</option>
                    <option value="2">Renter</option>
             </select><br><br><br>
             <input type="submit" value="Login" >&nbsp;&nbsp;&nbsp; <input type="reset" value="Cancel"><br>
             &nbsp;
             <p>Don't you have an account <a href="register.php">Register here</a></p>
            </form>
             <?php } ?>  
            </div>
			<div id="column2">
				<h2>Welcome to B&B </h2>
			
				<p>This is <strong>Bed and Breakfast </strong>, Bed and breakfast is mainly focusing for find out lodges for the travelers.  Theere are lots of lodges in Sri lanka in rural areas but those lodges are not very famouse among travelers.  This site will allow home renters to advertise their lodes and make it famous among travelers.This site will act as a communication bridge with home renters and travelers. </p>
             <p>People who wish to rent rooms from there home for the short time periods can join with this site and advertise their lodges in this site.In other aspects ,It is useless that paying lots of money for a hotel roms for a one night or few hours.We are facilitating travelers search suitable accomadations in our website and book it online b using our online payment methods.If the travelers are satisfied with our home renters service,they can rate the lodges and leave comment about their experience.</p>   
				<p><a href="aboutus.php" class="link-style">Read More</a></p>
			</div>
			
		</div>
	</div>
   <div id="footer">
		<p>&copy; Untitled. All rights reserved. Design by B&B by 2017</p>
	</div>
   </div> 
   </div>
</body>
</html>

