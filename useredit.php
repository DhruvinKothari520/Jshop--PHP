<!DOCTYPE html>
<html>

<head>

	<title>Edit User</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/index.css">
	
	<!--for go to top button-->
	<link rel="stylesheet" href="style.css">
	

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
</head>

	<body>
	
	<a id="back2Top" title="Back to top" href="#">&#10148;</a>
	<div class="head">
					<img src="image/logo.jpg" height="45px" alt="logo" />
	<div class="header">
  
  <div class="header-right">
    <a href="master.php">Add Product</a>
	<a href="viewproduct.php">View Product</a>
	<a href="viewuser.php">View Users</a>
    <a href="neworder.php">Order</a>
	<a href="login.php">logout</a>
  </div>
  </div>
</div>

	
	<div class="header">
		<form name="f1" method="post">
		<?php
		$id = $_REQUEST["id"];
		
		$con= mysqli_connect("localhost","root","","jshop");
		//$db = mysqli_select_db("student");
		$query = "select * from register where id ='".$id."' ";
		$res = mysqli_query($con,$query);	
			
			if(isset($_POST["ok"]))
			{
			$update_query="update register set id='".$_POST['id']."',name='".$_POST['name']."',
						password='".$_POST['password']."',rpassword='".$_POST['rpassword']."',username='".$_POST['username']."'
						where id= '".$id."' ";
			$up_result = mysqli_query($con,$update_query);
			$up_row=mysqli_affected_rows($con);
			if($up_row>0)
			{
				echo "<script language='javascript'>alert('Record Updated Sucessfully')</script>";
			}
			else
			{
				echo "<script language='javascript'>alert('Something Went Wrong')</script>";
			}
			}
		?>

		<table align="center" border="1" bordercolor="tomato" height="100%" width="30%">
		<?php
		while($row = mysqli_fetch_array($res))
		{
		?>
		<tr>
					<td colspan="2"><center><h2><marquee width="100%" direction="left" height="100%">
						Edit User</marquee></h2></td>
				</tr>
				<tr>
					<td><b>ID <b></td>
					<td><input type="text" name="id" value="<?php echo $row["id"];?>" required /></td>
				</tr>
				
				<tr>
					<td><b>User Name <b></td>
					<td><input type="text" name="name" value="<?php echo $row["name"];?>" required /></td>
				</tr>
				<tr>
					<td><b>Password </b></td>
					<td><input type="text" name="password" value="<?php echo $row["password"];?>" required /></td>
				</tr>
				<tr>
					<td><b>Repassword </b</td>
					<td><input type="text" name="rpassword" value="<?php echo $row["rpassword"];?>" required /></td>
				</tr>
				<tr>
					<td><b>Username </b</td>
					<td><input type="text" name="username" value="<?php echo $row["username"];?>" required /></td>
				</tr>
				
	<?php
	}//while
	?>
				<tr>
					<td><input type="reset" value="Reset"></td>
					<td><input type="submit" name="ok" value="Update"></td>
				</tr>
			</table>
		</form>
		</div>
  
	<?php include("footer.php");?>

	</body>
</html>