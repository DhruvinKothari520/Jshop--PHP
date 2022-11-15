<!DOCTYPE html>
<html>

<head>

	<title>View Product</title>
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
	<a class="active" href="viewproduct.php">View Product</a>
	<a href="viewuser.php">View Users</a>
    <a href="neworder.php">Order</a>
	<a href="feedback.php">feedback</a>
	<a href="login.php">logout</a>
  </div>
  </div>
</div>

	
	<div class="header">
		<center><h2>All products List</h2>
		<form name="f1" method="post">
		<?php
			
					$con= mysqli_connect("localhost","root","","jshop");
					$id = $_REQUEST["id"];
					$delete_query= "delete from allproduct where id='".$id."'";
					$del = mysqli_query($con,$delete_query);
					$up_row=mysqli_affected_rows($con);
			if($up_row>0)
			{
				echo "<script language='javascript'>alert('Record Deleted Sucessfully')</script>";
			}
			/*else{
				echo "<script language='javascript'>alert('Something Went Wrong')</script>";
			}*/
					$query = "select * from allproduct";
					$result = mysqli_query($con,$query);	
		?>
		
		<table align="center" border="1" bordercolor="tomato" width="100%">
			<tr bgcolor="pink" align="center">
				<td><b>ID</b></td>
				<td><b>Gender</b></td>
				<td><b>Product Name</b></td>
				<td><b>Detail</b></td>
				<td><b>Prize</b></td>
				<td><b>Size</b></td>
				<td><b>Code</b></td>
				<td><b>Type</b></td>
				<td><b>Quantity</b></td>
				<td><b>Photo</b></td>
				<td><b>Edit</b></td>
				<td><b>Delete</b></td>
			</tr>
				<?php
					while($row=mysqli_fetch_array($result))
					{
						echo "<tr align='center'>";
						echo "<td>".$row["id"]."</td>";
						echo "<td>".$row["gender"]."</td>";
						echo "<td>".$row["pname"]."</td>";
						echo "<td>".$row["detail"]."</td>";
						echo "<td>".$row["prize"]."</td>";
						echo "<td>".$row["size"]."</td>";
						echo "<td>".$row["code"]."</td>";
						echo "<td>".$row["type"]."</td>";
						echo "<td>".$row["quantity"]."</td>";
						echo "<td>".$row["photo"]."</td>";
						echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a></td>";
						echo "<td><a href='viewproduct.php?id=".$row['id']."'>Delete</a></td>";
						echo "</tr>";
					}	
				?>
			
		</table>
		</form>
		</center>
	</div>
  
	<?php include("footer.php");?>

	</body>

</html>
