<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>B&B</title>
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
			<li class="selected">
				<a href="index.html">home</a>
			</li>
			<li>
				<a href="about.html">search</a>
			</li>
			<li>
				<a href="gallery.html">gallery</a>
			</li>
			<li>
				<a href="blog.html">blog</a>
			</li>
			<li>
				<a href="contact.html">contact</a>
			</li>
		</ul><br>
        
         <form action="LoginHandeler.php" metthod="post" target="_self">
 		 <table border="0" bgcolor="#abcde123">
 			 <tr><td>User Name </td>
  	   			<td><input type="text" name="username" id="username" ></td>
                </tr>
  			 <tr><td>Password </td>
  	   			<td><input type="password" name="password" id="password" required="required"></td>
                </tr>
       		 <tr><td></td>
       			<td><input type="submit" value="Login" > <input type="reset" value="Cancle"></td></tr>
      		 <tr><td colspan="2">Don't you have an account<a href="register.html">&nbsp;&nbsp;Sign Up </a></td></tr>
      	 </table>
       </form>
        
        </div>
	<div id="body">
		<div id="featured">
			<img src="images/mainimg.jpg" alt="">
			<div>
				<h2>Find your designantion</h2>
				<span>In anytime,anywhere</span>
				<span>According to your fantasy</span>
                
			<!--<a href="blog-single-post.html" class="more">read more</a>-->
              </div>
            <tab>
		</div>
		<ul>
			<li>
				<a href="gallery.html">
					<img src="images/subimg1.jpg" width="250" height="250" >
					<!--<span>the father</span>-->
				</a>
			</li>
			<li>
				<a href="gallery.html">
					<img src="images/subimg2.jpg" width="250" height="250">
					<span>Some populer lodges</span>
				</a>
			</li>
			<li>
				<a href="gallery.html">
					<img src="images/subimg3.jpg" width="250" height="250">
					<!--<span>the nerd</span>-->
				</a>
			</li>
		</ul>
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
