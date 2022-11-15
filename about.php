<!DOCTYPE html>
<html>

<head>

	<title>About</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Unrivaled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    
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
addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
</script>
<!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap2.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome2.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
    <!-- //Fonts -->
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
    <a class="active" href="about.php">About</a>
	<a href="login.php">logout</a>
  </div>
  </div>
</div>

	</footer>	
		
	</center>	
		<!-- mian-content -->
    <div class="main-banner" id="home">

        <!--/banner-->
        <div class="banner-info">
            <div class="w3pvt-logo text-center">
                <h1> <a href="about.php"><font color="cornflowerblue">About</a></h1>
            </div>
            <div class="middile-inner-con">
                <div class="tab-main mx-auto">

                    <input id="tab1" type="radio" name="tabs" class="w3layouts-sm" checked>
                    
                    <section id="content1" class="inner-w3layouts-wrap">
                        <!--<img src="images/admin.jpg" class="admin img-fluid" alt="mobile-image">
                        <h4>Hi I'm Lee Rayhan</h4>-->
                        <div class="w3pvt-logo text-center">
							<h1> <a href="about.php"><font color="white">Owners</a></h1>
						<hr color="white">
						</div>
						
												
						<br><color="white">
                        <img src="images/owner1.jpg" width="200px" class="admin img-fluid" alt="mobile-image"></img>
						<h3 class="head-w3ls">Dhruvin Kothari</h3>
						<hr color="white">
						<h2>Introduction</h2>
                        
						<p>
							We 'Jshop' have acquired a highly respectful position 
							amongst Indian manufacturers and exporters of Imitation Jewelry. 
							Our gamut of fashionable jewelry consists of necklace set, bangles, finger rings, earrings, brooches, 
							anklets, bracelets, chains, Polki Jewelry, Victorian Jewelry, Kundan Jewelry, Bangles. 
							We offer a huge variety of jewelry and ornaments as per the changing fashion statements in today's time.
							Well-equipped with the latest technology for designing and cutting the jewelry, our creative designers 
							are an added advantage of our company. For more than fifteen years, we have made big contribution to 
							the fashion industry by making trend setting jewelry. 
						</p>
						<p>
						Our range has a rich look & feel but is moderately priced, 
						and is available in various options. 
						We take care of each and every demand of the clients and 
						make sure that the products are timely delivered.
						</p>
						
                    </section>
                    
                </div>
               
            </div>
        </div>
        
    </div>
    <!--//main-content-->


		<!-- this is footer start-->
	
			<?php include("footer.php"); ?>
		
		<!-- this is footer end-->

	</body>

</html>
