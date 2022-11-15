<!DOCTYPE HTML>
<html>
<head>
<title>Welcome To Get Knowledge</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<?php include("include/logo.php"); ?>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src='js/jquery-1.8.1.min.js' type='text/javascript'></script>
<script src='js/jquery.kwicks.js' type='text/javascript'></script>
<script type='text/javascript'>
	$(function() {
	$('.kwicks').kwicks({
		maxSize : 250,
		spacing : 5,
		behavior: 'menu'
		});
	});
</script>
</head>
<body class="bg">
<div class="header-bg">
<div class="wrap">
	<?php include("include/menu.php"); ?>
	 <div class="clear"></div>
	</div>
</div>
</div>
<div class="wrap">
	<!---start-content---->
	<div class="content">
		<div class="details">
			<h2>Devloper's PortFolio</span></h2>
			<!--<div class="det-pic">
				<img src="images/det-pic.jpg" alt="">		
			</div> -->
			<div class="det-para">
				<p class="top">
				<?php
			include("include/connection.php");
			$q="select * from portfolio order by id DESC";
			$r=mysql_query($q);
			
		?>
		<form name="f1" method="get">
<table width="1000" border="0" align="center" >
  <tr>
    <td>
	
	<?php
		echo "<table border='0' align='center'>";
	
	for($i=1;$i<=1;$i++)
	{ 	
		$j=0;
		 
		echo "<tr>";
		while($row=mysql_fetch_array($r))
		{
			
				if($j%3 != 0)
				{
				echo "<td colspan='2'>";
				 echo "<img src='"."admin/portfolio/".$row['photo']."' width='250' height='200' style='border-radius: 55px; '    />";?>
				
			<?php
				 echo "<h2><center>".$row['title']."</center></h2>";
				 
				?>
	<?php
			echo "</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";	
				}
				else
				{
				
					echo "</tr><tr>";
					echo "<td colspan='2'>";
	 echo "<img src='"."admin/portfolio/".$row['photo']."' width='250' height='200' style='border-radius: 55px; ' />";
	echo "<h2><center>".$row['title']."</center></h2>";
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
					
           			</form>
		
		
				
				</p>
				<!--<div class="btn">
					<span class="button-wrap"><a href="details.html" class="button button-pill ">Read Me</a></span>
				</div> -->
			</div>
		</div>
	</div>
	<!---End-content---->
	<div class="clear"> </div>
</div>
<div class="footer-bg">
<div class="wrap">
<div class="footer">
		<?php include("include/footer.php"); ?>
</div>
</div>
</div>
<?php  //include("include/mouse.php");?>
</body>
</html>