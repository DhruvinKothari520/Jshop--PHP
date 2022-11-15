<!DOCTYPE html>
<html>

<head>

	<title>Feedbacks</title>
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
	<a href="viewproduct.php">View Product</a>
	<a href="viewuser.php">View Users</a>
    <a href="neworder.php">Order</a>
    <a class="active" href="feedback.php">feedback</a>
	<a href="index.php">logout</a>
  </div>
  </div>
</div>

	<div class="header">
		<center><h2>Feedback</h2>
		<form name="f1" method="post">
		<?php
			
					$con= mysqli_connect("localhost","root","","jshop");
					$no = $_REQUEST["no"];
					$delete_query= "delete from allproduct where no='".$no."'";
					$del = mysqli_query($con,$delete_query);
					$up_row=mysqli_affected_rows($con);
			if($up_row>0)
			{
				echo "<script language='javascript'>alert('Record Deleted Sucessfully')</script>";
			}
			/*else{
				echo "<script language='javascript'>alert('Something Went Wrong')</script>";
			}*/
					
					$query = "select * from contact";
					$result = mysqli_query($con,$query);
					
		?>
		
		<table align="center" border="1" bordercolor="tomato" width="100%">
			<tr bgcolor="pink" align="center">
				<td><b>No</b></td>
				<td><b>Full Name</b></td>
				<td><b>Email</b></td>
				<td><b>phone</b></td>
				<td><b>Message</b></td>
				<td><b>Delete</b></td>
			</tr>
				<?php
					while($row=mysqli_fetch_array($result))
					{
						echo "<tr align='center'>";
						echo "<td>".$row["no"]."</td>";
						echo "<td>".$row["fname"]."</td>";
						echo "<td>".$row["email"]."</td>";
						echo "<td>".$row["phone"]."</td>";
						echo "<td>".$row["message"]."</td>";
						echo "<td><a href='feedback.php?no=".$row['no']."'>Delete</a></td>";
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
