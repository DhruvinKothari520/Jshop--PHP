<html>
	<head>
	
	</head>
	<body>
		<form name="f1" method="post">
		<?php
			
					$con= mysqli_connect("localhost","root","","jshop");
					
					$query = "select * from menproduct";
					$result = mysqli_query($con,$query);
					
		?>
		
		<table border="1" bordercolor="purple" align="center">
			<tr>
				<?php
					while($row=mysqli_fetch_array($result))
					{
						//echo "<tr>";
						echo "<tr><td>Rose Name : ".$row["rname"]."</td></tr>";
						echo "<tr><td>Detail    :".$row["detail"]."</td></tr>";
						echo "<tr><td>Size	    :".$row["size"]."</td></tr>";
						echo "<tr><td>Rose ID	:".$row["rid"]."</td></tr>";
						echo "<tr><td>Metal		:".$row["metal"]."</td></tr>";
						echo "<tr><td>Height	:".$row["height"]."</td></tr>";
						echo "<tr><td>Weight	:".$row["width"]."</td></tr>";
						echo "<tr><td>fitting	:".$row["fitting"]."</td></tr>";
						echo "<tr><td>fitting	:".$row["photo"]."</td></tr>";
						
					}
				?>
			</tr>
		</table>
		</form>
	</body>
</html>