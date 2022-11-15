<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  
  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="login/style.css">

  
</head>

<body>

<?php
session_start();
/*
if(isset($_SESSION['user']))
{
	session_unregister("user");
	session_unset();
	session_destroy();
}*/

if(isset($_POST['submit']))
{
	if($_POST['uname']=="dhruvin123"&&$_POST['pass']=="123	")
	{
		$_SESSION['user']=$_POST['uname'];	
		header('location:master.php');	
	}	
	else
	{
		echo "<script>alert('Please Enter Valide username & password..')</script>";
	}
	
}
?>
	
	<form name="f1" method="post">
	
	<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" name="uname" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="pass" type="password" class="input" data-type="password">
				</div>
				
				<div class="group">
					<input type="submit" name="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<!--<a href="#forgot"><font color="white"><h3>Forgot Password?</h3></a>
					--><a href="login.php"><font color="white"><h3>User? Login here</h3></a>
					
				</div>
			</div>
	</form>
	
<?php
	if(isset($_POST["ok"]))
	{
		if($_POST['name']!="" && $_POST['password']!="" && $_POST['rpassword']!="" && $_POST['username']!="")
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
	
	<form name="f2" method="post">
	
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Name</label>
					<input id="user" name="name" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="password" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" name="rpassword" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Username</label>
					<input id="pass" name="username" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" name="ok" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1"><h3>Already Member?</h3></a>
				</div>
			</div>
		</div>
	</div>
</div>
	</form>
	
</body>

</html>
