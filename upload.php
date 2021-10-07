<?php

if(isset($_POST["submit"]))
{
	
	$filename = $_FILES["upload"]["name"];
	$filetmp = $_FILES["upload"]["tmp_name"];
	$filebase = basename($_FILES["upload"]["name"]);
	
	$dir = 	"uploads/";
	$final_dir = $dir . $filebase;
	
	if(move_uploaded_file($filetmp, $final_dir))
	{
		define('DB_NAME','b&b');
		define('DB_USER','root');
		define('DB_PASSWORD','');
		define('DB_HOST','localhost');
		
		$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
		
		if(!$link)
		{
			die('couldnt connect'.mysql_error());
	
		}
	$db_selected=mysql_select_db(DB_NAME,$link);
	
			if(!$db_selected)
			{
				die('cant use '.DB_NAME.':'.mysql_error());
		
			}
				
				
				
		 $name = $_POST["name"];
		 $email = $_POST["email"];
		 $address = $_POST["address"];
		 $rent = $_POST["rent"];
		 $contact = $_POST["contact"];
 		 $info = $_POST["info"];

     		$sql="INSERT INTO `advertise`(`name`, `email`, `address`, `rent`, `contact`, `info`, `images`, `imgPath`) VALUES (' $name','$email','$address', '$rent', '$contact','$info' ,'$filebase', '$final_dir')";	
		
		
		if(mysql_query($sql))
		{
			$s="Upload Completed !!!";
        echo"<script type='text/javascript'>alert('$s');</script>";
		
		header('refresh:1; url=index.php');
		}
		else
		{
			$s="Upload failed !!!";
        echo"<script type='text/javascript'>alert('$s');</script>";
			
		}
			
			
		
		
	}
	else
	{
		$s="Error While uploading !!!";
        echo"<script type='text/javascript'>alert('$s');</script>";
		
	}
		
			
}
else
{			 
			$s="Error Occured";
            echo"<script type='text/javascript'>alert('$s');</script>";
	}
	




?>











</body>
</html>