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
	
    #foot {
	background-color: #9C3;
}
        </style>
	<script type="text/javascript" src="js/mobile.js"></script>
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
				<a href="contact.php">contact</a>
			</li>
		</ul><br>
       </div> 
     
        </div>
	<div id="body">
	        <div id="column1">
			</div>
			<div id="column3">
            </div>
			<div id="column2">
            <div class="content">
        <div id="searchWrapper">
	  <form action="search.php" method ="post" >
        <input type="text" name="txtsearch" id="search" class="searchInput" placeholder="Enter the city name">       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type ="Submit"  value="SEARCH" name="Search" width="10px" ></button>
       </form>	
       
       <?php
       $con = mysqli_connect("localhost","root","")  ;

	if(!$con)
	{
		die('Could not connect:'.mysql_error());
		}
	
	mysqli_select_db($con,"b&b");
	
	if(isset($_POST['Search'])){
	$search = $_POST['txtsearch'];
	$result = mysqli_query($con,"SELECT * FROM advertise WHERE `address` LIKE '%$search%'");
	$count = mysqli_num_rows($result);
	
	if($count== 0)
		{
			echo'<div id="align">no search result';
			}
	else
		{
		while($row = mysqli_fetch_array($result))
	      {
		echo'<table border="0" align="center" width="700px"  >';
	    echo'<tr>';
		echo'<th >Lodge image</th>';
		echo'<th >Lodge Details</th>';
		
		echo'</tr>';
		
		echo'<tr>';
		echo"<td><img width = '380px' height='200px' src='".$row['imgPath']."'></td>";
		
		echo'<td><strong> Address : </strong>'.$row['address'].'</td><br><br>';
		echo'<td><strong> price : </strong>'.$row['rent'].'</td>';
	  if(isset($_SESSION['user']))
	    {
	    echo'<td border><a href="book.php"><button name="book" value="Book">Book</button></a></td>';
		echo'<td border><a href="comment.php"><button name="comment" value="Comment"> comment</button></a></td>';
		echo'<td><a href="rate.php"><button name="rate" value="Rate">Rate</button></a></td></tr>';
		echo'</table>';
	   }	
	  }
	}

		
		//echo'<tabel border="1" align ="center" width="700" cellpadding ="5" cellspacing="10">';
		//echo'<th>Lodge Image</th> ';
		//echo'<th>Lodge Details</th>';
		//echo'</tabel>';
		
		
	}
		   
       
       
       ?>
			</div>
			
		</div>
  <table border="0" align="center" width="1000px" cellpadding="5" cellspacing="10">
   <tr>
   <td></td>
   <td></td>    
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   </tr>
  </table>
 
 <div id="footer">
		<p>&copy; Untitled. All rights reserved. Design by B&B by 2017</p>
	</div>
   </div> 
   </div>

</html>



