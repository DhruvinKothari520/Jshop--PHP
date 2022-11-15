<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Forget Password</title>
	
	<style type="text/css" media="screen">
	
	body {
	  margin: 0;
	  padding: 0;
	}
	.container {
	  position: relative;
	  height: 100vh;
	  overflow: hidden
	}
	.vid{
	position: absolute;
	width: 100vw;
	}
	.login{
	background-color: #ffffff40;
	position: absolute;
	top:calc(25vh - 20px);
	left:calc(50vw - 160px);
	width: 300px
	height: 300px
	}
	form{
	  margin: 60px 60px;
	}
	input{
	  padding: 10px 0px;
	  margin-bottom: 10px;
	  background-color: white;
	  outline: none;
	  border: 0px;
	  width: 250px;
	}
	
	</style>
	</head>
	
	<body>
	
		<div class="container">
		
			<video class="vid" autoloop="true" autoplay="true" loop>
			
			<source src="assets/video/login.mp4" type="video/mp4" media="">
			</video>
			
			<div class="login">
			
				<form>
				
					<h1>Forget Password</h1>
					<hr>
					<input type="number" name="number" placeholder="Number" /><br>
					<input type="submit" name="otpsend" value="Send" /><br><br>
					<input type="text" name="otp" placeholder="OTP" /><br>
					<input type="submit" name="verify" value="Verify" /><br>
					
					<hr>
					<a href="login.php"><font color="black"><b>CANCEL</b></a>
				</form>
			</div>
		</div
	</body>
</html>