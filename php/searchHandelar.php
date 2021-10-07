<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bed and Breakfast</title>
<link rel="stylesheet" type="text/css" href="my.css" />
</head>

<body>
        <div id="content">
        <?php
		   $db =mysqli_connect("localhost","root","","lodgeimg");
		   $sql="select * from lodgeimg";
		   $result=mysqli_query($db,$sql);
		   while($row = mysqli_fetch_array($result))
		   {
			   echo"<div id='img_div'>";
			     echo"<img src='New folder (3)/New folder/mustacheenthusiast/images/grew-a-mustache.jpg".$row['image']."'>";
			     echo"<p>".$row ['text']."</p>";
				echo"</div>" ;
			   
			   }
			   
			   
		   
		
		?>
<?php

   


?>
</body>
</html>