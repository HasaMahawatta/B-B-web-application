<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rate the lodging </title>



<link href="css/bootstrap.css" rel="stylesheet"/> 
<link href="css/font-awesome.css" rel="stylesheet"/>
<link href="css/rating.css" rel="stylesheet"/>
<link href="css/default.css"/>


  <style>
	   body{
		     background-image:url(images/rate4.jpg);
			 background-position:center;
			 background-repeat:repeat;
		     height:100%;
		   }
	 ;
	
    </style>



</head>

<body>






<div class="container" style="top:50px; bottom:50px; left:50px; right:50px;" id="container">

<div class="ratings">

<input type="radio" name="star" id="rating" value="1"/>
<input type="radio" name="star" id="rating" value="2"/>
<input type="radio" name="star" id="rating" value="3"/>
<input type="radio" name="star" id="rating" value="4"/>
<input type="radio" name="star" id="rating" value="5"/>
</div>

<br/>


<span class="info"> </span>

</div>




<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.js"> </script>
<script src="js/rating.js"> </script>



<script>


$('.ratings').rating(function(vote, event)
{
	$.ajax({
		method: 'POST',
		url: 'insrating.php',
		data: {vote:vote}	
}).done(function(info) {
	
	$('.info').html("You Rated : <b>"+info+"</b>" )
	
})

})



</script>






</body>
</html>
