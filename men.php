<!DOCTYPE html>
<html>

<head>

	<title>For Men</title>
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
#container ul{
list-style:none;
}
#container ul li{
	background-color:tomato;
	width:25%;
	border:1px solid white;
	height:50px;
	line-heihgt:50px;
	text-align:center;
	color:white;
	float:left;
	font-size:30px;
}
#container ul li:hover{
	background-color:pink; 
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
    <a href="index.php">Home</a>
	<a class="active" href="men.php?gender=men"">For Men</a>
	<a href="women.php">For Women</a>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
    <a href="login.php">logout</a>
  </div>
  </div>
</div>
<center>


<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/sl2.jpg" alt="sl2" title="Color Rings" id="wows1_0"/></li>
		<li><img src="data1/images/sl3.jpg" alt="sl3" title="Green Diamond" id="wows1_1"/></li>
		<li><img src="data1/images/sl5.jpg" alt="sl5" title="Gold Man's Ring" id="wows1_2"/></li>
		<li><img src="data1/images/sl6.jpg" alt="sl6" title="Platinum" id="wows1_3"/></li>
		<li><img src="data1/images/sl8.jpg" alt="sl8" title="Diamond" id="wows1_4"/></li>
		<li><img src="data1/images/sl9.jpg" alt="sl9" title="Art Design" id="wows1_5"/></li>
		<li><a href="#slideshow"><img src="data1/images/sl10.jpg" alt="carousel jquery" title="sl10" id="wows1_6"/></a></li>
		<li><img src="data1/images/sl11.jpg" alt="sl11" title="sl11" id="wows1_7"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="sl2"><span><img src="data1/tooltips/sl2.jpg" alt="sl2"/>1</span></a>
		<a href="#" title="sl3"><span><img src="data1/tooltips/sl3.jpg" alt="sl3"/>2</span></a>
		<a href="#" title="sl5"><span><img src="data1/tooltips/sl5.jpg" alt="sl5"/>3</span></a>
		<a href="#" title="sl6"><span><img src="data1/tooltips/sl6.jpg" alt="sl6"/>4</span></a>
		<a href="#" title="sl8"><span><img src="data1/tooltips/sl8.jpg" alt="sl8"/>5</span></a>
		<a href="#" title="sl9"><span><img src="data1/tooltips/sl9.jpg" alt="sl9"/>6</span></a>
		<a href="#" title="sl10"><span><img src="data1/tooltips/sl10.jpg" alt="sl10"/>7</span></a>
		<a href="#" title="sl11"><span><img src="data1/tooltips/sl11.jpg" alt="sl11"/>8</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="#slideshow">slideshow</a></div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
<br><br><br><br>
<b style="color:Black;font-size:60px;">Men's Collection</b><br><br><br><br>

<footer style="background-image:url('image/cate.jpg');">
<b style="color:Black;font-size:50px;"><hr> 


Collections<hr></b>
<div id="container">

	<ul align="center">
	
		<li><a href="men.php?type=ring&gender=men">Ring</a></li>
		<li><a href="men.php?type=braslate&gender=men">Braslate</a></li>
		<li><a href="men.php?type=chain&gender=men">chain</a></li>
		<li><a href="men.php?type=other&gender=men">other</a></li>
	</ul>

	<?php 
	//notice is not show using this function
	error_reporting(0);
	//function over	
		$con= mysqli_connect("localhost","root","","jshop");
					$type=$_REQUEST["type"];
					$gender= $_REQUEST["gender"];
					
					$q= "SELECT * from allproduct where gender='".$gender."' and type='".$type."'";
					$r= mysqli_query($con,$q);
			
			?>
			<form name="f1" method="get">
<table width="1000" border="0" align="center" bgcolor="#EABDB3">
  <tr>
    <td>
	
	<?php
		echo "<table border='0' align='center'>";
	
	for($i=1;$i<=1;$i++)
	{ 	
		$j=0;
		 
		echo "<tr>";
		while($row=mysqli_fetch_array($r))
		{
			
				if($j%4 != 0)
				{
				echo "<td colspan='2'>";
				 echo "<a href='shipping.php'>
				 <img src='".$row['photo']."' width='250' height='200' style='border-radius: 55px; '    /></a>";?>
				
			<?php
				 echo "<h2><center>".$row['prize']."</center></h2>";
				 
				?>
	<?php
			echo "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";	
				}
				else
				{
				
					echo "</tr><tr>";
					echo "<td colspan='2'>";
					echo "<a href='shipping.php'>
						  <img src='".$row['photo']."' width='250' height='200' style='border-radius: 55px; ' /></a>";
					echo "<h2><center>".$row['prize']."</center></h2>";
				?>
	<?php
						echo "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
				}
				$j++;
			
	 	}
		echo "</tr></table>";
	
//	}
	}
?>
	
	</td>
  </tr>
</table>					
			
	
	</div>	

	</footer>	
		
	</center>	
	
	<!-- this is footer start-->
	
			<?php include("footer.php"); ?>
		
		<!-- this is footer end-->

	</body>

</html>
