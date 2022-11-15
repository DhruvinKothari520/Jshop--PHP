<!DOCTYPE html>
<html>

<head>

	<title>View User</title>
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
 
 table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 90%;
}

th, td {
  padding: 15px;
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
    <a href="master.php">Add Product</a>
	<a href="viewproduct.php">View Product</a>
	<a class="active" href="viewuser.php">View Users</a>
    <a href="neworder.php">Order</a>
	<a href="feedback.php">feedback</a>
	<a href="login.php">logout</a>
  </div>
  </div>
</div>

	

		<center><h2>Users List</h2>
		<form name="f1" method="post">
			<?php
					$con= mysqli_connect("localhost","root","","jshop");
					$id = $_REQUEST["id"];
					$delete_query= "delete from register where id='".$id."'";
					$del = mysqli_query($con,$delete_query);
					$up_row=mysqli_affected_rows($con);
			
			if($up_row>0)
			{
				echo "<script language='javascript'>alert('Record Deleted Sucessfully')</script>";
			}
			/*else{
				echo "<script language='javascript'>alert('Something Went Wrong')</script>";
			}*/
					
					$query = "select * from register";
					$result = mysqli_query($con,$query);
					
		?>
		
		<table border="3" align="center" bgcolor="pink">
			<tr>
					<td colspan="7"><center><h2><marquee width="100%" direction="left" height="100%">
						Users List</marquee></h2></td>
				</tr>
			<tr bgcolor="">
				<td><b>ID</b></td>
				<td><b>Name</b></td>
				<td><b>Password</b></td>
				<td><b>Repeat Password</b></td>		
				<td><b>User Name</b></td>		
				<td><b>EditDetail</b></td>
				<td><b>DeletData</b></td>
			</tr>
			<tr>
				<?php
					while($row=mysqli_fetch_array($result))
					{
						echo "<tr>";
						echo "<td>".$row["id"]."</td>";
						echo "<td>".$row["name"]."</td>";
						echo "<td>".$row["password"]."</td>";
						echo "<td>".$row["rpassword"]."</td>";
						echo "<td>".$row["username"]."</td>";
						echo "<td><a href='useredit.php?id=".$row['id']."'>Edit User</a></td>";
						echo "<td><a href='viewuser.php?id=".$row['id']."'>Delete User</a></td>";
						echo "</tr>";
					}
				?>
			</tr>
		</table>
		</form>
		</center>
  
	<?php include("footer.php");?>

	</body>

</html>
