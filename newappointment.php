<?php
	if(isset($_POST["ok"]))
	{
		
				$con= mysqli_connect("localhost","root","","customer");

				$query = "insert into appointment(name,company,date,note)
						values('".$_POST['name']."','".$_POST['company']."','".$_POST['date']."',
					'".$_POST['note']."')";
				$result = mysqli_query($con,$query);
		
				if($result)
				{
					echo "<script language='javascript'>alert(' You are Added Sucessfully...')</script>";
				}
				else
				{	
					echo "<script language='javascript'>alert('Something went wrong...')</script>";
				}
			
		
	}
?>