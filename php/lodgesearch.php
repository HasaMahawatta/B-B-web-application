<?php
mysql_connect("localhost","root","")or die("cannot connect to the database");
mysql_select_db("search_test")or die("coannot find the database");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action='lodgesearch.php' method='post'>
	<input type="text" name="Search" placeholder="Search your lodge here..."/>


</form>

</body>
</html>