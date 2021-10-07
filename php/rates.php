<?php
   mysql_connect("localhost","root","")or die("Cannot connect to the server");
   mysql_select_db("B&B") or die("Couldn't connect to the database");
   $find_data=mysql_query("SELECT * FROM ratings");
   
    while($row = mysql_fetch_assoc($find_data))
		{
			$id = $row['id'];
			$name_of_lodge=$row['lodge'];
			$location_of_lodge =$row['location'];
			$current_rate = $row['rate'];
			$hits = $row['hits']; 
			
			}
	 echo "
	     <form action='rate.php' method='POST'>
		 $name_of_lodge:<select name ='ratings'>
		   <option>1</option>
		    <option>2</option>
			 <option>3</option>
			  <option>4</option>
			   <option>5</option>
			    <option>6</option>
				 <option>7</option>
				  <option>8</option>
				   <option>9</option>
				    <option>10</option>
		 
		 </select>
		 <input type='hidden' vlaue='$location' name='location'>
		 <input type='submit' value='Rate!!'>Curent Rating: ";echo $curren_rating; echo "
		 </form>
		 
		 
	 "		
   

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>