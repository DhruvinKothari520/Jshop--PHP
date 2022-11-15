<?php
	SESSION_START();
	if($_SESSION['user']!='')
	{

	
?>
<!DOCTYPE html>
<html>

<head>

	<title>Home page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/index.css">
	
	<!--for go to top button-->
	<link rel="stylesheet" href="style.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!--for slide show-->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>

<style>

body{
background-image:url("image/cate.jpg");
  background-repeat:repeat-x;
  }
  
.head img {
  float: left;
  width: 100px;
  height: 89px;
  background: #555;
}

</style>
<script>
/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/
</script>
</head>

	<body>
	<a id="back2Top" title="Back to top" href="#">&#10148;</a>
	<div class="head">
					<img src="image/logo.jpg" height="45px" alt="logo" />
	<div class="header">
 
   <div class="header-right">
    <a class="active" href="index.php">Home</a>
	<a href="men.php">For Men</a>
	<a href="women.php">For Women</a>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
    <a href="login.php">Logout</a>
  </div>
  </div>
</div>
<center>

<!-- Start Slide show -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/b1.jpg" alt="b1" title="Gold & Diamonds" id="wows1_0"/></li>
		<li><img src="data1/images/b2.jpg" alt="b2" title="Chain" id="wows1_1"/></li>
		<li><img src="data1/images/sl1.jpg" alt="sl1" title="White Diamond ring" id="wows1_2"/></li>
		<li><img src="data1/images/sl4.jpg" alt="sl4" title="Yellow Diamond ring" id="wows1_3"/></li>
		<li><img src="data1/images/sl7.jpg" alt="sl7" title="Silver" id="wows1_4"/></li>
		<li><img src="data1/images/b3.jpg" alt="bootstrap carousel" title="Black ring" id="wows1_5"/></a></li>
		<li><img src="data1/images/sl10.jpg" alt="sl10" title="new shapes" id="wows1_6"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="b1"><span><img src="data1/tooltips/b1.jpg" alt="b1"/>1</span></a>
		<a href="#" title="b2"><span><img src="data1/tooltips/b2.jpg" alt="b2"/>2</span></a>
		<a href="#" title="sl1"><span><img src="data1/tooltips/sl1.jpg" alt="sl1"/>3</span></a>
		<a href="#" title="sl4"><span><img src="data1/tooltips/sl4.jpg" alt="sl4"/>4</span></a>
		<a href="#" title="sl7"><span><img src="data1/tooltips/sl7.jpg" alt="sl7"/>5</span></a>
		<a href="#" title="b3"><span><img src="data1/tooltips/b3.jpg" alt="Black"/>6</span></a>
		<a href="#" title="sl10"><span><img src="data1/tooltips/sl10.jpg" alt="sl10"/>7</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"></div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End Slide Show code section -->
<br><br><br><br>
<b style="color:Black;font-size:50px;">Latest Designs With Best Prices</b><br><br>
<p style="color:Orange;font-size:20px;">With Our Jewellery You Discover Your Natural Beauty</p>
<table>
<tr>
<td><p style="color:black;"><b>&emsp; &emsp;Are you looking for something rare and unique?</b><br> <i> We have an amazing
							collection from multiple European designers. Please visite our site why our 
							customers love our store!  Call for in-stock information or inquire about new arrivals.</i></p>
</td>
<td>&emsp; &emsp; <img src="image/Dhruvin1.jpg" style="border-radius: 100%" height="180px"/>&emsp; &emsp; <br><br><br><br>
<td><p style="color:black;">&emsp; &emsp;<i> New styles for the man in your life. Choose from classic stretch bands and  bracelets, to sports band and dog tags. Trendy  bracelet styles are also available for today's modern male.</i><br> &emsp; &emsp;&nbsp; &nbsp;&nbsp;&nbsp;</p>
</td>
</div>
</tr>
</table>
<footer style="background-image:url('image/cate.jpg');">

<!--
<b style="color:tomato;font-size:60px;"><hr>Letest Design Gallary<hr></b>

<table border="0">
<tr>
		<php
	$con=mysqli_connect("localhost","root","","jshop");
	$q="select * from allproduct";
	$r=mysqli_query($con,$q);
	while($row=mysqli_fetch_array($r))
	{
		echo "<tr>";
		echo "<img src='".$row['photo']."' height='400' width='400' />";
		echo "</tr>";
	}
?>
</tr>		
		</table>
-->
	</footer>	
		
	</center>
	
		<!-- this is footer start-->
	
			<?php include("footer.php"); ?>
		
		<!-- this is footer end-->


	</body>

</html>
<?php 
}
else
{
	header("location:index.php");
}
?>