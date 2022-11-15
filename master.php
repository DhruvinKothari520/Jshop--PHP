<?php
	session_start();
	if($_SESSION['user']!='')
	{
?>
<!DOCTYPE html>
<html>

<head>

	<title>Admin Master</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/index.css">
	
	<!--for go to top button-->
	<link rel="stylesheet" href="style.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!--for slide show-->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />

<link href="css/bootstrap.min.css" rel="stylesheet">

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
  width: 80%;
}

th, td {
  padding: 10px;
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/jQuery.Form.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){			
				
				var divProgressBar=$("#divProgressBar");
				var status=$("#status");
				
				$("#uploadForm").ajaxForm({
					
					dataType:"json",
					
					beforeSend:function(){
						divProgressBar.css({});
						divProgressBar.width(0);
					},
					
					uploadProgress:function(event, position, total, percentComplete){
						var pVel=percentComplete+"%";
						divProgressBar.width(pVel);
					},
					
					complete:function(data){
						status.html(data.responseText);
					}
				});
			});
		</script>

</head>

	<body>
	<a id="back2Top" title="Back to top" href="#">&#10148;</a>
	<div class="head">
					<img src="image/logo.jpg" height="45px" alt="logo" />
	<div class="header">
  
  <div class="header-right">
    <a class="active" href="master.php">Add Product</a>
	<a href="viewproduct.php">View Product</a>
	<a href="viewuser.php">View Users</a>
    <a href="neworder.php">Order</a>
    <a href="feedback.php">feedback</a>
	<a href="adminlogin.php">logout</a>
  </div>
  </div>
</div>

	
<!--	<div class="header">
	-->	<center><h2>Welcome Admin</h2>
		<form name="f1" method="post" enctype="multipart/form-data">
		
<?php
    	$con=mysqli_connect("localhost","root","","jshop");
		
		if(isset($_POST['ok']))
		{
			/*if($_POST['gender']!="" && $_POST['detail']!="" && $_POST['size']!="" && $_POST['code']!=""
				&& $_POST['type']!="" && $_POST['quantity']!="")
				{
				$q="select * from product";
				$r=mysqli_query($q);
				$t=$_FILES["photo"]["name"];*/
				
				if(file_exists("photo/".$_FILES["photo"]["name"]))
				{	
					$rand_name = md5(time());
					$rand_name=rand(0,999999999);
					$pic=$rand_name;
					$t=$pic.$_FILES["photo"]["name"];
					$pic="photo/".$rand_name.$_FILES["photo"]["name"];
					move_uploaded_file($_FILES['photo']['tmp_name'],$pic);
				} 
				else
				{
					$pic="photo/".$_FILES["photo"]["name"];
					move_uploaded_file($_FILES['photo']['tmp_name'],$pic);
				}
					$query="insert into allproduct(gender,pname,detail,prize,size,code,type,quantity,photo) 
					values('".$_POST['gender']."','".$_POST['pname']."','".$_POST['detail']."','".$_POST['prize']."',
					'".$_POST['size']."','".$_POST['code']."','".$_POST['type']."',
					'".$_POST['quantity']."','".$pic."')";
					$result= mysqli_query($con,$query);

					if($result)
					{
						echo"<script>alert('Added Product Sucessfully..')</script>";
					}
					else
					{
						echo"<script>alert('Something went wrong..')</script>";
					}
		}
		
?>		
	
			<table border="1" bgcolor="pink">
				<tr>
					<td colspan="2"><center><h2><marquee width="100%" direction="left" height="100%">
						Add New Product</marquee></h2></td>
				</tr>
				<tr>
					<td><b>For </b></td>
					<td>
						<select name="gender" required>
							<option value="men">men</option>
							<option value="women">women</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><b>Product Name <b></td>
					<td><input type="text" name="pname" placeholder="product Name" required /></td>
				</tr>
				<tr>
					<td><b>Detail </b></td>
					<td><input type="text" name="detail" placeholder="product Detail" required /></td>
				</tr>
				<tr>
					<td><b>Prize </b></td>
					<td><input type="text" name="prize" placeholder="prize" required /></td>
				</tr>
				<tr>
					<td><b>Size </b</td>
					<td><input type="text" name="size" placeholder="product Size" required /></td>
				</tr>
				<tr>
					<td><b>Code </b></td>
					<td><input type="text" name="code" placeholder="product Code" required /></td>
				</tr>
				<tr>
					<td><b>Type </b></td>
					<td>
						<select name="type" required>
							<option value="Type">Type</option>  
							<option value="ring">ring</option>
							<option value="braslate">braslate</option>
							<option value="Chain">chain</option>
							<option value="Other">other</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><b>Quantity</b></td>
					<td><input type="text" name="quantity" placeholder="Quantity" required /><font color="black"></td>
				</tr>
				<tr>
					<td><b>Photo</b></td>
					<td><input type="file" id="photo" name="photo" required /> </td>
				</tr>
				<tr>
					<td bgcolor="white"><input type="reset" name="reset" value="Reset"></td>
					<td bgcolor="white"><input type="submit" name="ok" value="Add Product"></td>
				</tr>
			</table>
			<table height="100" width="100">
<tr>

</tr>
</table>
		</form>
		</center>
	
  
	<?php include("footer.php");?>

	</body>

</html>
<?php
	}
	else
	{
		header("location:index.php");
	}
?>