<!DOCTYPE html>
<html>

<head>

	<title>Shipping</title>
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
 h2 {
  border-style: dotted;
}
table {
  border-style: dotted;
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
    <a href="index.php">Home</a>
	<a href="men.php">For Men</a>
	<a href="women.php">For Women</a>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>
	<a href="login.php">logout</a>
  </div>
  </div>
</div>

	</footer>	
		
	</center>	
		
		<tr rowspan="2"><center><h2><i><b>Give Orders</b></i></h2></center></tr><br>
		<form name="f2" method="post">
		
			<center>
			<table bgcolor="pink" border="5" width="75%">
				<tr>
					<td>Full Name</td>
					<td><input type="text" name="fname" placeholder="Full Name" required /></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" placeholder="Email" required /></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><input type="text" name="contact" placeholder="Contact" required /></td>
				</tr>
				<tr>
					<td>Shipping Address</td>
					<td>
						<textarea rows="6" cols="50" name="saddress" placeholder="ex. 74,Mahetanagar, Near Vedroad,Katargam,surat-395004 "required />
						</textarea>
					<td>
				</tr>
				<tr>
					<td>Pincode</td>
					<td><input type="text" name="pincode" placeholder="Pincode" required /></td>
				</tr>
				<tr>
					<td>City</td>
					<td><input type="text" name="city" placeholder="City" required /></td>
				</tr>
				<tr>
					<td>State</td>
					<td><input type="text" name="state" placeholder="State" required /></td>
				</tr>
				<tr>
					<td>Quantity</td>
					<td><input type="text" name="quantity" placeholder="Quantity" required /></td>
				</tr>
				<tr>
					<td bgcolor="black"><input type="reset" name="reset" value="Reset" /></td>
					<td bgcolor="black"><input type="submit" name="order" value="Order Placed" /></td>
				</tr>
			<table>
		</form>
		<!-- this is footer start-->
	
			<?php include("footer.php"); ?>
		
		<!-- this is footer end-->

	</body>

</html>

<?php
	if(isset($_POST["order"]))
	{
		$con= mysqli_connect("localhost","root","","jshop");
				
		$query = "insert into order(fname,email,contact,saddress,pincode,city,state,quantity) values('".$_POST['fname']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['saddress']."','".$_POST['pincode']."','".$_POST['city']."','".$_POST['state']."','".$_POST['quantity']."')";
		$result = mysqli_query($con,$query);

		if($result)
		{
			echo "<script language='javascript'>alert('Your Record taken Sucessfully')</script>";
		}
		else
		{
			echo "<script language='javascript'>alert('Your Record taken Sucessfully')</script>";
			//echo "<script language='javascript'>alert('Something went wrong')</script>";
		}
	}
?>