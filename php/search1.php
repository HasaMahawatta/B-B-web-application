<?php
$con=mysqli_connect("localhost","root","");
  if(!$con)
  {
	  die("cannot connect".mysql_error());
	  }
mysql_select_db("B&B",$con);
$search = $_POST('textsearch');
$result = mysql_query("SELECT * FROM lodgeimg WHERE location LIKE '%$search%'");

	while($row=mysql_fetch_array($result))
		{
			echo'<table border ="0" align ="center" cellpadding ="5" cellspacing = "10" width ="300px">';
			echo'<tr>';
			echo'<td align="justify"><strong>Lodge Name :</strong>'.$row['Name'].'</td></tr>';
			echo'<tr>';
			"<td img width='2000px' height='2000px' src='".$row['image']."'</td></tr>";
			echo'</table>';
			
			}



?>
<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About - Mustache Enthusiast</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body>
	<div id="header">
		<a href="index.html" class="logo">
			<img src="images/logo.png" alt="">
		</a>
		<ul id="navigation">
			<li>
				<a href="index.html">home</a>
			</li>
			<li class="selected">
				<a href="about.html">search</a>
			</li>
			<li>
				<a href="gallery.html">gallery</a>
			</li>
			<li>
				<a href="blog.html">Room</a>
			</li>
			<li>
				<a href="contact.html">contact</a>
			</li>
		</ul>
	</div>
	<div id="body">
			<div id="body">
		<h1><span>Search Result</span></h1>

            
            <form action="search.php" method ="Post">
            <input type="text" name="Search" placeholder="Search your designatiion here"/>
            <input type ="Submit" value="Search"/>
            
            </form>
            
            <ul class="selected">
            </ul>
		</div>
	</div>
	<div id="footer">
		<div>
			<p>&copy; 2017 by B&B. All rights reserved.</p>
			<ul>
				<li>
					<a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a>
				</li>
				<li>
					<a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a>
				</li>
				<li>
					<a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">googleplus</a>
				</li>
				<li>
					<a href="http://pinterest.com/fwtemplates/" id="pinterest">pinterest</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>
