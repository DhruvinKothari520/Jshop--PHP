<?php
	if(isset($_POST["ok"]))
	{
		if($_POST['name']!="" && $_POST['password']!="" && $_POST['rpassword']!="" && $_POST['username']!="" &&)
		{
			if($_POST['password']==$_POST['rpassword'])
			{
				$con= mysqli_connect("localhost","root","","jshop");

				$query = "insert into register(name,password,rpassword,username)
						values('".$_POST['name']."','".$_POST['password']."','".$_POST['rpassword']."',
					'".$_POST['username']."')";
				$result = mysqli_query($con,$query);
		
				if($result)
				{
					echo "<script language='javascript'>alert(' You are registerd Sucessfully...')</script>";
				}
				else
				{	
					echo "<script language='javascript'>alert('Something went wrong...')</script>";
				}
			}
			else
			{
				echo "<script language='javascript'>alert('Passwords & repeatp Password are Miss match...')</script>";
			}
		}
		else
		{
			echo "<script language='javascript'>alert('Please Enter Value in Compulsary Detail.')</script>";
		}
	}
?>