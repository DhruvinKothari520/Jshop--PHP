<!DOCTYPE html>
<html>

<head>

	<title>For Women</title>
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
	<a href="men.php">For Men</a>
	<a class="active" href="women.php">For Women</a>
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
		<li><img src="data1/images/wsl2.png" alt="wsl2" title="Pure Gold" id="wows1_0"/></li>
		<li><img src="data1/images/wsl3.png" alt="wsl3" title="Crown Rings" id="wows1_1"/></li>
		<li><img src="data1/images/wsl4.png" alt="wsl4" title="Mirror Designe" id="wows1_2"/></li>
		<li><img src="data1/images/wsl5.jpg" alt="wsl5" title="Silver " id="wows1_3"/></a></li>
		<li><img src="data1/images/wsl6.jpg" alt="wsl6" title="One Diamond Ring" id="wows1_4"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="wsl2"><span><img src="data1/tooltips/wsl2.png" alt="wsl2"/>1</span></a>
		<a href="#" title="wsl3"><span><img src="data1/tooltips/wsl3.png" alt="wsl3"/>2</span></a>
		<a href="#" title="wsl4"><span><img src="data1/tooltips/wsl4.png" alt="wsl4"/>3</span></a>
		<a href="#" title="wsl5"><span><img src="data1/tooltips/wsl5.jpg" alt="wsl5"/>4</span></a>
		<a href="#" title="wsl6"><span><img src="data1/tooltips/wsl6.jpg" alt="wsl6"/>5</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">slider jquery</a> by WOWSlider.com v8.8</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
<br><br><br><br>
<b style="color:Black;font-size:60px;">Women's Collection</b><br><br><br><br>

<footer style="background-image:url('image/cate.jpg');">
<b style="color:tomato;font-size:60px;"><hr> 


Collections<hr></b>
<div id="container">

	<ul align="center">
	
		<li><a href="women.php?type=ring&gender=women">Ring</a></li>
		<li><a href="women.php?type=braslate&gender=women">Braslate</a></li>
		<li><a href="women.php?type=chain&gender=women">chain</a></li>
		<li><a href="women.php?type=other&gender=women">other</a></li>
	</ul>

	<?php 
		//notice is not show using this function
	error_reporting(0);
	//function over	

		$con= mysqli_connect("localhost","root","","jshop");
					$type=$_REQUEST["type"];
					$gender= $_REQUEST["gender"];
					
					$q= "select * from allproduct where gender='".$gender."' and type='".$type."'";
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
