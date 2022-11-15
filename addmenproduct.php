<html>
	<head>
		<title>
				ADD MEN PRODUCT
		</title>
	</head>
	
	<body>
	
		<form name="fmen" method="post">
			<?php
		
			if(isset($_POST["ok"]))
			{
					$con= mysqli_connect("localhost","root","","jshop");
					$query = "insert into menproduct(rname,detail,size,rid,metal,height,width,fitting,photo)
											values('".$_POST['rname']."','".$_POST['detail']."','".$_POST['size']."',
											'".$_POST['rid']."','".$_POST['metal']."','".$_POST['height']."',
											'".$_POST['width']."','".$_POST['fitting']."','".$_POST['photo']."')";
					$result = mysqli_query($con,$query);
					if($result)
					{
						echo "<script language='javascript'>alert(' Men Ring added Sucessfully....') </script>";
					}
					else
					{
						echo "<script language='javascript'>alert('Something went wrong')</script>";
					}
			}
		?>
			<center>
			
			<table height="100%">
				<tr>
					<td colspan="2"> <h1><i>Add Men's Product<i></h1></td>
				</tr>
				<tr>
					<td><b>Ring Name<b></td>
					<td><input type="text" name="rname" /></td>
				</tr>
				<tr>
					<td><b>Ring Detail<b></td>
					<td><input type="text" name="detail" /></td>
				</tr>
				<tr>
					<td><b>Size</b</td>
					<td><input type="text" name="size" /></td>
				</tr>
				<tr>
					<td><b>Ring ID</b></td>
					<td><input type="text" name="rid" /></td>
				</tr>
				<tr>
					<td><b>Metal</b></td>
					<td><input type="text" name="metal" /></td>
				</tr>
				<tr>
					<td><b>Ring Height</b></td>
					<td><input type="text" name="height" /></td>
				</tr>
				<tr>
					<td><b>Ring Width</b></td>
					<td><input type="text" name="width" /></td>
				</tr>
				<tr>
					<td><b>Fitting</b></td>
					<td><input type="text" name="fitting" /></td>
				</tr>
				<tr>
					<td><b>Ring Photo</b></td>
					<td><input type="file" name="photo" /></td>
				</tr>
				
				<tr>
					<td><input type="reset" value="Reset" name="reset" /></td>
					<td><input type="submit" value = "Submit" name="ok" /></td>
				</tr>
			</table>
		<form>
	</body>
</html>