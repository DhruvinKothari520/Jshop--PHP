	
	
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
						echo "<script language='javascript'>alert(' Men Ring added Sucessfully....')</script>";
					}
					else
					{
						echo "<script language='javascript'>alert('Something went wrong')</script>";
					}
			}
		?>
